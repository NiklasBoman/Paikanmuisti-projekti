<?php
session_start();

function normalize_story_id($id) {
    $id = trim($id);
    if ($id === '') {
        return 'story';
    }

    $converted = @iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $id);
    if ($converted !== false) {
        $id = $converted;
    }

    $id = preg_replace('/[^A-Za-z0-9_-]+/', '_', $id);
    $id = preg_replace('/_+/', '_', $id);
    $id = trim($id, '_');
    return $id === '' ? 'story' : $id;
}

function parse_coordinate_field($value) {
    $value = trim($value);
    if ($value === '') {
        return null;
    }

    $value = str_replace(',', '.', $value);
    $value = preg_replace('/[^0-9\.\-\+]/u', '', $value);
    if ($value === '' || !is_numeric($value)) {
        return null;
    }

    return floatval($value);
}

function find_static_story($id) {
    $files = [
        "ABCD_t.php",
        "AEOEAABB_t.php",
        "CCDDPPKK_t.php",
        "E_t.php",
        "HIGF_t.php",
        "J_t.php"
    ];

    foreach ($files as $filename) {
        if (!file_exists($filename)) {
            continue;
        }

        $html = file_get_contents($filename);
        $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

        preg_match_all('/<div id=[\'\"]([^\'\"]+)[\'\"][^>]*>(.*?)<\/div>/si', $html, $matches);

        for ($i = 0; $i < count($matches[1]); $i++) {
            $id_base_raw = $matches[1][$i];
            $id_base = normalize_story_id($id_base_raw);
            $content = $matches[2][$i];

            $parts = preg_split('/(?=<b>(Nimi|Paikka):\s*<\/b>)/i', $content, -1, PREG_SPLIT_NO_EMPTY);
            $parts = $parts ?: [];
            $partIndex = 0;
            foreach ($parts as $part) {
                $storyId = $id_base . "_" . $partIndex;
                if ($storyId === $id) {
                    return [
                        'filename' => $filename,
                        'rawPart' => $part,
                        'rawIdBase' => $id_base_raw
                    ];
                }
                $partIndex++;
            }
        }
    }

    return null;
}

function replace_static_story($file, $oldPart, $newPart) {
    $html = file_get_contents($file);
    $count = 0;
    $newHtml = str_replace($oldPart, $newPart, $html, $count);
    if ($count !== 1) {
        return false;
    }
    file_put_contents($file, $newHtml);
    return true;
}

function tm35_to_wgs84($northing, $easting) {
    $a = 6378137.0;
    $f = 1 / 298.257222101;
    $e2 = $f * (2 - $f);
    $k0 = 0.9996;
    $lambda0 = deg2rad(27.0);
    $falseEasting = 500000.0;

    $N = $northing;
    $E = $easting - $falseEasting;

    $M = $N / $k0;
    $a0 = 1 - $e2 / 4 - 3 * pow($e2, 2) / 64 - 5 * pow($e2, 3) / 256;
    $a1 = 3 / 8.0 * ($e2 + pow($e2, 2) / 4 + 15 * pow($e2, 3) / 128);
    $a2 = 15 / 256.0 * (pow($e2, 2) + 3 * pow($e2, 3) / 4);
    $a3 = 35 * pow($e2, 3) / 3072.0;

    $mu = $M / ($a * $a0);
    $phi1 = $mu + $a1 * sin(2 * $mu) + $a2 * sin(4 * $mu) + $a3 * sin(6 * $mu);

    $sinPhi1 = sin($phi1);
    $cosPhi1 = cos($phi1);
    $tanPhi1 = tan($phi1);
    $N1 = $a / sqrt(1 - $e2 * $sinPhi1 * $sinPhi1);
    $R1 = $a * (1 - $e2) / pow(1 - $e2 * $sinPhi1 * $sinPhi1, 1.5);
    $ePrimeSq = $e2 / (1 - $e2);
    $C1 = $ePrimeSq * pow($cosPhi1, 2);
    $D = $E / ($N1 * $k0);

    $phi = $phi1 - ($N1 * $tanPhi1 / $R1) * (
        $D * $D / 2
        - (5 + 3 * $tanPhi1 * $tanPhi1 + 10 * $C1 - 4 * $C1 * $C1 - 9 * $ePrimeSq) * pow($D, 4) / 24
        + (61 + 90 * $tanPhi1 * $tanPhi1 + 298 * $C1 + 45 * pow($tanPhi1, 4) - 252 * $ePrimeSq - 3 * $C1 * $C1) * pow($D, 6) / 720
    );

    $lambda = $lambda0 + (
        $D
        - (1 + 2 * $tanPhi1 * $tanPhi1 + $C1) * pow($D, 3) / 6
        + (5 - 2 * $C1 + 28 * $tanPhi1 * $tanPhi1 - 3 * $C1 * $C1 + 8 * $ePrimeSq + 24 * pow($tanPhi1, 4)) * pow($D, 5) / 120
    ) / $cosPhi1;

    return [rad2deg($phi), rad2deg($lambda)];
}

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

if (!isset($_POST["id"]) || !isset($_POST["paikka"]) || !isset($_POST["kuvaus"])) {
    die("Virhe: puuttuva data");
}

$id = normalize_story_id($_POST["id"]);
$paikka = $_POST["paikka"];
$kuvaus = $_POST["kuvaus"];

$northing = parse_coordinate_field($_POST["lat"] ?? '');
$easting = parse_coordinate_field($_POST["lng"] ?? '');

if ($northing === null || $easting === null) {
    die("Virhe: koordinaatit on annettava TM35-muodossa.");
}

if ($northing < 6500000 || $northing > 7700000 || $easting < 100000 || $easting > 800000) {
    die("Virhe: koordinaatit eivät ole kelvollista TM35-arvoja.");
}

list($lat, $lng) = tm35_to_wgs84($northing, $easting);

$jsonFile = "tarinat.json";
$data = [];

if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $data = json_decode($jsonContent, true);
    if (!is_array($data)) $data = [];
}

$staticStory = find_static_story($id);
if (!$staticStory) {
    foreach ($data as $existingKey => $existingStory) {
        if (normalize_story_id($existingKey) === $id) {
            $id = $existingKey;
            break;
        }
    }
    $staticStory = find_static_story($id);
}
if ($staticStory) {
    // Päivitä staattinen tarina tiedostoon
    $oldPart = $staticStory['rawPart'];
    $newPart = $oldPart;
    
    $newPart = preg_replace('/<br\s*\/?><b>Koordinaatit[^<]*<\/b>[^<]*/', '', $newPart);
    $newPart = preg_replace('/<b>Koordinaatit[^<]*<\/b>[^<]*/', '', $newPart);
    
    $newPart = rtrim($newPart);
    $newPart = preg_replace('/<\s*br\s*\/?\s*>$/', '', $newPart);
    
    $newPart = $newPart . '<br><b>Koordinaatit (TM35):</b> N ' . $northing . ', E ' . $easting;
    
    $updated = replace_static_story($staticStory['filename'], $oldPart, $newPart);
    
    if (!$updated) {
        $file = $staticStory['filename'];
        $html = file_get_contents($file);
        $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');
        
        $divPattern = '/<div\s+id=[\'"]' . preg_quote($staticStory['rawIdBase']) . '[\'"][^>]*>(.*?)<\/div>/is';
        
        if (preg_match($divPattern, $html, $divMatches)) {
            $divContent = $divMatches[1];
            $newDivContent = preg_replace('/<br\s*\/?><b>Koordinaatit[^<]*<\/b>[^<]*/', '', $divContent);
            $newDivContent = rtrim($newDivContent);
            $newDivContent = preg_replace('/<\s*br\s*\/?\s*>$/', '', $newDivContent);
            $newDivContent = $newDivContent . '<br><b>Koordinaatit (TM35):</b> N ' . $northing . ', E ' . $easting;
            
            $newHtml = str_replace($divMatches[0], '<div id="' . $staticStory['rawIdBase'] . '" style="display:none;">' . $newDivContent . '</div>', $html);
            
            if ($newHtml !== $html) {
                $newHtml = mb_convert_encoding($newHtml, 'ISO-8859-1', 'UTF-8');
                file_put_contents($file, $newHtml);
                $updated = true;
            }
        }
    }
    
    if (!$updated) {
        die("Virhe: tarinan tallennus tiedostoon epäonnistui. (Tarinaa ei löytynyt tiedostosta.)");
    }
    
    if (isset($data[$id])) {
        unset($data[$id]);
    }
} else {
    // Uudet tarinat tallennetaan vain JSONiin
    $data[$id] = [
        "paikka" => $paikka,
        "kuvaus" => $kuvaus,
        "northing" => $northing,
        "easting" => $easting,
        "lat" => $lat,
        "lng" => $lng
    ];
}

// Tallenna JSON-tiedosto
file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "<h2>Muutokset tallennettu!</h2>";
echo "<p><a href='tarinat.php'>Palaa tarinoihin</a></p>";

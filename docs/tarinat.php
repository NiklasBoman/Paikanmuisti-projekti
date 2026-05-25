<?php
session_start();
$isAdmin = isset($_SESSION["admin"]) && $_SESSION["admin"] === true;

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

function lue_tarinat_tiedostosta($filename) {

    if (!file_exists($filename)) return [];

    $html = file_get_contents($filename);
    $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

    preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

    $tarinat = [];

    for ($i = 0; $i < count($matches[1]); $i++) {

        $id_base_raw = $matches[1][$i];
        $id_base = normalize_story_id($id_base_raw);
        $content = $matches[2][$i];

        $parts = preg_split('/(?=<b>(Nimi|Paikka):\s*<\/b>)/i', $content, -1, PREG_SPLIT_NO_EMPTY);

        $partIndex = 0;
        foreach ($parts as $part) {

            $paikka = "";

            if (preg_match('/<b>Nimi:\s*<\/b>([^<]+)/i', $part, $m)) {
                $paikka = trim($m[1]);
            }
            else if (preg_match('/<b>Paikka:\s*<\/b>([^<]+)/i', $part, $m)) {
                $paikka = trim($m[1]);
            }

            if ($paikka === "") continue;

            $paikka = html_entity_decode($paikka, ENT_QUOTES, 'UTF-8');
            $part   = html_entity_decode($part,   ENT_QUOTES, 'UTF-8');

            $firstLetter = strtoupper(mb_substr($paikka, 0, 1));

            $tarina = [
                "id" => $id_base . "_" . $partIndex,
                "paikka" => $paikka,
                "firstLetter" => $firstLetter,
                "kuvaus" => $part,
                "northing" => null,
                "easting" => null,
                "lat" => null,
                "lng" => null
            ];

            if (preg_match('/<b>Koordinaatit\s*(?:\([^)]*\))?:\s*<\/b>\s*N\s*([0-9.]+),\s*E\s*([0-9.]+)/i', $part, $coordMatches)) {
                $tarina['northing'] = floatval($coordMatches[1]);
                $tarina['easting'] = floatval($coordMatches[2]);
                list($tarina['lat'], $tarina['lng']) = tm35_to_wgs84($tarina['northing'], $tarina['easting']);
            }

            $tarinat[] = $tarina;
            $partIndex++;
        }
    }

    return $tarinat;
}

// Lue tarinat tiedostoista
$tarinat = [];
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("ABCD_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("AEOEAABB_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("CCDDPPKK_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("E_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("HIGF_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("J_t.php"));

$tarinat = array_filter($tarinat, fn($t) => trim(strip_tags($t["kuvaus"])) !== "");

$jsonFile = "tarinat.json";
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);

    if (is_array($muokatut)) {
        foreach ($tarinat as &$t) {
            $jsonKey = null;

            if (isset($muokatut[$t["id"]])) {
                $jsonKey = $t["id"];
            } else {
                foreach ($muokatut as $existingKey => $existingStory) {
                    if (normalize_story_id($existingKey) === normalize_story_id($t["id"])) {
                        $jsonKey = $existingKey;
                        break;
                    }
                }
            }

            if ($jsonKey !== null) {
                $t["paikka"] = $muokatut[$jsonKey]["paikka"];
                $t["kuvaus"] = $muokatut[$jsonKey]["kuvaus"];

                if (isset($muokatut[$jsonKey]["northing"]) && $muokatut[$jsonKey]["northing"] !== null && $t["northing"] === null) {
                    $t["northing"] = $muokatut[$jsonKey]["northing"];
                    $t["easting"] = $muokatut[$jsonKey]["easting"] ?? null;
                    $t["lat"] = $muokatut[$jsonKey]["lat"] ?? null;
                    $t["lng"] = $muokatut[$jsonKey]["lng"] ?? null;
                }
            }
        }

        //UUDET TARINAT JSON:STA (EI OLE ALKUPERÄISISSÄ TIEDOSTOISSA)
        foreach ($muokatut as $id => $data) {
            $found = false;
            foreach ($tarinat as $t) {
                if ($t["id"] === $id || normalize_story_id($t["id"]) === normalize_story_id($id)) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $firstLetter = strtoupper(mb_substr($data["paikka"], 0, 1));
                $tarinat[] = [
                    "id" => $id,
                    "paikka" => $data["paikka"],
                    "firstLetter" => $firstLetter,
                    "kuvaus" => $data["kuvaus"],
                    "northing" => isset($data["northing"]) ? $data["northing"] : null,
                    "easting" => isset($data["easting"]) ? $data["easting"] : null,
                    "lat" => isset($data["lat"]) ? $data["lat"] : null,
                    "lng" => isset($data["lng"]) ? $data["lng"] : null
                ];
            }
        }
    }
}

// Haku ja kirjainsuodatus
$hakusana = isset($_GET['q']) ? strtolower($_GET['q']) : '';

if ($hakusana !== '') {
    $tarinat = array_filter($tarinat, function($t) use ($hakusana) {
        return strpos(strtolower($t["kuvaus"]), $hakusana) !== false
            || strpos(strtolower($t["paikka"]), $hakusana) !== false;
    });
    $filterLetter = "";
} else {
    $filterLetter = $_GET['letter'] ?? 'A';
    $tarinat = array_filter($tarinat, fn($t) => $t["firstLetter"] === $filterLetter);
}

// Järjestä aakkosittain
usort($tarinat, fn($a, $b) => strcmp($a["paikka"], $b["paikka"]));

?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tarinat</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva-arkisto</a></li>
    <li><a href="info.php">Info</a></li>

    <?php if ($isAdmin): ?>
        <li><a href="logout.php">Kirjaudu ulos</a></li>
    <?php endif; ?>
  </ul>
</nav>

<section class="tarinat">
  <h2>Tarinat</h2>

  <form method="GET" class="haku">
    <input type="text" name="q" placeholder="Hae tarinoita..."
           value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>">
    <button type="submit">Hae</button>
  </form>
<br>
  <form>
        <?php if ($isAdmin): ?>
            <a href="lisaa.php" class="add-btn">Lisää tarina</a>
        <?php endif; ?>
  </form>

  <div class="tarina-list">
    <?php foreach ($tarinat as $tarina): ?>
<div class="tarina">
    <h3>
        <?php echo htmlspecialchars($tarina["paikka"]); ?>

        <?php if ($isAdmin): ?>
            <a href="muokkaa.php?id=<?php echo $tarina['id']; ?>" class="edit-btn">Muokkaa</a>
        <?php endif; ?>
    </h3>

    <?php echo $tarina["kuvaus"]; ?>
    <?php if (isset($tarina["lat"], $tarina["lng"]) && is_numeric($tarina["lat"]) && is_numeric($tarina["lng"])): ?>
        <?php
            $karttaQuery = 'story=' . urlencode($tarina['id']) . '&lat=' . urlencode($tarina['lat']) . '&lng=' . urlencode($tarina['lng']);
        ?>
        <p><a href="kartta.php?<?php echo $karttaQuery; ?>">Näytä kartalla</a></p>
    <?php endif; ?>
</div>
    <?php endforeach; ?>
  </div>

  <div class="kirjaimet">
    <?php 
    $letters = array_merge(range('A','Z'), ['Å','Ä','Ö']);
    foreach ($letters as $letter): 
    ?>
      <a href="tarinat.php?letter=<?php echo $letter; ?>"
         class="<?php echo ($filterLetter === $letter ? 'active' : ''); ?>">
         <?php echo $letter; ?>
      </a>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

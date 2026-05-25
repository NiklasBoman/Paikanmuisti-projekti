
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

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = normalize_story_id($_GET["id"]);

function lue_tarinat_tiedostosta($filename) {

    if (!file_exists($filename)) return [];

    $html = file_get_contents($filename);
    $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

    preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

    $tarinat = [];

    for ($i = 0; $i < count($matches[1]); $i++) {

        $id_base_raw = $matches[1][$i];
        $id_base = normalize_story_id($id_base_raw);
        $content = trim($matches[2][$i]);

        $content = preg_replace('/[\x00-\x1F\x7F\x80-\x9F�]/u', '', $content);

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

            $tarinat[] = [
                "id" => $id_base . "_" . $partIndex,
                "paikka" => $paikka,
                "firstLetter" => $firstLetter,
                "kuvaus" => $part
            ];
        }
    }

    return $tarinat;
}

// Lue kaikki tarinat
$tarinat = [];
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("ABCD_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("AEOEAABB_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("CCDDPPKK_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("E_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("HIGF_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("J_t.php"));

$tarina = null;
foreach ($tarinat as $t) {
    if (normalize_story_id($t["id"]) === $id) {
        $tarina = $t;
        break;
    }
}

$jsonFile = "tarinat.json";

if (!$tarina && file_exists($jsonFile)) {

    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);

    if (isset($muokatut[$id])) {
        $tarina = [
            "id" => $id,
            "paikka" => $muokatut[$id]["paikka"],
            "kuvaus" => $muokatut[$id]["kuvaus"],
            "firstLetter" => strtoupper(mb_substr($muokatut[$id]["paikka"], 0, 1)),
            "lat" => isset($muokatut[$id]["lat"]) ? $muokatut[$id]["lat"] : null,
            "lng" => isset($muokatut[$id]["lng"]) ? $muokatut[$id]["lng"] : null
        ];
    } else {
        foreach ($muokatut as $existingKey => $existingStory) {
            if (normalize_story_id($existingKey) === $id) {
                $tarina = [
                    "id" => $existingKey,
                    "paikka" => $existingStory["paikka"],
                    "kuvaus" => $existingStory["kuvaus"],
                    "firstLetter" => strtoupper(mb_substr($existingStory["paikka"], 0, 1)),
                    "lat" => isset($existingStory["lat"]) ? $existingStory["lat"] : null,
                    "lng" => isset($existingStory["lng"]) ? $existingStory["lng"] : null
                ];
                break;
            }
        }
    }
}

if (!$tarina) {
    die("Tarinaa ei löytynyt");
}

$northing = null;
$easting = null;
$lat = null;
$lng = null;

if (isset($tarina["kuvaus"])) {
    if (preg_match('/<b>Koordinaatit\s*\([^)]*\):\s*<\/b>\s*N\s*([0-9.]+),?\s*E\s*([0-9.]+)/i', $tarina["kuvaus"], $coordMatches)) {
        $northing = floatval($coordMatches[1]);
        $easting = floatval($coordMatches[2]);
        
        // Muunna WGS84-koordinaateiksi
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
        
        $lat = rad2deg($phi);
        $lng = rad2deg($lambda);
    }
}

// Jos JSON-versio on olemassa, käytä sitä uusille tarinoille
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);

    if (isset($muokatut[$id])) {
        $tarina["paikka"] = $muokatut[$id]["paikka"];
        $tarina["kuvaus"] = $muokatut[$id]["kuvaus"];
        $northing = isset($muokatut[$id]["northing"]) ? $muokatut[$id]["northing"] : $northing;
        $easting = isset($muokatut[$id]["easting"]) ? $muokatut[$id]["easting"] : $easting;
        $lat = isset($muokatut[$id]["lat"]) ? $muokatut[$id]["lat"] : $lat;
        $lng = isset($muokatut[$id]["lng"]) ? $muokatut[$id]["lng"] : $lng;
    }
}

// Lisää koordinaatit tarinan taulukkoon
$tarina["northing"] = $northing;
$tarina["easting"] = $easting;
$tarina["lat"] = $lat;
$tarina["lng"] = $lng;

?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Muokkaa tarinaa</title>
<link rel="stylesheet" href="tyyli.css">
</head>
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva-arkisto</a></li>
    <li><a href="info.php">Info</a></li>
    <li><a href="logout.php">Kirjaudu ulos</a></li>
  </ul>
</nav>

<section class="form-container">
  <div class="form-card">
    <h2>Muokkaa tarinaa</h2>

    <form method="POST" action="tallenna.php" class="kuva-form">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($tarina["id"]); ?>">

      <div class="form-group">
        <label for="paikka">Paikka:</label>
        <input type="text" id="paikka" name="paikka" value="<?php echo htmlspecialchars($tarina["paikka"]); ?>" class="edit-input">
      </div>

      <div class="form-group">
        <label for="kuvaus">Kuvaus:</label>
        <textarea id="kuvaus" name="kuvaus" class="edit-textarea"><?php 
          echo htmlspecialchars($tarina["kuvaus"]); 
        ?></textarea>
      </div>

      <div class="form-group">
        <label for="lat">N-koordinaatti:</label>
        <input type="text" id="lat" name="lat" value="<?php echo htmlspecialchars($tarina["northing"] ?? ''); ?>" class="coord-input">
      </div>

      <div class="form-group">
        <label for="lng">E-koordinaatti:</label>
        <input type="text" id="lng" name="lng" value="<?php echo htmlspecialchars($tarina["easting"] ?? ''); ?>" class="coord-input">
      </div>

      <small>Syötä N- ja E-koordinaatit muodossa <code>N 6971222,908</code> ja <code>E 489268,988</code>.</small>

      <div id="map" class="form-map"></div>

      <div class="form-actions">
        <button type="submit">Tallenna muutokset</button>
        <a href="tarinat.php" class="btn-cancel">Peruuta</a>
      </div>
    </form>
  </div>
</section>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
const initialLat = <?php echo $tarina["lat"] !== null ? json_encode(floatval($tarina["lat"])) : 'null'; ?>;
const initialLng = <?php echo $tarina["lng"] !== null ? json_encode(floatval($tarina["lng"])) : 'null'; ?>;
const mapCenter = initialLat !== null && initialLng !== null ? [initialLat, initialLng] : [62.95556, 26.75556];
const map = L.map('map').setView(mapCenter, initialLat !== null && initialLng !== null ? 15 : 12);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: ''
}).addTo(map);
let marker = null;
if (initialLat !== null && initialLng !== null) {
    marker = L.marker([initialLat, initialLng]).addTo(map);
}
</script>

</body>
</html>

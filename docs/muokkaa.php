
<?php
session_start();

// Vain admin saa muokata
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Tarinan ID URL:sta
if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = $_GET["id"];

// Tarinoiden lukeminen tiedostoista
function lue_tarinat_tiedostosta($filename) {

    if (!file_exists($filename)) return [];

    $html = file_get_contents($filename);
    $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

    preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

    $tarinat = [];

    for ($i = 0; $i < count($matches[1]); $i++) {

        $id_base = $matches[1][$i];
        $content = trim($matches[2][$i]);

        $content = preg_replace('/[\x00-\x1F\x7F\x80-\x9F�]/u', '', $content);

        $parts = preg_split('/(?=<b>(Nimi|Paikka):\s*<\/b>)/i', $content, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($parts as $index => $part) {

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
                "id" => $id_base . "_" . $index,
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

// Etsi tarina
$tarina = null;
foreach ($tarinat as $t) {
    if ($t["id"] === $id) {
        $tarina = $t;
        break;
    }
}

// Jos tarina ei ole alkuperäisessä tiedostossa, etsi JSON:sta
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
    }
}

// Jos tarinaa ei löydy mistään, lopeta
if (!$tarina) {
    die("Tarinaa ei löytynyt");
}

// Etsi tarinan koordinaatit
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
        
        $lat = rad2deg($phi);
        $lng = rad2deg($lambda);
    }
}

// Jos JSON-versio on olemassa, käytä sitä vain uusille tarinoille
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
</head>
<link rel="stylesheet" href="Tyyli.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<body>

<h2>Muokkaa tarinaa</h2>

<form method="POST" action="tallenna.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($tarina["id"]); ?>">

    <label>Paikka:</label><br>
    <input type="text" name="paikka" value="<?php echo htmlspecialchars($tarina["paikka"]); ?>" style="width:300px;"><br><br>

    <label>Kuvaus:</label><br>
    <textarea name="kuvaus" style="width:500px; height:300px;"><?php 
        echo htmlspecialchars($tarina["kuvaus"]); 
    ?></textarea><br><br>

    <label>N-koordinaatti:</label><br>
    <input type="text" id="lat" name="lat" value="<?php echo htmlspecialchars($tarina["northing"] ?? ''); ?>" style="width:200px;"><br><br>

    <label>E-koordinaatti:</label><br>
    <input type="text" id="lng" name="lng" value="<?php echo htmlspecialchars($tarina["easting"] ?? ''); ?>" style="width:200px;"><br>
    <small>Syötä N- ja E-koordinaatit muodossa <code>N 6971222,908</code> ja <code>E 489268,988</code>.</small><br><br>

    <div id="map" style="width:100%; height:320px; margin-bottom:20px;"></div>

    <button type="submit">Tallenna muutokset</button>
    <br><br>
    <a href="tarinat.php">Peruuta</a>
</form>

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

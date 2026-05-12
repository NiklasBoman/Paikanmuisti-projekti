<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tervon kartta</title>
<link rel="stylesheet" href="Tyyli.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva-arkisto</a></li>
    <li><a href="info.php">Info</a></li>
  </ul>
</nav> 
<div class="map" id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<?php
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

function lue_tarinat_tiedostosta($filename) {
    if (!file_exists($filename)) return [];

    $html = file_get_contents($filename);
    $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

    preg_match_all('/<div id=[\'\"]([^\'\"]+)[\'\"][^>]*>(.*?)<\/div>/si', $html, $matches);
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
            } elseif (preg_match('/<b>Paikka:\s*<\/b>([^<]+)/i', $part, $m)) {
                $paikka = trim($m[1]);
            }
            if ($paikka === "") continue;
            $paikka = html_entity_decode($paikka, ENT_QUOTES, 'UTF-8');
            $part = html_entity_decode($part, ENT_QUOTES, 'UTF-8');
            
            $tarina = [
                "id" => $id_base . "_" . $index,
                "paikka" => $paikka,
                "kuvaus" => $part,
                "northing" => null,
                "easting" => null,
                "lat" => null,
                "lng" => null
            ];
            
            // Parse coordinates if present (handles both old and new format)
            if (preg_match('/<b>Koordinaatit\s*(?:\([^)]*\))?:\s*<\/b>\s*N\s*([0-9.]+),\s*E\s*([0-9.]+)/i', $part, $coordMatches)) {
                $tarina['northing'] = floatval($coordMatches[1]);
                $tarina['easting'] = floatval($coordMatches[2]);
                list($tarina['lat'], $tarina['lng']) = tm35_to_wgs84($tarina['northing'], $tarina['easting']);
            }
            
            $tarinat[] = $tarina;
        }
    }
    return $tarinat;
}

$tarinat = [];
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("ABCD_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("AEOEAABB_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("CCDDPPKK_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("E_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("HIGF_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("J_t.php"));

$jsonFile = "tarinat.json";
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);
    if (is_array($muokatut)) {
        foreach ($tarinat as &$t) {
            if (isset($muokatut[$t["id"]])) {
                $t["paikka"] = $muokatut[$t["id"]]["paikka"];
                $t["kuvaus"] = $muokatut[$t["id"]]["kuvaus"];
                
                // Only update coordinates if this is a new story (not from _t.php)
                // Static stories should keep their coordinates from _t.php files
                if ($muokatut[$t["id"]]["northing"] !== null && $t["northing"] === null) {
                    $t["northing"] = isset($muokatut[$t["id"]]["northing"]) ? $muokatut[$t["id"]]["northing"] : null;
                    $t["easting"] = isset($muokatut[$t["id"]]["easting"]) ? $muokatut[$t["id"]]["easting"] : null;
                    $t["lat"] = isset($muokatut[$t["id"]]["lat"]) ? $muokatut[$t["id"]]["lat"] : null;
                    $t["lng"] = isset($muokatut[$t["id"]]["lng"]) ? $muokatut[$t["id"]]["lng"] : null;
                }
            }
        }
        foreach ($muokatut as $id => $data) {
            $found = false;
            foreach ($tarinat as $t) {
                if ($t["id"] === $id) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $tarinat[] = [
                    "id" => $id,
                    "paikka" => $data["paikka"],
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

$paikat = [];
foreach ($tarinat as $t) {
    $lat = isset($t["lat"]) ? $t["lat"] : null;
    $lng = isset($t["lng"]) ? $t["lng"] : null;
    if ((!is_numeric($lat) || !is_numeric($lng)) && isset($t["northing"], $t["easting"])) {
        $northing = $t["northing"];
        $easting = $t["easting"];
        if (is_numeric($northing) && is_numeric($easting)) {
            list($lat, $lng) = tm35_to_wgs84(floatval($northing), floatval($easting));
        }
    }
    if (is_numeric($lat) && is_numeric($lng)) {
        $paikat[] = [
            "id" => $t["id"],
            "nimi" => $t["paikka"],
            "lat" => floatval($lat),
            "lng" => floatval($lng),
            "kuvaus" => strip_tags($t["kuvaus"])
        ];
    }
}
$selectedStory = isset($_GET['story']) ? $_GET['story'] : null;
$selectedLat = isset($_GET['lat']) ? floatval($_GET['lat']) : null;
$selectedLng = isset($_GET['lng']) ? floatval($_GET['lng']) : null;
?>
<script>
const paikat = <?php echo json_encode($paikat, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
const selectedStory = <?php echo json_encode($selectedStory, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); ?>;
const selectedLat = <?php echo $selectedLat !== null ? json_encode($selectedLat) : 'null'; ?>;
const selectedLng = <?php echo $selectedLng !== null ? json_encode($selectedLng) : 'null'; ?>;
const selectedPlace = (selectedLat !== null && selectedLng !== null)
  ? { id: selectedStory, lat: selectedLat, lng: selectedLng }
  : paikat.find(p => selectedStory && p.id === selectedStory);
const initialCenter = selectedPlace ? [selectedPlace.lat, selectedPlace.lng] : (paikat.length ? [paikat[0].lat, paikat[0].lng] : [62.95556, 26.75556]);
const initialZoom = selectedPlace ? 15 : 12;
const map = L.map('map').setView(initialCenter, initialZoom);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: ''
}).addTo(map);

paikat.forEach(p => {
  const marker = L.marker([p.lat, p.lng])
    .addTo(map)
    .bindPopup(`<strong>${p.nimi}</strong><br>${p.kuvaus}`);

  if (selectedPlace && p.id === selectedPlace.id) {
    marker.openPopup();
  }
});
</script>
</body>
</html>

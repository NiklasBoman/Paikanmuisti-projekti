
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

// --- FUNKTIO TARINOIDEN LUKEMISEEN ---
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

// --- LUE KAIKKI TARINAT ALKUPERÄISISTÄ TIEDOSTOISTA ---
$tarinat = [];
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("ABCD_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("AEOEAABB_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("CCDDPPKK_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("E_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("HIGF_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("J_t.php"));

// ETSI TARINA ALKUPERÄISISTÄ
$tarina = null;
foreach ($tarinat as $t) {
    if ($t["id"] === $id) {
        $tarina = $t;
        break;
    }
}

// --- JOS EI LÖYDY ALKUPERÄISISTÄ → ETSI JSON-TIEDOSTOSTA ---
$jsonFile = "tarinat.json";

if (!$tarina && file_exists($jsonFile)) {

    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);

    if (isset($muokatut[$id])) {
        $tarina = [
            "id" => $id,
            "paikka" => $muokatut[$id]["paikka"],
            "kuvaus" => $muokatut[$id]["kuvaus"],
            "firstLetter" => strtoupper(mb_substr($muokatut[$id]["paikka"], 0, 1))
        ];
    }
}

// --- JOS EI LÖYDY MISTÄÄN ---
if (!$tarina) {
    die("Tarinaa ei löytynyt");
}

// --- KORVAA TARINA JSON-VERSIOLLA JOS OLEMASSA ---
if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $muokatut = json_decode($jsonContent, true);

    if (isset($muokatut[$id])) {
        $tarina["paikka"] = $muokatut[$id]["paikka"];
        $tarina["kuvaus"] = $muokatut[$id]["kuvaus"];
    }
}

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

    <button type="submit">Tallenna muutokset</button>
    <br><br>
    <a href="tarinat.php">Peruuta</a>
</form>

</body>
</html>

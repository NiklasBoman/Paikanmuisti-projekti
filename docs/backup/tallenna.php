<?php
session_start();

// Vain admin saa tallentaa
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Tarkista että data tuli
if (!isset($_POST["id"]) || !isset($_POST["paikka"]) || !isset($_POST["kuvaus"])) {
    die("Virhe: puuttuva data");
}

$id = $_POST["id"];
$paikka = $_POST["paikka"];
$kuvaus = $_POST["kuvaus"];

// Lue olemassa oleva JSON
$jsonFile = "tarinat.json";
$data = [];

if (file_exists($jsonFile)) {
    $jsonContent = file_get_contents($jsonFile);
    $data = json_decode($jsonContent, true);
    if (!is_array($data)) $data = [];
}

// Tallenna tarina JSON:iin
$data[$id] = [
    "paikka" => $paikka,
    "kuvaus" => $kuvaus
];

// Kirjoita takaisin tiedostoon
file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "<h2>Muutokset tallennettu!</h2>";
echo "<p><a href='tarinat.php'>Palaa tarinoihin</a></p>";

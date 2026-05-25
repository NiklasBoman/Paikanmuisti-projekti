<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = $_GET["id"];
$kuvat_json_file = "kuvat.json";

if (!file_exists($kuvat_json_file)) {
    header("Location: KuvaA.php?error=not_found");
    exit;
}

$json_content = file_get_contents($kuvat_json_file);
$kuvat_data = json_decode($json_content, true) ?? [];

if (!isset($kuvat_data[$id])) {
    die("Kuvaa ei löydy");
}

// Delete the actual image file
if (file_exists($kuvat_data[$id]["kuva_url"])) {
    unlink($kuvat_data[$id]["kuva_url"]);
}

// Remove from JSON
unset($kuvat_data[$id]);

// Save updated JSON
file_put_contents($kuvat_json_file, json_encode($kuvat_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: KuvaA.php");
exit;
?>

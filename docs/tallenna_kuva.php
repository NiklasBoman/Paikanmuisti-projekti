<?php
ob_start();
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

if (!isset($_FILES["kuva"]) || $_FILES["kuva"]["error"] !== UPLOAD_ERR_OK) {
    header("Location: KuvaA.php?error=kuva");
    exit;
}

$paikka = trim($_POST["paikka"]);
$kuvaus = trim($_POST["kuvaus"]);

$targetDir = "kuvat/";
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

$filename = time() . "_" . basename($_FILES["kuva"]["name"]);
$targetFile = $targetDir . $filename;

if (!move_uploaded_file($_FILES["kuva"]["tmp_name"], $targetFile)) {
    header("Location: KuvaA.php?error=upload");
    exit;
}

// Store image metadata in JSON file
$kuvat_json_file = "kuvat.json";
$kuvat_data = [];

if (file_exists($kuvat_json_file)) {
    $json_content = file_get_contents($kuvat_json_file);
    $kuvat_data = json_decode($json_content, true) ?? [];
}

$image_id = time() . "_" . uniqid();
$kuvat_data[$image_id] = [
    "id" => $image_id,
    "paikka" => $paikka,
    "kuva_url" => $targetFile,
    "kuvaus" => $kuvaus,
    "lisatty" => date("Y-m-d H:i:s")
];

file_put_contents($kuvat_json_file, json_encode($kuvat_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header("Location: KuvaA.php?ok=1");
exit;

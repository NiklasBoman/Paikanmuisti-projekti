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

$pdo = new PDO("mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $pdo->prepare("INSERT INTO kuvat (paikka, kuva_url, kuvaus) VALUES (?, ?, ?)");
$stmt->execute([$paikka, $targetFile, $kuvaus]);

header("Location: KuvaA.php?ok=1");
exit;

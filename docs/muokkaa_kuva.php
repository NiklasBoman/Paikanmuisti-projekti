<?php
session_start();

// Vain admin saa muokata
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Tarkista POST
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["id"]) || !isset($_POST["kuvaus"])) {
    die("Virheellinen pyyntö");
}

$id = (int)$_POST["id"];
$kuvaus = trim($_POST["kuvaus"]);

if ($id <= 0) {
    die("Virheellinen ID");
}

// YHDISTÄÄ TIETOKANTAAN
$pdo = new PDO(
    "mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4",
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// PÄIVITÄ KUVAUS
$stmt = $pdo->prepare("UPDATE kuvat SET kuvaus = ? WHERE id = ?");
$stmt->execute([$kuvaus, $id]);

if ($stmt->rowCount() > 0) {
    echo "success";
} else {
    echo "error";
}
?>

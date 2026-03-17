<?php
session_start();

// Vain admin saa lisätä kuvia
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// YHDISTÄÄ TIETOKANTAAN
$pdo = new PDO(
    "mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4",
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $paikka = $_POST["paikka"];
    $kuvaus = $_POST["kuvaus"];

    $kuvaNimi = $_FILES["kuva"]["name"];
    $tmp = $_FILES["kuva"]["tmp_name"];

    $kohde = "kuvat/" . $kuvaNimi;

    // SIIRTÄÄ KUVAN PALVELIMELLE
    move_uploaded_file($tmp, $kohde);

    // TALLENTAA TIEDOT TIETOKANTAAN
    $sql = "INSERT INTO kuvat (paikka, kuva_url, kuvaus) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$paikka, $kohde, $kuvaus]);

    // OHJAA TAKAISIN KUVA-ARKISTOON
    header("Location: KuvaA.php");
    exit;
} catch (Exception $e) {
    die("Virhe: " . $e->getMessage());
}
?>

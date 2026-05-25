
<?php
session_start();

// Vain admin saa poistaa
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Kuvan ID URL:sta
if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = $_GET["id"];

// YHDISTÄÄ TIETOKANTAAN
$pdo = new PDO(
    "mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4",
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// HAKEE KUVAN TIEDOT
$stmt = $pdo->prepare("SELECT kuva_url FROM kuvat WHERE id = ?");
$stmt->execute([$id]);
$kuva = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kuva) {
    die("Kuvaa ei löydy");
}

// POISTAA TIEDOSTON PALVELIMESTA
if (file_exists($kuva["kuva_url"])) {
    unlink($kuva["kuva_url"]);
}

// POISTAA TIEDOT TIETOKANNASTA
$sql = "DELETE FROM kuvat WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

// OHJAA TAKAISIN KUVA-ARKISTOON
header("Location: KuvaA.php");
exit;
?>

<?php
session_start();

// Vain admin saa muokata
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

// Käsittele POST (tallenna muutokset)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["id"]) || !isset($_POST["kuvaus"])) {
        die("Virheellinen pyyntö");
    }

    $id = (int)$_POST["id"];
    $kuvaus = trim($_POST["kuvaus"]);

    if ($id <= 0) {
        die("Virheellinen ID");
    }

    // PÄIVITÄ KUVAUS
    $stmt = $pdo->prepare("UPDATE kuvat SET kuvaus = ? WHERE id = ?");
    $stmt->execute([$kuvaus, $id]);

    // Ohjaa takaisin kuva-arkistoon
    header("Location: KuvaA.php");
    exit;
}

// Käsittele GET (näytä muokkauslomake)
if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = (int)$_GET["id"];

if ($id <= 0) {
    die("Virheellinen ID");
}

// HAE KUVAN TIEDOT
$stmt = $pdo->prepare("SELECT id, paikka, kuva_url, kuvaus FROM kuvat WHERE id = ?");
$stmt->execute([$id]);
$kuva = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$kuva) {
    die("Kuvaa ei löytynyt");
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Muokkaa kuvan kuvausta</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>

<h2>Muokkaa kuvan kuvausta</h2>

<form method="POST" action="muokkaa_kuva.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($kuva["id"]); ?>">

    <label>Paikka:</label><br>
    <strong><?php echo htmlspecialchars($kuva["paikka"]); ?></strong><br><br>

    <label>Kuva:</label><br>
    <img src="<?php echo htmlspecialchars($kuva["kuva_url"]); ?>" alt="<?php echo htmlspecialchars($kuva["paikka"]); ?>" style="max-width: 400px; max-height: 300px; margin-bottom: 20px;"><br><br>

    <label>Kuvaus:</label><br>
    <textarea name="kuvaus" style="width:500px; height:300px;"><?php 
        echo htmlspecialchars($kuva["kuvaus"]); 
    ?></textarea><br><br>

    <button type="submit">Tallenna muutokset</button>
    <br><br>
    <a href="KuvaA.php">Peruuta</a>
</form>

</body>
</html>
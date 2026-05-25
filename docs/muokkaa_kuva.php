<?php
session_start();

// Vain admin saa muokata
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

$kuvat_json_file = "kuvat.json";

// Käsittele POST (tallenna muutokset)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!isset($_POST["id"]) || !isset($_POST["kuvaus"])) {
        echo "success";
        exit;
    }

    $id = $_POST["id"];
    $kuvaus = trim($_POST["kuvaus"]);

    if (!file_exists($kuvat_json_file)) {
        echo "error";
        exit;
    }

    $json_content = file_get_contents($kuvat_json_file);
    $kuvat_data = json_decode($json_content, true) ?? [];

    if (!isset($kuvat_data[$id])) {
        echo "error";
        exit;
    }

    $kuvat_data[$id]["kuvaus"] = $kuvaus;
    file_put_contents($kuvat_json_file, json_encode($kuvat_data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    echo "success";
    exit;
}

// Käsittele GET (näytä muokkauslomake)
if (!isset($_GET["id"])) {
    die("Virhe: ID puuttuu");
}

$id = $_GET["id"];

if (!file_exists($kuvat_json_file)) {
    die("Kuvaa ei löytynyt");
}

$json_content = file_get_contents($kuvat_json_file);
$kuvat_data = json_decode($json_content, true) ?? [];

if (!isset($kuvat_data[$id])) {
    die("Kuvaa ei löytynyt");
}

$kuva = $kuvat_data[$id];
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Muokkaa kuvan kuvausta</title>
<link rel="stylesheet" href="tyyli.css">
</head>
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva-arkisto</a></li>
    <li><a href="info.php">Info</a></li>
    <li><a href="logout.php">Kirjaudu ulos</a></li>
  </ul>
</nav>

<section class="form-container">
  <div class="form-card">
    <h2>Muokkaa kuvan kuvausta</h2>

    <form method="POST" action="muokkaa_kuva.php" class="kuva-form">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($kuva["id"]); ?>">

      <div class="form-group">
        <label for="paikka">Paikka:</label>
        <strong><?php echo htmlspecialchars($kuva["paikka"]); ?></strong>
      </div>

      <div class="form-group">
        <label>Kuva:</label>
        <img src="<?php echo htmlspecialchars($kuva["kuva_url"]); ?>" alt="<?php echo htmlspecialchars($kuva["paikka"]); ?>" class="edit-image">
      </div>

      <div class="form-group">
        <label for="kuvaus">Kuvaus:</label>
        <textarea id="kuvaus" name="kuvaus" rows="5" class="edit-textarea"><?php 
          echo htmlspecialchars($kuva["kuvaus"]); 
        ?></textarea>
      </div>

      <div class="form-actions">
        <button type="submit">Tallenna muutokset</button>
        <a href="KuvaA.php" class="btn-cancel">Peruuta</a>
      </div>
    </form>
  </div>
</section>

</body>
</html>
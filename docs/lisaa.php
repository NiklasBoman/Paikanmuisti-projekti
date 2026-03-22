<?php
session_start();

// Vain admin saa lisätä
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Generoi uusi ID uudelle tarinalle
$id = "new_" . time();

?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Lisää tarina</title>
<link rel="stylesheet" href="tyyli.css">
</head>
<link rel="stylesheet" href="Tyyli.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
    <h2>Lisää uusi tarina</h2>

    <form method="POST" action="tallenna.php" class="kuva-form">
      <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

      <div class="form-group">
        <label for="paikka">Paikka:</label>
        <input type="text" id="paikka" name="paikka" required>
      </div>

      <div class="form-group">
        <label for="kuvaus">Kuvaus:</label>
        <textarea id="kuvaus" name="kuvaus" rows="8" required></textarea>
      </div>

      <div class="form-actions">
        <button type="submit">Lisää tarina</button>
        <a href="tarinat.php" class="btn-cancel">Peruuta</a>
      </div>
    </form>
  </div>
</section>

</body>
</html></content>
<parameter name="filePath">

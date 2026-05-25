<?php
session_start();

if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

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

      <div class="form-group">
        <label for="lat">Y-koordinaatti (N, TM35):</label>
        <input type="text" id="lat" name="lat" placeholder="6971222,908" class="coord-input">
      </div>

      <div class="form-group">
        <label for="lng">X-koordinaatti (E, TM35):</label>
        <input type="text" id="lng" name="lng" placeholder="489268,988" class="coord-input">
      </div>
      <small>Syötä TM35-arvot, esimerkiksi <code>N 6971222,908</code> ja <code>E 489268,988</code>. Tämä sivusto käyttää vain TM35-koordinaatteja.</small>
      <div id="map" class="form-map">
      </div>

      <div class="form-actions">
        <button type="submit">Lisää tarina</button>
        <a href="tarinat.php" class="btn-cancel">Peruuta</a>
      </div>
    </form>
  </div>
</section>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script>
const addMap = L.map('map').setView([62.95556, 26.75556], 12);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: ''
}).addTo(addMap);
let addMarker = null;
</script>

</body>
</html></content>
<parameter name="filePath">

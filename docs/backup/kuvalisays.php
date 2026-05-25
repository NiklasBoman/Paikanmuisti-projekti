<?php
session_start();

// Vain admin saa muokata
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

?>

<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Lisää kuva</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="kuvaA.php">Kuva-arkisto</a></li>
    <li><a href="info.php">Info</a></li>
  </ul>
</nav>

<section class="form-container">
  <div class="form-card">
    <h2>Lisää kuva arkistoon</h2>

    <form action="tallenna_kuva.php" method="post" enctype="multipart/form-data" class="kuva-form">

      <div class="form-group">
        <label for="paikka">Paikka:</label>
        <input type="text" id="paikka" name="paikka" required>
      </div>

      <div class="form-group">
        <label for="kuvaus">Kuvaus:</label>
        <textarea id="kuvaus" name="kuvaus" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="kuva">Valitse kuva:</label>
        <input type="file" id="kuva" name="kuva" accept="image/*" required>
      </div>

      <div class="form-actions">
        <button type="submit">Lähetä</button>
        <a href="KuvaA.php" class="btn-cancel">Peruuta</a>
      </div>

    </form>
  </div>
</section>

</body>
</html>

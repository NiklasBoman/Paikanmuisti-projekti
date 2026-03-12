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

<section class="tarinat">
  <h2>Lisää uusi tarina</h2>

  <form method="POST" action="tallenna.php">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

    <label>Paikka:</label><br>
    <input type="text" name="paikka" style="width:300px;" required><br><br>

    <label>Kuvaus:</label><br>
    <textarea name="kuvaus" style="width:500px; height:300px;" required></textarea><br><br>

    <button type="submit">Lisää tarina</button>
    <a href="tarinat.php">Peruuta</a>
  </form>
</section>

</body>
</html></content>
<parameter name="filePath">


<?php
session_start();

// YHDISTÄÄ TIETOKANTAAN
$pdo = new PDO(
    "mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4",
    "root",
    ""
);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// HAKEE KAIKKI KUVAT SQL:STÄ
$stmt = $pdo->query("SELECT id, paikka, kuva_url, kuvaus FROM kuvat ORDER BY paikka ASC");
$kuvat = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Kuva-arkisto</title>
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

<section class="tarinat">
  <h2>Kuva‑arkisto</h2>

  <!-- ADMINILLE LISÄÄ-KUVA PAINIKE -->
  <?php if (!empty($_SESSION["admin"])): ?>
      <a href="kuvalisays.php" class="lisaa-kuva-btn">+ Lisää kuva</a>
  <?php endif; ?>

  <div class="kuva-list">
    <?php foreach ($kuvat as $kuva): ?>
      <div class="kuva-item">
        <h3><?php echo htmlspecialchars($kuva["paikka"]); ?></h3>

        <img src="<?php echo htmlspecialchars($kuva["kuva_url"]); ?>" 
             alt="<?php echo htmlspecialchars($kuva["paikka"]); ?>" 
             class="arkisto-kuva">

        <p><?php echo nl2br(htmlspecialchars($kuva["kuvaus"])); ?></p>

        <!-- POISTA-PAINIKE ADMINILLE -->
        <?php if (!empty($_SESSION["admin"])): ?>
          <a href="poista_kuva.php?id=<?php echo $kuva['id']; ?>" 
             class="poista-kuva-btn" 
             onclick="return confirm('Poistaatko tämän kuvan?');">
             Poista kuva
          </a>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
    <img id="lightbox-img" src="">
</div>

<script>
// Avaa kuva lightboxiin
document.querySelectorAll(".arkisto-kuva").forEach(img => {
    img.addEventListener("click", () => {
        document.getElementById("lightbox-img").src = img.src;
        document.getElementById("lightbox").style.display = "flex";
    });
});

// Sulje lightbox klikkaamalla taustaa
document.getElementById("lightbox").addEventListener("click", () => {
    document.getElementById("lightbox").style.display = "none";
});
</script>

</body>
</html>

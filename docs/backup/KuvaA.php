
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

        <!-- MUOKKAA-PAINIKE ADMINILLE -->
        <?php if (!empty($_SESSION["admin"])): ?>
          <button class="muokkaa-kuvaus-btn" data-id="<?php echo $kuva['id']; ?>" data-kuvaus="<?php echo htmlspecialchars($kuva['kuvaus']); ?>">Muokkaa kuvausta</button>
        <?php endif; ?>

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

// Muokkaa kuvausta
document.querySelectorAll(".muokkaa-kuvaus-btn").forEach(btn => {
    btn.addEventListener("click", function() {
        const item = this.closest(".kuva-item");
        const p = item.querySelector("p");
        const originalText = this.dataset.kuvaus;
        const id = this.dataset.id;

        // Piilota p ja nappi
        p.style.display = "none";
        this.style.display = "none";

        // Luo textarea
        const textarea = document.createElement("textarea");
        textarea.value = originalText;
        textarea.rows = 4;
        textarea.style.width = "100%";
        textarea.style.boxSizing = "border-box";

        // Luo tallenna nappi
        const saveBtn = document.createElement("button");
        saveBtn.textContent = "Tallenna";
        saveBtn.className = "muokkaa-kuvaus-btn";
        saveBtn.style.marginRight = "6px";

        // Luo peruuta nappi
        const cancelBtn = document.createElement("button");
        cancelBtn.textContent = "Peruuta";
        cancelBtn.className = "poista-kuva-btn";

        // Lisää elementit
        p.parentNode.insertBefore(textarea, p.nextSibling);
        p.parentNode.insertBefore(saveBtn, textarea.nextSibling);
        p.parentNode.insertBefore(cancelBtn, saveBtn.nextSibling);

        // Tallenna
        saveBtn.addEventListener("click", () => {
            const newKuvaus = textarea.value;
            fetch("muokkaa_kuva.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `id=${id}&kuvaus=${encodeURIComponent(newKuvaus)}`
            })
            .then(response => response.text())
            .then(result => {
                if (result === "success") {
                    p.innerHTML = newKuvaus.replace(/\n/g, '<br>');
                    this.dataset.kuvaus = newKuvaus;
                    // Näytä takaisin
                    p.style.display = "block";
                    this.style.display = "inline-block";
                    textarea.remove();
                    saveBtn.remove();
                    cancelBtn.remove();
                } else {
                    alert("Virhe tallennuksessa");
                }
            });
        });

        // Peruuta
        cancelBtn.addEventListener("click", () => {
            p.style.display = "block";
            this.style.display = "inline-block";
            textarea.remove();
            saveBtn.remove();
            cancelBtn.remove();
        });
    });
});
</script>

</body>
</html>

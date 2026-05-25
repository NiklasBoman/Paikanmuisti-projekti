
<?php
session_start();

$kuvat = [];
$kuvat_json_file = "kuvat.json";

if (file_exists($kuvat_json_file)) {
    $json_content = file_get_contents($kuvat_json_file);
    $kuvat_data = json_decode($json_content, true);
    
    if (is_array($kuvat_data)) {
        // Sort by paikka (place name)
        usort($kuvat_data, function($a, $b) {
            return strcmp($a["paikka"], $b["paikka"]);
        });
        $kuvat = $kuvat_data;
    }
}
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

        <?php if (!empty($_SESSION["admin"])): ?>
          <button class="muokkaa-kuvaus-btn" data-id="<?php echo $kuva['id']; ?>" data-kuvaus="<?php echo htmlspecialchars($kuva['kuvaus']); ?>">Muokkaa kuvausta</button>
        <?php endif; ?>

        <?php if (!empty($_SESSION["admin"])): ?>
          <a href="poista_kuva.php?id=<?php echo $kuva['id']; ?>" 
             class="poista-kuva-btn" 
             onclick="return confirm('Poistatko tämän kuvan?');">
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
document.querySelectorAll(".arkisto-kuva").forEach(img => {
    img.addEventListener("click", () => {
        document.getElementById("lightbox-img").src = img.src;
        document.getElementById("lightbox").style.display = "flex";
    });
});

document.getElementById("lightbox").addEventListener("click", () => {
    document.getElementById("lightbox").style.display = "none";
});

document.querySelectorAll(".muokkaa-kuvaus-btn").forEach(btn => {
    btn.addEventListener("click", function() {
        const item = this.closest(".kuva-item");
        const p = item.querySelector("p");
        const originalText = this.dataset.kuvaus;
        const id = this.dataset.id;

        p.style.display = "none";
        this.style.display = "none";

        const textarea = document.createElement("textarea");
        textarea.value = originalText;
        textarea.rows = 4;
        textarea.className = "edit-textarea-inline";

        const saveBtn = document.createElement("button");
        saveBtn.textContent = "Tallenna";
        saveBtn.className = "muokkaa-kuvaus-btn";
        saveBtn.style.marginRight = "6px";

        const cancelBtn = document.createElement("button");
        cancelBtn.textContent = "Peruuta";
        cancelBtn.className = "poista-kuva-btn";

        p.parentNode.insertBefore(textarea, p.nextSibling);
        p.parentNode.insertBefore(saveBtn, textarea.nextSibling);
        p.parentNode.insertBefore(cancelBtn, saveBtn.nextSibling);

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

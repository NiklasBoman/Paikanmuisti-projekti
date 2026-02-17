<?php
$json = file_get_contents("tarinat.json");
$tarinat = json_decode($json, true);
?>
<!DOCTYPE html>
<html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tarinat</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>
<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Tarinat</a></li>
    <li><a href="info.php">Info</a></li>
  </ul>
</nav>

<section class="tarinat">
  <h2>Tarinat</h2>

  <div class="tarina-list">
    <?php foreach ($tarinat as $tarina): ?>
      <div class="tarina">
        <h3><?php echo $tarina["otsikko"]; ?></h3>
        <p><?php echo $tarina["kuvaus"]; ?></p>

        <!-- Linkki kartalle -->
        <a href="kartta.php?id=<?php echo $tarina["id"]; ?>">
          Näytä kartalla
        </a>
      </div>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

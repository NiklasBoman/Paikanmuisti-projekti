<?php
$json = file_get_contents("tarinat.json");
$tarinat = json_decode($json, true);

$hakusana = isset($_GET['q']) ? strtolower($_GET['q']) : '';

if ($hakusana) {
    $tarinat = array_filter($tarinat, function($tarina) use ($hakusana) {
        return strpos(strtolower($tarina["otsikko"]), $hakusana) !== false ||
               strpos(strtolower($tarina["kuvaus"]), $hakusana) !== false;
    });
}
//Näyttää 5 sattunnaista tarinaa
$tarinat = array_values($tarinat);
shuffle($tarinat); $tarinat = array_slice($tarinat, 0, 5);


?>
<!DOCTYPE html>
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
<form method="GET" class="haku">
  
<section class="tarinat">
  <h2>Tarinat</h2>

  <form method="GET" class="haku">
    <input type="text" name="q" placeholder="Hae tarinoita..."
           value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : ''; ?>">
    <button type="submit">Hae</button>
  </form>

  <div class="tarina-list">
    <?php foreach ($tarinat as $tarina): ?>
      <div class="tarina">
        <h3><?php echo $tarina["otsikko"]; ?></h3>
        <p><?php echo $tarina["kuvaus"]; ?></p>
        <a href="kartta.php?id=<?php echo $tarina["id"]; ?>">Näytä kartalla</a>
      </div>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

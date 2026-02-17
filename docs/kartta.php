<?php
// Hae id URL:sta
$id = $_GET['id'] ?? null;

// Lue JSON
$json = file_get_contents("tarinat.json");
$tarinat = json_decode($json, true);

// Etsi oikea tarina
$tarina = null;
foreach ($tarinat as $t) {
    if ($t["id"] == $id) {
        $tarina = $t;
        break;
    }
}

if (!$tarina) {
    $tarina = [
        "otsikko" => "",
        "kuvaus" => "",
        "lat" => 62.95646895043363,
        "lng" => 26.739824232731905
    ];
}


//Luo Google Maps iframe URL koordinaateilla
$lat = $tarina["lat"];
$lng = $tarina["lng"];
$mapUrl = "https://www.google.com/maps?q={$lat},{$lng}&z=12&output=embed";
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title><?php echo $tarina["otsikko"]; ?></title>
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

<!-- Tarinakortti -->
<?php if ($tarina["otsikko"] !== ""): ?>
<div class="tarina-card">
  <h3><?php echo $tarina["otsikko"]; ?></h3>
  <p><?php echo $tarina["kuvaus"]; ?></p>
</div>
<?php endif; ?>


<!-- Google Maps iframe tarinan koordinaateilla -->
<iframe 
    src="<?php echo $mapUrl; ?>"
    class="map"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

</body>
</html>

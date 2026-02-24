
<?php
$lat = 62.95556;
$lng = 26.75556;
$zoom = 12;

$mapUrl = "https://www.google.com/maps?q={$lat},{$lng}&z={$zoom}&output=embed";
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tervon kartta</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="info.php">Info</a></li>
  </ul>
</nav>

<iframe 
    src="<?php echo $mapUrl; ?>"
    class="map"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

</body>
</html>

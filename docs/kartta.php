
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

<div id="map" style="width:100%; height:80vh;"></div>

<script>
function initMap() {
  const center = { lat: 62.95556, lng: 26.75556 };

  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: center
  });

  tarinat.forEach(t => {
    if (!t.lat || !t.lng) return;

    const marker = new google.maps.Marker({
      position: { lat: parseFloat(t.lat), lng: parseFloat(t.lng) },
      map: map,
      title: t.paikka
    });

    const info = new google.maps.InfoWindow({
      content: `
        <strong>${t.paikka}</strong><br>
        <a href="tarinat.php?q=${encodeURIComponent(t.paikka)}">
          Avaa tarina
        </a>`
    });

    marker.addListener("click", () => info.open(map, marker));
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=OMA_API_AVAIN&callback=initMap" async></script>

</body>
</html>

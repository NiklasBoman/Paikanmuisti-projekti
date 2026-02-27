<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tervon kartta</title>
<link rel="stylesheet" href="Tyyli.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<body>

<nav>
  <h2>Paikan Muisti</h2>
  <ul>
    <li><a href="kartta.php">Kartta</a></li>
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva Arkisto</a></li>
    <li><a href="info.php">Info</a></li>
  </ul>
</nav> 
<div class="map" id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
//paikat tähän 
const paikat = [
  {
    nimi: "Tervo keskusta",
    lat: 62.95556,
    lng: 26.75556,
    kuvaus: "Tervon keskusta."
  },
  {
    nimi: "Esimerkkipaikka",
    lat: 62.95700,
    lng: 26.76000,
    kuvaus: "kuvaus."
  }
];


const map = L.map('map').setView([62.95556, 26.75556], 12);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: ''
}).addTo(map);

paikat.forEach(p => {
  L.marker([p.lat, p.lng])
    .addTo(map)
    .bindPopup(`<strong>${p.nimi}</strong><br>${p.kuvaus}`);
});
</script>
</body>
</html>

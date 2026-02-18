<?php
// 1. LUE TARINAT VANHALTA SIVULTA
$html = file_get_contents("ABCD_t.php");

// 2. Muunna merkistö (poistaa □-merkit)
$html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

// 3. Etsi kaikki <div id="...">...</div>
preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

$tarinat = [];

// 4. Käy läpi jokainen div
for ($i = 0; $i < count($matches[1]); $i++) {

    $id = $matches[1][$i];
    $content = trim($matches[2][$i]);

    // Poista ohjausmerkit
    $content = preg_replace('/[\x00-\x1F\x7F]/u', '', $content);

    // 5. Jaa tarinat "Paikka:" -kohdan perusteella
    $parts = preg_split('/(?=<b>Paikka)/i', $content, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($parts as $index => $part) {

        // Lisää rivinvaihdot näkyviin
        $part = str_replace("\n", "<br>", $part);

        $tarinat[] = [
            "id" => $id . "_" . $index,   // uniikki ID
            "kuvaus" => $part
        ];
    }
}

// 6. POISTA TYHJÄT TARINAT
$tarinat = array_filter($tarinat, function($t) {
    return trim(strip_tags($t["kuvaus"])) !== "";
});

// 7. HAKU
$hakusana = isset($_GET['q']) ? strtolower($_GET['q']) : '';
if ($hakusana) {
    $tarinat = array_filter($tarinat, function($t) use ($hakusana) {
        return strpos(strtolower($t["kuvaus"]), $hakusana) !== false;
    });
}

// 8. 5 SATUNNAISTA
$tarinat = array_values($tarinat);
shuffle($tarinat);
$tarinat = array_slice($tarinat, 0, 5);
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
        <?php echo $tarina["kuvaus"]; ?>
        <br>
        <a href="kartta.php?id=<?php echo $tarina["id"]; ?>">Näytä kartalla</a>
      </div>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

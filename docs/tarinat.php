<?php
// 1. LUE VANHA ABCD_t.php
$html = file_get_contents("ABCD_t.php");

// 2. MUUNNA MERKISTÖ (poistaa □-merkit)
$html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

// 3. Etsi kaikki <div id="...">...</div>
preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

$tarinat = [];

// 4. Jaa jokainen div useiksi tarinoiksi "Paikka:"-kohdan perusteella
for ($i = 0; $i < count($matches[1]); $i++) {

    $id = $matches[1][$i];
    $content = trim($matches[2][$i]);

    // Poista ohjausmerkit
    $content = preg_replace('/[\x00-\x1F\x7F]/u', '', $content);

    // Jaa tarinat
    $parts = preg_split('/(?=<b>Paikka)/i', $content, -1, PREG_SPLIT_NO_EMPTY);

    foreach ($parts as $index => $part) {

        // Poimi Paikka-nimi
        $paikka = "";
        if (preg_match('/<b>Paikka:\s*<\/b>([^<]+)/i', $part, $match)) {
            $paikka = trim($match[1]);
        }

        // Ohita tarinat ilman paikkaa
        if ($paikka === "") continue;

        // Dekoodaa HTML-entityt (ö, ä, å)
        $paikka = html_entity_decode($paikka, ENT_QUOTES, 'UTF-8');

        // Ensimmäinen kirjain
        $firstLetter = strtoupper(mb_substr($paikka, 0, 1));

        // Lisää rivinvaihdot näkyviin
        $part = str_replace("\n", "<br>", $part);

        // Dekoodaa myös koko tarinan sisältö
        $part = html_entity_decode($part, ENT_QUOTES, 'UTF-8');

        $tarinat[] = [
            "id" => $id . "_" . $index,
            "paikka" => $paikka,
            "firstLetter" => $firstLetter,
            "kuvaus" => $part
        ];
    }
}

// 5. POISTA TYHJÄT
$tarinat = array_filter($tarinat, fn($t) => trim(strip_tags($t["kuvaus"])) !== "");

// 6. HAKU
$hakusana = isset($_GET['q']) ? strtolower($_GET['q']) : '';
if ($hakusana !== '') {
    $tarinat = array_filter($tarinat, function($t) use ($hakusana) {
        return strpos(strtolower($t["kuvaus"]), $hakusana) !== false;
    });
    $filterLetter = ""; // ohita kirjainsuodatus haussa
} else {
    // 7. KIRJAINSUODATUS
    $filterLetter = $_GET['letter'] ?? 'A'; // oletus A
    $tarinat = array_filter($tarinat, fn($t) => $t["firstLetter"] === $filterLetter);
}

// 8. JÄRJESTÄ AAKKOSJÄRJESTYKSEEN
usort($tarinat, fn($a, $b) => strcmp($a["paikka"], $b["paikka"]));

?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tarinat</title>
<link rel="stylesheet" href="Tyyli.css">
<style>
.letter-nav a {
    margin: 4px;
    padding: 6px 10px;
    display: inline-block;
    background: #eee;
    border-radius: 4px;
    text-decoration: none;
}
.letter-nav a.active {
    background: #333;
    color: white;
}
.tarina {
    background: #f8f8f8;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 6px;
}
</style>
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

  <!-- HAKU -->
  <form method="GET" class="haku">
    <input type="text" name="q" placeholder="Hae tarinoita..."
           value="<?php echo htmlspecialchars($_GET['q'] ?? ''); ?>">
    <button type="submit">Hae</button>
  </form>

  <!-- TARINAT -->
  <div class="tarina-list">
    <?php foreach ($tarinat as $tarina): ?>
      <div class="tarina">
        <h3><?php echo htmlspecialchars($tarina["paikka"]); ?></h3>
        <?php echo $tarina["kuvaus"]; ?>
        <br>
        <a href="kartta.php?id=<?php echo $tarina["id"]; ?>">Näytä kartalla</a>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- AAKKOSNAVIGAATIO ALAREUNAAN -->
  <div class="letter-nav" style="margin-top:40px; text-align:center;">
    <?php foreach (range('A','Z') as $letter): ?>
      <a href="tarinat.php?letter=<?php echo $letter; ?>"
         class="<?php echo ($filterLetter === $letter ? 'active' : ''); ?>">
         <?php echo $letter; ?>
      </a>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

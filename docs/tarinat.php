<?php

// 1. FUNKTIO: LUE JA PARSETA TARINAT YHDESTÄ TIEDOSTOSTA
function lue_tarinat_tiedostosta($filename) {

    if (!file_exists($filename)) return [];

    // Lue tiedosto ISO-8859-1 → UTF-8
    $html = file_get_contents($filename);
    $html = mb_convert_encoding($html, 'UTF-8', 'ISO-8859-1');

    // Etsi kaikki <div id="...">...</div>
    preg_match_all('/<div id=[\'"]([^\'"]+)[\'"][^>]*>(.*?)<\/div>/si', $html, $matches);

    $tarinat = [];

    for ($i = 0; $i < count($matches[1]); $i++) {

        $id_base = $matches[1][$i];
        $content = trim($matches[2][$i]);

        // Poista roskamerkit
        $content = preg_replace('/[\x00-\x1F\x7F\x80-\x9F�]/u', '', $content);

        // Jokainen <b>Nimi:</b> tai <b>Paikka:</b> aloittaa uuden tarinan
        $parts = preg_split('/(?=<b>(Nimi|Paikka):\s*<\/b>)/i', $content, -1, PREG_SPLIT_NO_EMPTY);

        foreach ($parts as $index => $part) {

            // Poimi nimi / paikka
            $paikka = "";

            if (preg_match('/<b>Nimi:\s*<\/b>([^<]+)/i', $part, $m)) {
                $paikka = trim($m[1]);
            }
            else if (preg_match('/<b>Paikka:\s*<\/b>([^<]+)/i', $part, $m)) {
                $paikka = trim($m[1]);
            }

            if ($paikka === "") continue;

            // Dekoodaa entityt
            $paikka = html_entity_decode($paikka, ENT_QUOTES, 'UTF-8');
            $part   = html_entity_decode($part,   ENT_QUOTES, 'UTF-8');

            // Ensimmäinen kirjain
            $firstLetter = strtoupper(mb_substr($paikka, 0, 1));

            // Luo tarina
            $tarinat[] = [
                "id" => $id_base . "_" . $index,
                "paikka" => $paikka,
                "firstLetter" => $firstLetter,
                "kuvaus" => $part
            ];
        }
    }

    return $tarinat;
}

// 2. LUE TARINAT TIEDOSTOISTA
$tarinat = [];
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("ABCD_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("AEOEAABB_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("CCDDPPKK_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("E_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("HIGF_t.php"));
$tarinat = array_merge($tarinat, lue_tarinat_tiedostosta("J_t.php"));
// Poista tyhjät
$tarinat = array_filter($tarinat, fn($t) => trim(strip_tags($t["kuvaus"])) !== "");

// 3. HAKU JA KIRJAINSUODATUS
$hakusana = isset($_GET['q']) ? strtolower($_GET['q']) : '';

if ($hakusana !== '') {
    $tarinat = array_filter($tarinat, function($t) use ($hakusana) {
        return strpos(strtolower($t["kuvaus"]), $hakusana) !== false
            || strpos(strtolower($t["paikka"]), $hakusana) !== false;
    });
    $filterLetter = "";
} else {
    $filterLetter = $_GET['letter'] ?? 'A';
    $tarinat = array_filter($tarinat, fn($t) => $t["firstLetter"] === $filterLetter);
}

// 4. JÄRJESTÄ AAKKOSITTAIN
usort($tarinat, fn($a, $b) => strcmp($a["paikka"], $b["paikka"]));

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
    <li><a href="tarinat.php">Arkisto</a></li>
    <li><a href="KuvaA.php">Kuva Arkisto</a></li>
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
      </div>
    <?php endforeach; ?>
  </div>

  <!-- AAKKOSNAVIGAATIO ALAREUNAAN -->
  <div class="letter-nav" style="margin-top:40px; text-align:center;">
    <?php 
    $letters = array_merge(range('A','Z'), ['Å','Ä','Ö']);
    foreach ($letters as $letter): 
    ?>
      <a href="tarinat.php?letter=<?php echo $letter; ?>"
         class="<?php echo ($filterLetter === $letter ? 'active' : ''); ?>">
         <?php echo $letter; ?>
      </a>
    <?php endforeach; ?>
  </div>

</section>

</body>
</html>

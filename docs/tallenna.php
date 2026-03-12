<?php
session_start();

// Vain admin saa tallentaa
if (!isset($_SESSION["admin"]) || $_SESSION["admin"] !== true) {
    die("Ei oikeuksia");
}

// Tarkista että data tuli
if (!isset($_POST["id"]) || !isset($_POST["paikka"]) || !isset($_POST["kuvaus"])) {
    die("Virhe: puuttuva data");
}

$id = $_POST["id"];
$paikka = $_POST["paikka"];
$kuvaus = $_POST["kuvaus"];

// Tässä vaiheessa emme vielä kirjoita tiedostoihin.
// Näytetään vain, että data tulee läpi oikein.

?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Tallennus onnistui</title>
</head>
<body>

<h2>Tallennus toimii!</h2>

<p><b>ID:</b> <?php echo htmlspecialchars($id); ?></p>
<p><b>Paikka:</b> <?php echo htmlspecialchars($paikka); ?></p>
<p><b>Kuvaus:</b><br><?php echo nl2br(htmlspecialchars($kuvaus)); ?></p>

<p><a href="tarinat.php">Palaa tarinoihin</a></p>

</body>
</html>

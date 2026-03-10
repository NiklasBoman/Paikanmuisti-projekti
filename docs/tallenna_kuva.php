<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=paikanmuisti;charset=utf8mb4",
    "root",
    ""
);

$paikka = $_POST["paikka"];
$kuvaus = $_POST["kuvaus"];

$kuvaNimi = $_FILES["kuva"]["name"];
$tmp = $_FILES["kuva"]["tmp_name"];

$kohde = "kuvat/" . $kuvaNimi;

// siirtää kuvan palvelimelle
move_uploaded_file($tmp, $kohde);

// tallentaa tiedot tietokantaan
$sql = "INSERT INTO kuvat (paikka, kuva_url, kuvaus) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$paikka, $kohde, $kuvaus]);

echo "Kuva lisätty!";
?>

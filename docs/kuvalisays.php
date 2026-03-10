<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Lisää kuva</title>
</head>
<body>

<h2>Lisää kuva arkistoon</h2>

<form action="tallenna_kuva.php" method="post" enctype="multipart/form-data">

Paikka:<br>
<input type="text" name="paikka" required><br><br>

Kuvaus:<br>
<textarea name="kuvaus"></textarea><br><br>

Valitse kuva:<br>
<input type="file" name="kuva" accept="image/*" required><br><br>

<button type="submit">Lähetä</button>

</form>

</body>
</html> 

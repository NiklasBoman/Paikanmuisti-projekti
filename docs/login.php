<?php
session_start();

$adminUser = "admin";
$adminPass = "salasana123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["user"] === $adminUser && $_POST["pass"] === $adminPass) {
        $_SESSION["admin"] = true;
        header("Location: tarinat.php");
        exit;
    } else {
        $error = "Väärä käyttäjätunnus tai salasana";
    }
}
?>
<form method="POST">
    <input type="text" name="user" placeholder="Käyttäjä">
    <input type="password" name="pass" placeholder="Salasana">
    <button type="submit">Kirjaudu</button>
</form>
<?php if(isset($error)) echo $error; ?>

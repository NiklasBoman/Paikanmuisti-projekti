<?php
session_start();

$correct_user = "admin";
$correct_pass = "1234";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"] ?? "";
    $pass = $_POST["pass"] ?? "";

    if ($user === $correct_user && $pass === $correct_pass) {
        $_SESSION["admin"] = true;
        header("Location: tarinat.php");
        exit;
    } else {
        $error = "Väärä käyttäjä tai salasana!";
    }
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<link rel="stylesheet" href="Tyyli.css">
</head>
<body>

<div class="login-wrapper">
    <div class="login-card">
        <h2>Admin Login</h2>

        <form method="POST">
            <input type="text" name="user" placeholder="Käyttäjä">
            <input type="password" name="pass" placeholder="Salasana">
            <button type="submit">Kirjaudu</button>
        </form>

        <?php if(isset($error)) echo "<div class='login-error'>$error</div>"; ?>
    </div>
</div>

</body>
</html>

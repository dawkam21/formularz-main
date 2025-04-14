<?php 
ini_set('display_errors', 1); 
error_reporting(E_ALL);

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
// Sprawdzenie, czy użytkownik już istnieje
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM admins WHERE login = ?");
    $stmt->execute([$username]);
    $userExists = $stmt->fetchColumn();

    $stmt1 = $pdo->prepare("SELECT COUNT(*) FROM admins WHERE email = ?");
    $stmt1->execute([$email]);
    $userExists1 = $stmt1->fetchColumn();

if ($userExists > 0 OR $userExists1 > 0) {
    echo "<h1>Administrator o tej nazwie lub email już istnieje!</h1>";
} else if ($password != $cpassword) {
    echo "<h1>Hasła muszą się zgadzać!</h1>";
} else {
    // Rejestracja nowego administratora
    $stmt = $pdo->prepare("INSERT INTO admins (login, email, password) VALUES (?, ?, ?)");
    $stmt->execute([$username, $email, $hashedPassword]);
    echo "<h1>Administrator został zarejestrowany!</h1>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Rejestracja administratora</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='adminStyle.php'>
    <script src='main.js'></script>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Rejestracja administratora</h3>
            <input type="text" name="username" required placeholder="wpisz swój login">
            <input type="email" name="email" required placeholder="wpisz swój email">
            <input type="password" name="password" required placeholder="wpisz swoje hasło">
            <input type="password" name="cpassword" required placeholder="potwierdź hasło">
            <input type="submit" name="submit" value="Zarejestruj się" class="form-btn">
            <p>Masz już konto?<a href="admin-log.php">Zaloguj się</a></p>
        </form>

    </div>
</body>
</html>
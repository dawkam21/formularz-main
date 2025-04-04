<?php
require 'user-config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["txtLogin"]);
    $password = $_POST["txtPassword"];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE BINARY login = ? LIMIT 1");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $username;
        $_SESSION["role"] = $user["role"];

        if ($user["role"] == "admin") {
            header("Location: admin-dashboard.php");
        } else {
            header("Location: user-dashboard.php");
        }
        exit;
    } else {
        echo "<h1 style='color: #fff; margin: 10px;'>Błędna nazwa użytkownika lub hasło.</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Logowanie użytkownika</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='logStyle.php'>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <main>
    <section id="form">
        <h1>Logowanie</h1>
            <form name="userForm" method="post" action="user-log.php">
                <div class="txt">
                    <label for="login">
                        <input type="text" name="txtLogin" placeholder="Podaj login" required>
                        <i class='bx bx-user'></i>
                    </label>
                </div>
                <div class="txt">
                    <label for="haslo">
                        <input type="password" name="txtPassword" placeholder="Podaj hasło" required>
                        <i class='bx bxs-lock-alt' ></i>
                    </label>
                </div>

                <div class="remember-forgot">
                    <label for="forgot" id="forgot">
                        <input type="checkbox" name="" id=""> Pamiętaj mnie
                        <a href="">Nie pamiętasz hasła?</a>
                    </label>
                </div>
                <div class="txtBtn">
                    <button type="submit" class="btnTxt">Zaloguj się</button>
                </div>

                <div class="register-link">
                    <p>Nie masz konta? <a href="user-register-form.php">Zarejestruj się</a></p>
                </div>
            </form>
        </section>

        <div class="change">
            <a href="admin-page.php">Wróć do poziomu administratora</a>
        </div>
    </main>

    <script src='logApp.js'></script>
</body>
</html>
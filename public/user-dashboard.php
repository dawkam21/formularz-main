<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: user-log.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel Użytkownika</title>
    <link rel="stylesheet" href="user-style.css">
</head>

<body>
    <div class="user-container">
        <div class="card">
            <h2>Witaj, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
            <div class="buttons">
                <a href="user-form.php" class="btn">Przejdź do formularza</a>
                <a href="user-logout.php" class="logout btn">Wyloguj się</a>
            </div>
        </div>
    </div>
</body>
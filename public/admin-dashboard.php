<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: admin-log.php");
    exit;
}

// Sprawdzenie, czy użytkownik jest zalogowany
if (!isset($_SESSION["user_id"]) || $_SESSION["role"] !== "admin") {
    header("Location: user-log.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel Administratora</title>
    <link rel="stylesheet" href="adminStyle.php">
</head>

<body>
    <div class="adm-container">
        <div class="card">
            <h2>Witaj, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
            <div class="buttons">
                <a href="history.php" class="btn">Podgląd użytkowników</a>
                <a href="admin-logout.php" class="btn logout">Wyloguj się</a>
            </div>
        </div>
    </div>
</body>
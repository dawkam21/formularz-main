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

<h2>Witaj, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
<a href="history.php">Przejdź do podglądu użytkowników</a>
<a href="admin-logout.php">Wyloguj się</a>
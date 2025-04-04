<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: user-log.php");
    exit;
}
?>

<h2>Witaj, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h2>
<a href="user-form.php">Przejdź do formularza</a>
<a href="user-logout.php">Wyloguj się</a>
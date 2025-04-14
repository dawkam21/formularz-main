<?php
$host = "localhost";
$dbname = "admin_db";
$username = "root";  // Zmień na swoją nazwę użytkownika
$password = "";      // Zmień na swoje hasło

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
?>
<?php
$host = "";
$dbname = 'MVC';
$username = 'root';
$password = '';

$pdo = null;

try {
    // Maak een PDO-connectie
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Zet de PDO error mode tot exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    throw new Exception("Connection failed: " . $e->getMessage());
}
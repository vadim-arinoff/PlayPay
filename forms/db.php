<?php
$host = 'localhost';
$dbname = 'playpay'; 
$username = 'root'; 
$password = 'root';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=playpay', 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Не могу подключиться к базе данных: " . $e->getMessage());
}
?>
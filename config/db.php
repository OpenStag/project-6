<?php
// config/db.php

$host = 'localhost';          // DB host
$db = 'shoe';         // DB name
$user = 'root';       // DB username
$pass = '';   // DB password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

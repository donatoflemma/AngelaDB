<?php

$host = 'localhost';
$user = 'root';
$pass = 'donny1994';
$db = 'names';
$port = '3306';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

} catch (PDOException $e) {
    echo 'connection failed';
    die();
}
?>
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'Diary_db';
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
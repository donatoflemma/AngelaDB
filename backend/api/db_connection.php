<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "angeladb";
$P = "3307";

$conn = new mysqli($host, $user, $pass, $db, $P);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
} 

?>
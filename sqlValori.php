<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$db = "angeladb";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
} else {
    echo "Connessione riuscita!";
}

?>
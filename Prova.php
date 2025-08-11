<?php
if (isset($_POST["username"]) && isset($_POST["pwd"])) {
    if (empty($name) && empty($password)) {
        $name = $_POST["username"];
        $password = $_POST["pwd"];
        echo "<h1>name: $name</h1>";
        echo "<h1>password: $password</h1>";
    } else {
        echo "<h1>Dati non ricevuti</h1>";
    }
}
?>
//http://localhost/Log-in/Prova.php
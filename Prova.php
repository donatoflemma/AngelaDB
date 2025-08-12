<?php include "sqlValori.php" ?>
<?php
if (isset($_POST["username"]) && isset($_POST["pwd"])) { // per vedere se esistono
    if (empty($name) && empty($password)) { //se sono vuote
        $name = $_POST["username"];
        $password = $_POST["pwd"];
        //echo "<h1>name: $name</h1>";
        //echo "<h1>password: $password</h1>";
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) { // leg geogni riga come array associativo
            if ($row["Username"] === $_POST["username"] && $row["Password"] && $password = $_POST["pwd"]) {
                header("Location: index.php");
                exit();
            }
        }
    } else {
        echo "<h1>Dati non ricevuti</h1>";
    }
}
?>
//http://localhost/Log-in/Prova.php
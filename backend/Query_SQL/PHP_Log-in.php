<?php include "../api/db_connection.php" ?>
<?php
if (isset($_POST["username"]) && isset($_POST["pwd"])) { // per vedere se esistono
    $name = $_POST["username"];
    $password = $_POST["pwd"];
    if (!empty($name) && !empty($password)) { //se sono vuote
        $sql = "SELECT * FROM login";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) { // leg geogni riga come array associativo
            if ($row["Username"] === $name && $row["Password"] === $password) {
                header("Location: http://localhost/DBMS/frontend/Home.php");
                exit();
                //$row["Username"] === $_POST["username"] && $row["Password"] && $password = $_POST["pwd"]
                //Relativo: "DBMS.php" → cerca nella stessa cartella.
                //Assoluto: "http://localhost/mio_progetto/DBMS.php" → sicuro se vuoi evitare confusione.
            }
        }
    } else {
        echo "<h1>Dati non ricevuti</h1>";
    }
}
?>
//http://localhost/DBMS/backend/index.html
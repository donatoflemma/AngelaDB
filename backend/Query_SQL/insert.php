<?php include "../api/db_connection.php" ?>
<?php
$table = $_GET["nameTable"];
switch ($table) {
    case "Dipendenti":
        $Cognome = $_GET["nameTable"];// non sono sicuro che andra cosi 
        $Nome = $_GET["nameTable"];
        $Stipendio = $_GET["nameTable"];
        $Vacanze = $_GET["nameTable"];
        $stmt = $conn->prepare("INSERT INTO $table (Cognome,Nome,Stipendio,Vacanze) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ss", $Cognome, $Nome, $Stipendio, $Vacanze);// da completare perche non so come si scrive float 
        echo "<strong> Isert done !<strong/>";
        break;
    case "Fornitori":
        $Name = $_GET["nameTable"];
        $Telefono = $_GET["nameTable"];
        $stmt = $conn->prepare("INSERT INTO $table (Name, Telefono) VALUES (?, ?)");
        $stmt->bind_param("ss", $Name, $Telefono);
        echo "<strong> Isert done !<strong/>";
        break;
    case "Categoria":
        $Name = $_GET["nameTable"];
        $stmt = $conn->prepare("INSERT INTO $table (Name) VALUES (?)");
        $stmt->bind_param("s", $Name);
        echo "<strong> Isert done !<strong/>";
        break;
    case "Prodotti":
        $Name = $_GET["Name"];
        $Prezzo = $_GET["Prezzo"];
        $stmt = $conn->prepare("INSERT INTO $table (Name, Prezzo) VALUES (?, ?)");
        $stmt->bind_param("ss", $Name, $Prezzo);// da finire perche non so come si dice decimal
        echo "<strong> Isert done !<strong/>";
        break;
}
$stmt->execute(); //esegue la query

?>
<?php include "../api/db_connection.php" ?>
/*Update

UPDATE nome_tabella
SET colonna1 = nuovo_valore1,
colonna2 = nuovo_valore2
WHERE condizione;



$stmt = $conn->prepare("UPDATE utenti SET email = ? WHERE id = ?");
$stmt->bind_param("si", $nuovaEmail, $id); si == str,int
$stmt->execute();
!!!!!!!!!!!!!! DA RICORDARE !!!!!!!!!!!!!!!!!!!!!!
cosa molto importante ora metto lo switch ma devo anche capire come decidere i campi da cambiare --
*/
<?php
$table = $_GET["nomeTable"];
switch ($table) {
    case "Dipendenti":
        $Cognome = $_GET["nameTable"];// non sono sicuro che andra cosi 
        $Nome = $_GET["nameTable"];
        $Stipendio = $_GET["nameTable"];
        $Vacanze = $_GET["nameTable"];
        // linea di sotto da cambiare 
        $stmt = $conn->prepare("UPDATE $table SET email = ?, ciccio= ? WHERE id = ?");
        $stmt->bind_param("ss", $Cognome, $Nome, $Stipendio, $Vacanze);// da completare perche non so come si scrive float 
        echo "<strong> Update done !<strong/>";
        break;
    case "Fornitori":
        $Name = $_GET["nameTable"];
        $Telefono = $_GET["nameTable"];
        // linea di sotto da cambiare 
        $stmt = $conn->prepare("UPDATE $table SET email = ?, ciccio= ? WHERE id = ?");
        $stmt->bind_param("ss", $Name, $Telefono);
        echo "<strong> Update done !<strong/>";
        break;
    case "Categoria":
        $Name = $_GET["nameTable"];
        // linea di sotto da cambiare 
        $stmt = $conn->prepare("UPDATE $table SET email = ?, ciccio= ? WHERE id = ?");
        $stmt->bind_param("s", $Name);
        echo "<strong> Update done !<strong/>";
        break;
    case "Prodotti":
        $Name = $_GET["Name"];
        $Prezzo = $_GET["Prezzo"];
        // linea di sotto da cambiare 
        $stmt = $conn->prepare("UPDATE $table SET email = ?, ciccio= ? WHERE id = ?");
        $stmt->bind_param("ss", $Name, $Prezzo);// da finire perche non so come si dice decimal
        echo "<strong> Update done !<strong/>";
        break;
}
$stmt->execute();
?>
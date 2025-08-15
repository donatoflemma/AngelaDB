<?php include"../api/db_connection.php"?>
/*DELETE

DELETE
$stmt = $conn->prepare("DELETE FROM utenti WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();*/
<?php
$table = $_POST["nameTable"];
$stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");// non so se lasciare l´´id perche il cliente non sa 
// cosa mettere 
$stmt->bind_param("i", $id);// cambiare anche questo perche puo essere anche un STRING
$stmt->execute();
?>
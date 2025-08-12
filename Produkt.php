<?php include "sqlValori.php"?>

<?php
$sql = "SELECT * FROM Prodotti";
  $result = $conn->query($sql); // esegue la query 
  if ($result->num_rows > 0) {
    
    //echo "<tr><td>Name</td><td>Prezzo</td></tr>";
    //while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo
    switch ($table) {
      case "Dipendenti":
        echo "<label> Dipendenti </label>";
        echo "<tr><td>Cognome</td><td>Nome</td><td>Stipendio</td><td>Vacanze</td></tr>";
        while ($row = $result->fetch_assoc()) {






$nome="";
$prezzo="";
$img="";

echo"<div class='box'>";
    echo"<form method='get' action='Compra.php'>";
        echo"<label class='descrizione'>$nome</label>";
        echo"<img src='./Documentation/img/$nome.png' class='immagine' alt='immagine non trovata'>";
        echo"<label for='title' class='Prezzo'>$prezzo.€</label>";
        //<p>Pane bianco morbido <br>da tavola</p>
        echo"<button>compra</button>";
    echo"</form>";
echo"</div>";
?>
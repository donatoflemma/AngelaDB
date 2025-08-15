<!--SITO PRINCIPALE-->
<?php include 'sqlValori.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log-in</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../frontend/css/style.css">
</head>

<body>

  <div class="topnav">
    <img src="./Documentation/img/Panificio.png" id="panificio" alt="immagine non trovata ">
    <a class="active" href="#home">Home</a>
    <a href="#news">delete</a>
    <a href="#contact">insert</a>
    <a href="#about">Update</a>
  </div>


  <form action="index.php" method="get">
    <input type="text" name="table">
    <input type="submit" value="surch">
  </form>


  <?php
  $table = $_GET["table"];
  //echo "$table";
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql); // esegue la query 
  
  if ($result->num_rows > 0) {
    echo "<table border= '1'>";
    //echo "<tr><td>Name</td><td>Prezzo</td></tr>";
    //while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo
    switch ($table) {
      case "Dipendenti":
        echo "<label> Dipendenti </label>";
        echo "<tr><td>Cognome</td><td>Nome</td><td>Stipendio</td><td>Vacanze</td></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Cognome"] . "</td><td>" . $row["Nome"] . "</td>
                <td>" . $row["Stipendio"] . "</td><td>" . $row["Vacanze"] . "</td></tr>";
        }
        break;
      case "Fornitori":
        echo "<label> Fornitori </label>";
        echo "<tr><td>Name</td><td>Telefono</td></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Telefono"] . "</td></tr>";
        }
        break;
      case "Categoria":
        echo "<label> Categoria </label>";
        echo "<tr><td>Name</td></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Name"] . "</td></tr>";
        }
        break;
      case "Prodotti":
        echo "<label> Prodotti </label>";
        echo "<tr><td>Name</td><td>Prezzo</td></tr>";
        while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Prezzo"] . "</td></tr>";
        }
        break;
    }
    //echo "Nome: " . $row["Name"] . " - Prezzo: " . $row["Prezzo"] . "<br>";
    //echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["Prezzo"] . "</td></tr>";
    //}
    echo "</table>";
  } else {
    echo "0 risultati";
  }
  ?>


</body>

</html>
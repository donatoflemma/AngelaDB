<?php

if (isset($_GET['table'])) {
    $_SESSION['table'] = $_GET['table'];
    $table = $_SESSION['table'];

    if (!empty($table)) {
        $sql = "SELECT * FROM $table";
        $result = $GLOBALS['conn']->query($sql);
        /*Come funziona $GLOBALS
          $GLOBALS è un array associativo speciale di PHP che contiene tutte le variabili globali.
          La chiave nell’array è il nome della variabile senza il $.*/

        if ($result->num_rows > 0) {
            //echo "<table border= '1'>";

            switch ($table) {

                case "Dipendenti":
                    echo "<h1 class='display-6 mt-1'><strong>Mitarbeiter</strong></h1>";
                            include "../backend/include/dropdown_form.php";
                        echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table  table-light table-striped-columns  table-hover '>
                            <thead >
                                <tr>
                                    <th scope='col'>Mitarbeiter_ID</th>
                                    <th scope='col'>Nachname</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>Gehalt</th>
                                    <th scope='col'>Urlaub</th>
                                </tr>
                            </thead>
                            <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo

                        echo "<tr>
                                <th scope='row'>" . $row["Dipendenti_ID"] . "</th>
                                <td>" . $row["Cognome"] . "</td>
                                <td>" . $row["Nome"] . "</td>
                                <td>" . $row["Stipendio"] . "</td>
                                <td>" . $row["Vacanze"] . "</td>
                            </tr>";
                    }
                    break;

                case "Fornitori":
                    echo "
                        <h1 class='display-6 mt-3'><strong>Lieferanten</strong></h1>";
                            include "../backend/include/dropdown_form.php";
                    echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                    <th scope='col'>Lieferanten_ID</th>
                                    <th scope='col'>Name</th>
                                    <th scope='col'>Telefon</th>
                                </tr>
                            </thead>
                            <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {

                        echo "<tr>
                                <th scope='row'>" . $row["Fornitori_ID"] . "</th>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Telefono"] . "</td>
                              </tr>";
                    }
                    break;

                case "Categoria":

                    echo "
                        <h1 class='display-6 mt-3'><strong>Kategorie</strong></h1>";
                                include "../backend/include/dropdown_form.php";
                    echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                    <tr>
                                        <th scope='col'>Kategorie_ID</th>
                                        <th scope='col'>Name</th>
                                    </tr>
                            </thead>
                            <tbody class='table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>" . $row["Categoria_ID"] . "</th>
                                <td>" . $row["Name"] . "</td>
                              </tr>";
                    }
                    break;

                case "Prodotti":

                    echo " 
                        <h1 class='display-6 mt-3'><strong>Produkte</strong></h1>";
                            include "../backend/include/dropdown_form.php";
                    echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'>Produkte_ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Preis</th>
                                <th scope='col'>Gewicht</th>
                                </tr>
                            </thead>
                            <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>" . $row["Prodotti_ID"] . "</th>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                                <td>" . $row["Peso"] . "g" . "</td>
                              </tr>";
                    }
                    break;

                case "Ordini":

                    echo "  
                         <h1 class='display-6 mt-3'><strong>Bestellungen</strong></h1>";
                                include "../backend/include/dropdown_form.php";
                    echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                            <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'>Bestellung_ID</th>
                                <th scope='col'>Datum</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Menge</th>
                                <th scope='col'>Kosten</th>
                                </tr>
                            </thead>
                            <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>" . $row["Ordini_ID"] . "</th>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Costo"] . "€" . "</td>
                              </tr>";
                    }
                    break;

                case "Vendite":


                    echo "   
                        <h1 class='display-6 mt-3'><strong>Verkäufe</strong></h1>";
                        
                            include "../backend/include/dropdown_form.php";
                    
                echo"    <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                            <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'>Verkauf_ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Datum</th>
                                <th scope='col'>Menge</th>
                                <th scope='col'>Preis</th>
                                </tr>
                            </thead>
                            <tbody class='table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <th scope='row'>" . $row["Vendite_ID"] . "</th>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                              </tr>";
                    }
                    break;
            }
            echo "</tbody>
                    </table>
                </div>";
        } else {
            echo "<h1 class='display-6 mt-3'><strong>0 results</strong></h1>";
        }

    } else {
        echo "<h1 class='display-6 mt-3'><strong>No table selected</strong></h1>";
    }
}

?>
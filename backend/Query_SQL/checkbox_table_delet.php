<?php
// for the checkbox_selection  for each table !!!! 

if (isset($_SESSION['table'])) {
    $table = $_SESSION['table'];

    //if (isset($_GET[$table])) {
    //  $table = $_GET["$table"];

    if (empty(!$table)) {
        $sql = "SELECT * FROM $table";
        $result = $GLOBALS['conn']->query($sql);
        /*Come funziona $GLOBALS
          $GLOBALS è un array associativo speciale di PHP che contiene tutte le variabili globali.
          La chiave nell’array è il nome della variabile senza il $.*/

        if ($result->num_rows > 0) {
            
            //<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            //<label for="vehicle1"> I have a bike</label><br>

            switch ($table) {

                case "Dipendenti":
                    
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>// da qua prendo il post per eliminare
                            <h1 class='display-6 mt-1'><strong>Mitarbeiter</strong></h1>
                            <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                                <table class='table  table-light table-striped-columns  table-hover '>
                                    <thead >
                                        <tr>
                                            <th scope='col'></th>
                                            <th scope='col'>Mitarbeiter_ID</th>
                                            <th scope='col'>Nachname</th>
                                            <th scope='col'>Name</th>
                                            <th scope='col'>Gehalt</th>
                                            <th scope='col'>Urlaub</th>
                                        </tr>
                                    </thead>
                                <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo
                        // TEORIA checkbox  FINE SCRIPT
                        echo "  <tr>
                                    <td ><input class='form-check-input me-1' type='checkbox' value='" . $row['Dipendenti_ID'] . "' name= 'Dipendenti[]'></td>
                                    <td>" . $row["Dipendenti_ID"] . "</td>
                                    <td>" . $row["Cognome"] . "</td>
                                    <td>" . $row["Nome"] . "</td>
                                    <td>" . $row["Stipendio"] . "</td>
                                    <td>" . $row["Vacanze"] . "</td>
                                </tr>";

                    }

                    break;

                case "Fornitori":
                    echo"<h1 class='display-6 mt-3'><strong>Lieferanten</strong></h1>
                         <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                    <tr>
                                        <th scope='col'></th>
                                        <th scope='col'>Lieferanten_ID</th>
                                        <th scope='col'>Name</th>
                                        <th scope='col'>Telefon</th>
                                    </tr>
                            </thead>
                            <tbody class='table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input class='form-check-input me-1' type='checkbox' name= 'Fornitori[]' value='" . $row["Fornitori_ID"] . "'> </td>
                                <td>" . $row["Fornitori_ID"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Telefono"] . "</td>
                              </tr>";
                    }

                    break;

                case "Categoria":
                  echo "
                    <h1 class='display-6 mt-3'><strong>Kategorie</strong></h1>
                    <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                    <tr>
                                        <th scope='col'></th>
                                        <th scope='col'>Kategorie_ID</th>
                                        <th scope='col'>Name</th>
                                    </tr>
                            </thead>
                            <tbody class='table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td ><input class='form-check-input me-1' type='checkbox' name= 'Categoria[]' value='" . $row["Categoria_ID"] . "'></td>
                                <td>" . $row["Categoria_ID"] . "</td>
                                <td>" . $row["Name"] . "</td>
                              </tr>";
                    }

                    break;

                case "Prodotti":
                     echo"   
                     <h1 class='display-6 mt-3'><strong>Produkte</strong></h1>
                    <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                          <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'></th>
                                <th scope='col'>Produkte_ID</th>
                                <th scope='col'>Name</th>
                                <th scope='col'>Preis</th>
                                <th scope='col'>Gewicht</th>
                                </tr>
                            </thead>
                            <tbody class=' table-group-divider'>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td ><input class='form-check-input me-1' type='checkbox' name= 'Prodotti[]' value='" . $row['Prodotti_ID'] . "' ></td>
                                <td>" . $row["Prodotti_ID"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                                <td>" . $row["Peso"] . "g" . "</td>
                              </tr>";
                    }

                    break;

                case "Ordini":
                  echo"<h1 class='display-6 mt-3'><strong>Bestellungen</strong></h1>
                       <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                            <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'></th>
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
                                <td ><input class='form-check-input me-1' type='checkbox' name= 'Ordini[]' value='" . $row['Ordini_ID'] . "' ></td>
                                <td>" . $row["Ordini_ID"] . "</td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Costo"] . "€" . "</td>
                              </tr>";
                    }

                    break;

                case "Vendite":
                    echo"<h1 class='display-6 mt-3'><strong>Verkäufe</strong></h1>
                         <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                            <table class='table table-light table-striped-columns  table-hover'>
                            <thead >
                                <tr>
                                <th scope='col'></th>
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
                                <td ><input class='form-check-input me-1' type='checkbox' name= 'Vendite[]' value='" . $row['Vendite_ID'] . "'> </td>
                                <td>" . $row["Vendite_ID"] . "</td>
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
            </div>
            <input type='submit'  value='Delete'>
        </form>";

        } else {
            echo "0 results";
        }

    } else {
        echo "No table selected ";
    }
}
/*piccola spiegazione :
- type="checkbox" Serve per creare una casella di selezione (checkbox).
- id="dipendenti.$dipendenti_counter" È usato per collegare il checkbox al suo label (etichetta descrittiva).
- name="dipendenti.$dipendenti_counter" Nome del campo che verrà inviato al server se il form viene inviato.
- value='$row['Nome']' Valore che verrà inviato al server se il checkbox è selezionato.
- for="dipendenti.$dipendenti_counter" Etichetta associata al checkbox.*/
?>
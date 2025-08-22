<?php
// for the checkbox_selection  for each table !!!! 

if (isset($_GET['table'])) {
    $table = $_GET['table'];

    //if (isset($_GET[$table])) {
    //  $table = $_GET["$table"];

    if (empty(!$table)) {
        $sql = "SELECT * FROM $table";
        $result = $GLOBALS['conn']->query($sql);
        /*Come funziona $GLOBALS
          $GLOBALS è un array associativo speciale di PHP che contiene tutte le variabili globali.
          La chiave nell’array è il nome della variabile senza il $.*/

        if ($result->num_rows > 0) {
            echo "<table border= '1'>";
            //<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            //<label for="vehicle1"> I have a bike</label><br>

            switch ($table) {

                case "Dipendenti":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Mitarbeiter </label>";
                    echo "<tr>
                            <td></td>
                            <td>Nachname</td>
                            <td>Name</td>
                            <td>Gehalt</td>
                            <td>Urlaub</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo
                        // TEORIA checkbox  FINE SCRIPT
                        echo "<tr>
                        
                                    <td><input type='checkbox' name= 'Dipendenti[]' value='" . $row['Dipendenti_ID'] . "'></td>
                                    <td>" . $row["Cognome"] . "</td>
                                    <td>" . $row["Nome"] . "</td>
                                    <td>" . $row["Stipendio"] . "</td>
                                    <td>" . $row["Vacanze"] . "</td>
                               </tr><br>";

                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;

                case "Fornitori":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Lieferanten </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                            <td>Telefon</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name= 'Fornitori[]' value='" . $row['Fornitori_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Telefono"] . "</td>
                              </tr>";
                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;

                case "Categoria":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Kategorie </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name ='Categoria[]' value='" . $row['Categoria_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                              </tr>";
                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;

                case "Prodotti":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Produkte </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                            <td>Preis</td>
                            <td>Gewicht</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name ='Prodotti[]' value='" . $row['Prodotti_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                                <td>" . $row["Peso"] . "g</tr>";
                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;

                case "Ordini":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Bestellungen </label>";
                    echo "<tr>
                                <td></td>
                                <td>Datum</td>
                                <td>Name</td>
                                <td>Menge</td>
                                <td>Kosten</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name = 'Ordini[]' value='" . $row['Ordini_ID'] . "'></td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Costo"] . "€" . "</td>
                              </tr>";
                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;

                case "Vendite":
                    echo "<form action='../backend/Query_SQL/delete.php' method = 'POST'>";
                    echo "<label> Verkäufe </label>";
                    echo "<tr>
                                <td></td>
                                <td>Name</td>
                                <td>Datum</td>
                                <td>Menge</td>
                                <td>Preis</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td><input type='checkbox' name= 'Vendite[]' value='" . $row['Vendite_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                              </tr>";
                    }
                    echo "</table>";
                    echo "<input type='submit' value='delete'>";
                    echo "</form>";
                    break;
            }

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
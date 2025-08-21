<?php
//DELETE

//DELETE
//$stmt = $conn->prepare("DELETE FROM utenti WHERE id = ?");
//$stmt->bind_param("i", $id);
//$stmt->execute();*/
?>
<?php
//$table = $_POST["nameTable"];
//$stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");// non so se lasciare l´´id perche il cliente non sa 
// cosa mettere 
//$stmt->bind_param("i", $id);// cambiare anche questo perche puo essere anche un STRING
//$stmt->execute();








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
                    $dipendenti_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
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

                        // <td><input type='checkbox' name='item.$dipendenti_counter' value='" . $row['Dipendenti_ID'] . "'></td>
                        echo "<tr>
                        
                                    <td><input type='checkbox' name= 'Dipendenti[]' value='" . $row['Dipendenti_ID'] . "'></td>
                                    <td>" . $row["Cognome"] . "</td>
                                    <td>" . $row["Nome"] . "</td>
                                    <td>" . $row["Stipendio"] . "</td>
                                    <td>" . $row["Vacanze"] . "</td>
                               </tr><br>";
                        $dipendenti_counter++;
                    }
                    include "../../frontend/include/delet_Form_down.php";
                    break;

                case "Fornitori":
                    $fornitori_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
                    echo "<label> Lieferanten </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                            <td>Telefon</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        //<td><input type='checkbox' name='item.$fornitori_counter' value='" . $row['Fornitori_ID'] . "'></td>
                        echo "<tr>
                                <td><input type='checkbox' name='Fornitori[]' value='" . $row['Fornitori_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Telefono"] . "</td>
                              </tr>";
                    }
                    $fornitori_counter++;
                    include "../../frontend/include/delet_Form_down.php";
                    break;

                case "Categoria":
                    $Categoria_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
                    echo "<label> Kategorie </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        //<td><input type='checkbox' name='item.$Categoria_counter' value='" . $row['Categoria_ID'] . "'></td>
                        echo "<tr>
                                <td><input type='checkbox' name='Categoria[]' value='" . $row['Categoria_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                              </tr>";
                        $Categoria_counter++;
                    }
                    include "../../frontend/include/delet_Form_down.php";
                    break;

                case "Prodotti":
                    $prodotti_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
                    echo "<label> Produkte </label>";
                    echo "<tr>
                            <td></td>
                            <td>Name</td>
                            <td>Preis</td>
                            <td>Gewicht</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        //<td><input type='checkbox' name='item.$prodotti_counter' value='" . $row['Prodotti_ID'] . "'></td>
                        echo "<tr>
                                <td><input type='checkbox' name='Prodotti[]' value='" . $row['Prodotti_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                                <td>" . $row["Peso"] . "g</tr>";
                        $prodotti_counter++;
                    }
                    include "../../frontend/include/delet_Form_down.php";
                    break;

                case "Ordini":
                    $ordini_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
                    echo "<label> Bestellungen </label>";
                    echo "<tr>
                                <td></td>
                                <td>Datum</td>
                                <td>Name</td>
                                <td>Menge</td>
                                <td>Kosten</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        //<td><input type='checkbox' name='item.$ordini_counter' value='" . $row['Ordini_ID'] . "'></td>
                        echo "<tr>
                                <td><input type='checkbox' name='Ordini[]' value='" . $row['Ordini_ID'] . "'></td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Costo"] . "€" . "</td>
                              </tr>";
                        $ordini_counter++;
                    }
                    include "../../frontend/include/delet_Form_down.php";
                    break;

                case "Vendite":
                    $vendite_counter = 0;
                    include "../../frontend/include/delet_Form_up.php";
                    echo "<label> Verkäufe </label>";
                    echo "<tr>
                                <td></td>
                                <td>Name</td>
                                <td>Datum</td>
                                <td>Menge</td>
                                <td>Preis</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        //<td><input type='checkbox' name='item.$vendite_counter' value='" . $row['Vendite_ID'] . "'></td>
                        echo "<tr>
                                <td><input type='checkbox' name='Vendite[]' value='" . $row['Vendite_ID'] . "'></td>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                              </tr>";
                        $vendite_counter++;
                    }
                    include "../../frontend/include/delet_Form_down.php";
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
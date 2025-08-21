<?php
//function Select($table)
//{
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

            switch ($table) {

                case "Dipendenti":
                    echo "<label> Mitarbeiter </label>";
                    echo "<tr>
                            <td>Nachname</td>
                            <td>Name</td>
                            <td>Gehalt</td>
                            <td>Urlaub</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) { // legge ogni riga come array associativo
                        echo "<tr>
                                <td>" . $row["Cognome"] . "</td>
                                <td>" . $row["Nome"] . "</td>
                                <td>" . $row["Stipendio"] . "</td>
                                <td>" . $row["Vacanze"] . "</td>
                              </tr>";
                    }
                    break;

                case "Fornitori":
                    echo "<label> Lieferanten </label>";
                    echo "<tr>
                            <td>Name</td>
                            <td>Telefon</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Telefono"] . "</td>
                              </tr>";
                    }
                    break;

                case "Categoria":
                    echo "<label> Kategorie </label>";
                    echo "<tr>
                            <td>Name</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["Name"] . "</td>
                              </tr>";
                    }
                    break;

                case "Prodotti":
                    echo "<label> Produkte </label>";
                    echo "<tr>
                            <td>Name</td>
                            <td>Preis</td>
                            <td>Gewicht</td>
                          </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                                <td>" . $row["Peso"] . "g" . "</td>
                              </tr>";
                    }
                    break;

                case "Ordini":
                        echo "<label> Bestellungen </label>";
                        echo "<tr>
                                <td>Datum</td>
                                <td>Name</td>
                                <td>Menge</td>
                                <td>Kosten</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Name"]  . "</td>
                                <td>" . $row["Quantita"] . "</td>
                                <td>" . $row["Costo"] . "€" . "</td>
                              </tr>";
                    }
                    break;

                case "Vendite":
                        echo "<label> Verkäufe </label>";
                        echo "<tr>
                                <td>Name</td>
                                <td>Datum</td>
                                <td>Menge</td>
                                <td>Preis</td>
                            </tr>";

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $row["Name"] . "</td>
                                <td>" . $row["Data"] . "</td>
                                <td>" . $row["Quantita"]  . "</td>
                                <td>" . $row["Prezzo"] . "€" . "</td>
                              </tr>";
                    }
                    break;
                }
            echo "</table>";
        } else {
            echo "0 results";
        }

    } else {
        echo "No table selected ";
    }
}

//}


?>
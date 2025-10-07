<?php
// for the checkbox_selection  for each table !!!! 

if (isset($_SESSION['table'])) {
    $table = $_SESSION['table'];

    if (empty(!$table)) {
        $sql = "SELECT * FROM $table";
        $result = $GLOBALS['conn']->query($sql);
        /*Come funziona $GLOBALS
          $GLOBALS è un array associativo speciale di PHP che contiene tutte le variabili globali.
          La chiave nell’array è il nome della variabile senza il $.*/

        if ($result->num_rows > 0) {

            switch ($table) {


                case "Dipendenti":
                    $title = 'Mitarbeiter';
                    $col = ['Mitarbeiter_ID','Nachname','Name','Gehalt','Urlaub'];
                    $fetch_assoc = ['Dipendenti_ID','Cognome','Nome','Stipendio','Vacanze'];
                    $check_name = 'Dipendenti[]';
                    break;

                case "Fornitori":
                    $title = 'Lieferanten';
                    $col = ['Lieferanten_ID','Name','Telefon'];
                    $fetch_assoc = ['Fornitori_ID','Name','Telefono'];
                    $check_name = 'Fornitori[]';
                    break;

                case "Categoria":
                    $title = 'Kategorie';
                    $col = ['Kategorie_ID','Name',];
                    $fetch_assoc = ['Categoria_ID','Name'];
                    $check_name = 'Categoria[]';
                    break;

                case "Prodotti":
                    $title = 'Produkte';
                    $col = ['Produkte_ID','Name','Preis','Gewicht',];
                    $fetch_assoc = ['Prodotti_ID','Name','Prezzo','Peso'];
                    $check_name = 'Prodotti[]';
                    break;

                case "Ordini":
                    $title = 'Bestellungen';
                    $col = ['Bestellung_ID','Datum','Name','Menge','Kosten'];
                    $fetch_assoc = ['Ordini_ID','Data','Name','Quantita','Costo'];
                    $check_name = 'Ordini[]';
                    break;

                case "Vendite":
                    $title = 'Verkäufe';
                    $col = ['Verkauf_ID','Name','Datum','Menge','Preis'];
                    $fetch_assoc = ['Vendite_ID','Name','Data','Quantita','Prezzo'];
                    $check_name = 'Vendite[]';
                    break;  } 


                    // crea le colonne per ogni tabella
                echo"<form action='../backend/Query_SQL/delete.php' method = 'POST'>
                        <h1 class='display-6 mt-1'><strong>" . $title . "</strong></h1>
                        <div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                            <table class='table  table-light table-striped-columns  table-hover '>
                                <thead >
                                    <tr>
                                        <th scope='col'></th>";


                    foreach($col as $items){
                        echo"
                                        <th scope='col'>$items</th>";
                    }


                        echo"       </tr>
                                </thead>
                            <tbody class='table-group-divider'>";




            while ($row = $result->fetch_assoc()) {
                echo" <tr>
                        <td ><input class='form-check-input me-1' type='checkbox' name= $check_name value='" . $row[$fetch_assoc[0]] . "'> </td>";
                foreach($fetch_assoc as $items){

                    if($items == 'Prezzo' || $items == 'Stipendio' || $items == 'Costo'){
                        echo"
                        <td>" . $row[$items] . " €" . "</td>";

                    }elseif($items == 'Peso'){
                        echo"
                        <td>" . $row[$items] . " g" . "</td>";
                    }else{
                        echo"
                        <td>" . $row[$items] . "</td>";
                    }}

                echo"</tr>";
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

?>
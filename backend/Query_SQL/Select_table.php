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
            

            switch ($table) {

                case "Dipendenti":
                    $title = 'Mitarbeiter';
                    $col = ['Mitarbeiter_ID','Nachname','Name','Gehalt','Urlaub'];
                    $fetch_assoc = ['Dipendenti_ID','Cognome','Nome','Stipendio','Vacanze'];
                    $index_0 ='Dipendenti_ID'; // mi serve per inserire la classe scope='row' e farlo Bold 
                    break;

                case "Fornitori":
                    $title = 'Lieferanten';
                    $col = ['Lieferanten_ID','Name','Telefon'];
                    $fetch_assoc = ['Fornitori_ID','Name','Telefono'];
                    $index_0 ='Fornitori_ID';
                    break;

                case "Categoria":
                    $title = 'Kategorie';
                    $col = ['Kategorie_ID','Name',];
                    $fetch_assoc = ['Categoria_ID','Name'];
                    $index_0 ='Categoria_ID';
                    break;

                case "Prodotti":
                    $title = 'Produkte';
                    $col = ['Produkte_ID','Name','Preis','Gewicht',];
                    $fetch_assoc = ['Prodotti_ID','Name','Prezzo','Peso'];
                    $index_0 ='Prodotti_ID';
                    break;

                case "Ordini":
                    $title = 'Bestellungen';
                    $col = ['Bestellung_ID','Datum','Name','Menge','Kosten'];
                    $fetch_assoc = ['Ordini_ID','Data','Name','Quantita','Costo'];
                    $index_0 ='Ordini_ID';
                    break;

                case "Vendite":
                    $title = 'Verkäufe';
                    $col = ['Verkauf_ID','Name','Datum','Menge','Preis'];
                    $fetch_assoc = ['Vendite_ID','Name','Data','Quantita','Prezzo'];
                    $index_0 ='Vendite_ID';
                    break;}


           echo "  
                <h1 class='display-6 mt-3'><strong>" . $title . "</strong></h1>";
                    include "../backend/include/dropdown_form.php";
           echo"<div class='table-responsive' style='max-height:300px; overflow-y:auto;'>
                    <table class='table table-light table-striped-columns  table-hover'>
                        <thead >
                            <tr>";


            foreach($col as $items){
                        echo"
                                <th scope='col'>$items</th>";
                    }
                            
                    echo"   </tr>
                        </thead>
                  <tbody class=' table-group-divider'>";
            
      
            while ($row = $result->fetch_assoc()) {
                echo" <tr>";
                        
                foreach($fetch_assoc as $items){

                    if($items == $fetch_assoc[0]){
                        echo"
                        <th scope='row'>" . $row[$items] . "</th>";

                    }elseif($items == 'Prezzo' || $items == 'Stipendio' || $items == 'Costo'){
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
            </div>";
        } else {
            echo "<h1 class='display-6 mt-3'><strong>0 results</strong></h1>";
        }

    } else {
        echo "<h1 class='display-6 mt-3'><strong>0 results</strong></h1>";
    }
}

?>
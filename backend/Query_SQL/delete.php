<?php
include "../api/db_connection.php";

$array = ['Dipendenti', 'Categoria', 'Fornitori', 'Prodotti', 'Ordini', 'Vendite'];
foreach ($array as $name) {// passa ogni items della lista 
    if (isset($_POST[$name])) {//controlla se il form con il nome dell´items della lista ha dei risultati da passare
        $values = $_POST[$name];//salva il tutto in una value
        if (!empty($values)) {
            $counter = 0;
            foreach ($values as $item) {
                $counter++;
                echo 'valore= ' . $item . '<br>';
            }
            
            $name_ID = $name . "_id";
            $placeholders = implode(',', array_fill(0, count($values), '?'));
            echo "DELETE FROM $name WHERE $name_ID IN ($placeholders)";
            //$stmt = $conn->prepare("DELETE FROM $name WHERE name_ID IN (placeholders)");
            //$stmt->bind_param("iiii", $id1, $id2, $id3, $id4);
            //ora capire come funziona per eliminare perche devo capire anche quanti ? o quelli di sotto inserire 
            //$stmt->execute();
            //"i" = integer, "s" = string, "d" = double, "b" = blob.


        } else {
            echo 'Array vuoto!';
        }
    }

} 
/*
$placeholders TEORIA
count($values) → conta quanti ID hai ricevuto dal POST.
Esempio: [3, 5, 8] → count = 3.

array_fill(0, count($values), '?') → crea un array con solo punti interrogativi.
Esempio: [?, ?, ?].

implode(',', [...]) → trasforma l’array in una stringa separata da virgole.
Esempio: ?, ?, ?.
*/?>
<?php
include "../api/db_connection.php";

$array = ['Dipendenti', 'Categoria', 'Fornitori', 'Prodotti', 'Ordini', 'Vendite'];
foreach ($array as $name) {// passa ogni items della lista 
    if (isset($_POST[$name])) {//controlla se il form con il nome dell´items della lista ha dei risultati da passare
        $values = $_POST[$name];//salva il tutto in una value
        if (!empty($values)) {
            $counter = 0;

            foreach ($values as $item) { // Mi serve solo per avere un counter da passare nel $placeholder_type con il numero che degli items che mi servono 
                $counter++;
            }

            $name_ID = $name . "_id";
            $placeholders = implode(',', array_fill(0, count($values), '?'));
            $placeholder_type =implode('', array_fill(0,$counter, 'i'));
            $stmt = $conn->prepare("DELETE FROM $name WHERE $name_ID IN ($placeholders)");
            ##################### BIND_PARAM ########################################endregion
            //"i" = integer, "s" = string e data  "d" = double, "b" = blob  - DATI BINARI.
            $stmt->bind_param("$placeholder_type", ...$values);
            $stmt->execute();
            echo "Done !!";
        } else {
            echo 'Array vuoto!';
        }
    }

} 
/*
$placeholders TEORIA
count($values) → conta quanti ID hai ricevuto dal POST.
Esempio: [3, 5, 8] → count = 3.
...$nome_array !!!! MOLTO IMPORTANTE !!!! per spachettare un array dentro una funzione o un´altro array per duplicare il contenuto in essa , non si puo stampare mi raccomando  
array_fill(0, count($values), '?') → crea un array con solo punti interrogativi.
Esempio: [?, ?, ?].
           //$stmt->bind_param("iiii", $id1, $id2, $id3, $id4);  MUSTER BIND_PARAMETER
implode(',', [...]) → trasforma l’array in una stringa separata da virgole.
Esempio: ?, ?, ?.
*/?>
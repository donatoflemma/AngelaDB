<?php
include "../api/db_connection.php";
include "../../frontend/include/header.php";
NamePage("delete");

include "../../frontend/include/footer.php";

$array = ['Dipendenti', 'Categoria', 'Fornitori', 'Prodotti', 'Ordini', 'Vendite'];
foreach ($array as $name) {
    if (isset($_POST[$name])) {
        $values = $_POST[$name];
        if (!empty($values)) {
            $id_counter = 0;

            foreach ($values as $item) {
                $id_counter++;

                echo 'valore= ' . $item . '<br>';

                //$stmt = $conn->prepare("DELETE FROM utenti WHERE id IN (?, ?, ?, ?)");
                //$stmt->bind_param("iiii", $id1, $id2, $id3, $id4);
                // ora capire come funziona per eliminare perche devo capire anche quanti ? o quelli di sotto inserire 
                //$stmt->execute();
                //"i" = integer, "s" = string, "d" = double, "b" = blob.
            }

        } else {
            echo 'Array vuoto!';
        }
    }

} ?>
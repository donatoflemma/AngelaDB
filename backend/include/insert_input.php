
    
    <!--TEORIA il name = '' del bottone mi serve solo come prova quando uso isset o empty --
    gli altri name degli input come valori che vengono passati dal metodo POST .
    in questo caso automaticamente il metodo $_POST diventa un´array associativo con  chiave valore (quindi non numerico con index !!!)
    ES :
    $_POST[name del´input]
    !!! ATTENZIONE !!!
    bottone sempre con method = "submit" o non passa niente -->
    <?php

    if (isset($_SESSION['table'])) {
        $table = $_SESSION['table'];
        echo"
        <h1 class='display-6 mt-1'><strong>$table</strong></h1>
        <form class='pl-2 d-flex mb-3 mt-3 ' action='../backend/Query_SQL/insert.php' method='POST'>";

        switch ($table):
            
            case 'Dipendenti':
                //Cognome (VAR),Nome (VAR),Stipendio (dec),Vacanze (int)
                $label = array('Nachname', 'Name', 'Gehalt', 'UrlaubsTage');
                $name = ['Cognome','Nome','Stipendio','Vacanze'];
                $placeholder = array('Stefan', 'Müller', '1.200', '31');
                $counter = 0;
                foreach ($label as $items) {
                    // mi serve per avere un margin adeguato , il primo non lo ha !!
                    if ($items === 'Nachname') {
                        echo "<div class='form-floating  mb-3' >";
                    } else {
                        echo "<div class='form-floating  mb-3' style='margin-left:2%;'>";
                    }
                    echo "    
                                    <input type='";
                    if ($items === 'Nachname' || $items === 'Name') {
                        echo "txt";
                    } else {
                        echo "number";
                    }
                    echo "' class='form-control' id='$items' name = '$name[$counter]' placeholder='$placeholder[$counter]'> 
                                    <label for='$items'>$items</label> 
                                </div>";
                    $counter++;

                }
                break;

            case 'Fornitori':
                //Name (VAR),Telefono (VAR)
                $label = array('Name', 'Telefon');
                $name = ['Name','Telefono'];
                $placeholder = array('Unternehmen Name', '+4900000000');
                $counter = 0;
                foreach ($label as $items) {
                    // mi serve per avere un margin adeguato , il primo non lo ha !!
                    if ($items === 'Name') {
                        echo "<div class='form-floating  mb-3' >";
                    } else {
                        echo "<div class='form-floating  mb-3' style='margin-left:2%;'>";
                    }
                    echo "    
                                    <input type='txt' class='form-control' id='$items' name = '$name[$counter]'  placeholder='$placeholder[$counter]'> 
                                    <label for='$items'>$items</label> 
                                </div>";
                    $counter++;

                }
                break;

            case 'Categoria':
                //Name (VAR)
                echo "
    
                        <div class='form-floating  mb-3'> 
                            <input type='text' class='form-control' name = 'Name' id='type' placeholder='type'> 
                            <label for='type'>Type</label> 
                        </div>";
                break;

            case 'Prodotti':  /// da vedere il discorso della categoria !!!!!!!!!! MOLTO IMPORTANTE 
                //Name (VAR),Prezzo (dec),Peso (dec)
                $label = array('Name', 'Preis', 'weight kg');
                $name = ['Name','Prezzo','Peso'];
                $placeholder = array('White bread', '0,00', '0,00 kg');
                $counter = 0;
                foreach ($label as $items) {
                    // mi serve per avere un margin adeguato , il primo non lo ha !!
                    if ($items === 'Name') {
                        echo "<div class='form-floating  mb-3' >";
                    } else {
                        echo "<div class='form-floating  mb-3' style='margin-left:2%;'>";
                    }
                    echo "    
                                    <input ";
                    if ($items === 'Name') {
                        echo "type= 'txt'";
                    } else {
                        echo "type= 'number' step = 0.01";
                    }
                    echo " class='form-control' id='$items' name = '$name[$counter]' placeholder='$placeholder[$counter]'> 
                                    <label for='$items'>$items</label> 
                                </div>";
                    $counter++;
                }
                break;

            case 'Ordini': // DA VEDERE PARAMETRI (FORNITORI_ID, PRODOTTI_ID)
                //Data (date),Name (VAR),Quantitá (INT),Costi (dec)
                $label = array('Date', 'Name', 'Quantity', 'Costs');
                $name = ['Data','Name','Quantita','Costo'];
                $placeholder = array('DD,MM,YYYY', 'Stefan', '0000', '00.00');
                $counter = 0;
                foreach ($label as $items) {
                    // mi serve per avere un margin adeguato , il primo non lo ha !!
                    if ($items === 'Date') {
                        echo "<div class='form-floating  mb-3' >";
                    } else {
                        echo "<div class='form-floating  mb-3' style='margin-left:2%;'>";
                    }
                    echo "    
                                    <input ";
                    if ($items === 'Date') {
                        echo "type= 'date'";
                    } elseif ($items === 'Name') {
                        echo "type= 'txt'";
                    } elseif ($items === 'Quantity') {
                        echo "type= 'number'";
                    } else {
                        echo "type= 'number' step = 0.01";
                    }
                    echo " class='form-control' id='$items' name = '$name[$counter]' placeholder='$placeholder[$counter]'> 

                                    <label for='$items'>$items</label> 
                                </div>";
                    $counter++;
                }
                break;


            case 'Vendite': // DA VEDERE PRODOTTI_ID molto importante !!!!
                //Name (VAR),Datum (Date),Quantitá (INT),Prezzo (dec)
                $label = array('Name', 'Date', 'Quantity', 'Costs');
                $name = ['Name','Data','Quantita','Prezzo'];
                $placeholder = array('Stefan', 'DD,MM,YYYY', '0000', '00.00');
                $counter = 0;
                foreach ($label as $items) {
                    // mi serve per avere un margin adeguato , il primo non lo ha !!
                    if ($items === 'Name') {
                        echo "<div class='form-floating  mb-3' >";
                    } else {
                        echo "<div class='form-floating  mb-3' style='margin-left:2%;'>";
                    }
                    echo "    
                                    <input ";
                    if ($items === 'Date') {
                        echo "type= 'date'";
                    } elseif ($items === 'Name') {
                        echo "type= 'txt'";
                    } elseif ($items === 'Quantity') {
                        echo "type= 'number'";
                    } else {
                        echo "type= 'number' step = 0.01";
                    }
                    echo " class='form-control' id='$items' name = '$name[$counter]' placeholder='$placeholder[$counter]'> 

                                    <label for='$items'>$items</label> 
                                </div>";
                    $counter++;

                }
                break;

        endswitch;
        $counter = 0;


    }
    ?>
    <input type='submit' class='btn btn-light' name='btn' value='Insert'
        style='width:10%; height:20% ; margin-left:2%;margin-top:1%'>
</form>


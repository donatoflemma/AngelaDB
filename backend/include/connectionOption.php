<?php
if(isset($_GET['Chose'])){
    if(!empty($_GET['Chose'])){

        $type = $_GET['Chose'];
        $table = $_SESSION['table'];
        switch ($type):
            case 1:
                // Delete
                echo"<h1> Risultato é 1 </h1>";
                echo"$table";
                break;
            case 2:
                //Insert
                echo"<h1> Risultato é 2 </h1>";
                echo"$table";
                break;
            case 3:
                //Update
                echo"<h1> Risultato é 3 </h1>";
                echo"$table";
                break;
            endswitch;
     }
}

?>
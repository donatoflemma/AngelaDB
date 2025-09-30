<?php
include 'Main_Search.php';
if(isset($_GET['Chose'])){
    if(!empty($_GET['Chose'])){

        $type = $_GET['Chose'];
        $table = $_SESSION['table'];
        
        switch ($type):
            case 1:
                // Delete
                include '../backend/Query_SQL/checkbox_table_delet.php';
                break;
            case 2:
                //Insert
                include '../backend/include/insert_input.php';
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
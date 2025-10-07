<?php 
$title = 'Home';
session_start();// Si apre sempre all´inizio del file, serve per salvare una variabile globale per piu file $_SESSION[] 
include '../backend/api/db_connection.php'; 
include '../backend/include/header.php';


include '../backend/include/topnav.php';
topnav('HomeDBMS');

include "../backend/include/connectionOption.php";
include '../backend/Query_SQL/Select_table.php';
  
include './../backend/include/footer.php';
footerType('1');
?>





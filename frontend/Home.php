<?php 
$title = 'Home';
session_start();// Si apre sempre all´inizio del file, serve per salvare una variabile globale per piu file $_SESSION[] 
include '../backend/api/db_connection.php'; 
include '../backend/include/header.php';


include '../backend/include/topnav.php';
topnav('HomeDBMS');




/*echo"<div class='container bg-primary' id='table'>
      <div class='row tetx-start'>
        
        <form  action='Home.php' method='SESSION'> 
          <h1 class=' mb-3'>Select one table</h1>                             
          <input  type='text' name='table'>
          <input type='submit'  value='Surch'>
        </form>
      </div>
      <div class='row tetx-center '>
        <div class = 'col-12 col-lg-6 '>";*/
      include "../backend/include/connectionOption.php";
      include '../backend/Query_SQL/Select_table.php';
  
  


include './../backend/include/footer.php';
footerType('1');
?>





<?php

class Main_Search{


public function Search($confirm){

    if ($confirm){
        echo"<div class='container bg-primary' id='table'>
                <div class='row tetx-start'>
                    
                    <form  action='Home.php' method='SESSION'> 
                    <h1 class=' mb-3'>Select one table</h1>                             
                    <input  type='text' name='table'>
                    <input type='submit'  value='Surch'>
                    </form>
                </div>
                <div class='row tetx-center '>
              <div class = 'col-12 col-lg-6 '>"; 
    }

}
}
?>
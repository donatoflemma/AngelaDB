<?php
function topnav($page){
        echo"<div id='topnav'>";
            echo"<img class='logo' src='img/Panificio.png' id='panificio' alt='immagine non trovata '>";
            echo"<div class='links'>";
            switch($page){
                case 'Home':
                    echo"<a href='./Delete.php'>Delete</a>";
                    echo"<a href='./Insert.php'>Insert</a>";
                    echo"<a href='./Update.php'>Update</a>";
                    break;
                case 'Delete':
                    echo"<a href='./Home.php'>Home</a>";
                    echo"<a href='./Insert.php'>Insert</a>";
                    echo"<a href='./Update.php'>Update</a>";
                    break;
                case 'Insert':
                    echo"<a href='./Home.php'>Home</a>";
                    echo"<a href='./Delete.php'>Delete</a>";
                    echo"<a href='./Update.php'>Update</a>";
                    break;
                case 'Update':
                    echo"<a href='./Home.php'>Home</a>";
                    echo"<a href='./Delete.php'>Delete</a>";
                    echo"<a href='./Insert.php'>Insert</a>";
                    break;
            }
            echo"</div>";
        echo"</div>";
}


  ?>
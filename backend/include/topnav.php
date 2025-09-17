<?php
function topnav($page)
{
    echo "
    <nav class='navbar navbar-expand-lg bg-dark border-bottom border-body' data-bs-theme='dark' style='margin-bottom: 20vh;'>
        <div class='container-fluid'>";

        switch ($page):                  // SOLO PER CAMBIARE L`URL DEL IMG
            case 'HomeAdmin':
            case 'Delete':
            case  'Insert':
            case  'Update':

                   echo"                      <!-- Logo -->
                                    <a class='navbar-brand' href='#'>
                                        <img src='../Muster_Web/img/LogoPanificio 1.png' alt='Logo' height='40'>
                                    </a>";
                    break;

            case 'Home':
            case 'Products':
            case 'About us':
            case 'Contact':

                   echo"                      <!-- Logo -->
                                  <a class='navbar-brand' href='#'>
                                        <img src='./img/LogoPanificio 1.png' alt='Logo' height='40'>
                                  </a>";
                   break;
        endswitch;


                                            // Bottone hamburger 

            echo"
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mainNav'
                aria-controls='mainNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>";
                                
                                // Menu cambia i link e la posizione di essi nel primo div che é il padre 

                
                    switch ($page) :
                        case 'HomeAdmin':
                           echo"             
                            <div class='collapse navbar-collapse  justify-content-end' id='mainNav'>
                                <ul class='navbar-nav  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Delete':
                            echo"            
                             <div class='collapse navbar-collapse justify-content-end' id='mainNav'>
                                <ul class='navbar-nav  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Insert':
                            echo"
                             <div class='collapse navbar-collapse  justify-content-end' id='mainNav'>
                                <ul class='navbar-nav  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Update':
                            echo"
                             <div class='collapse navbar-collapse  justify-content-end' id='mainNav'>
                                <ul class='navbar-nav  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>";
                            break;

                        case 'Home':
                            echo"          
                             <div class='collapse navbar-collapse  ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;

                        case 'Products':
                            echo"
                             <div class='collapse navbar-collapse  ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;
                        
                        case 'About us':
                            echo"
                             <div class='collapse navbar-collapse ' id='mainNav'>
                                <ul class='navbar-nav mx-auto  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;

                        case 'Contact':
                            echo"
                             <div class='collapse navbar-collapse ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>";
                            break;
                    endswitch;
                    

                    switch ($page):                  // PER NON AVERE BTN LOGIN E SING-UP
                        case 'HomeAdmin':
                        case 'Delete':
                        case  'Insert':
                        case  'Update':
                                 echo "
                                        </ul>
                                    </div>
                                </div>
                            </nav>";
                        break;

                        case 'Home':
                        case 'Products':
                        case 'About us':
                        case  'Contact':
                                 echo "
                                        </ul>

                                        <!-- Bottoni a destra -->
                                        <div class='d-flex ms-auto'>
                                            <a class='btn btn-outline-primary me-2' href='./log-in_User.php'>Login</a>
                                            <a class='btn btn-primary' href='./Sing up.php'>Sign-up</a>
                                        </div>
                                    </div>
                                </div>
                            </nav>";
                        break;
                    endswitch;
}
?>
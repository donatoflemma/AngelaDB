<?php
function topnav($page)
{
    echo "
    <nav class='navbar navbar-expand-lg bg-dark border-bottom border-body' data-bs-theme='dark' style='margin-bottom: 20vh;'>
        <div class='container-fluid'>

            <!-- Logo -->
            <a class='navbar-brand' href='#'>
                <img src='../frontend/img/LogoPanificio 1.png' alt='Logo' height='40'>
            </a>

            <!-- Bottone hamburger -->
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mainNav'
                aria-controls='mainNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>

            <!-- Menu -->
            <div class='collapse navbar-collapse' id='mainNav'>
                <ul class='navbar-nav mx-auto gap-4 '>";
                
                    switch ($page) {
                        case 'HomeAdmin':
                            echo "<li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Delete':
                            echo "<li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Insert':
                            echo "<li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Update.php'>Update</a></li>";
                            break;

                        case 'Update':
                            echo "<li class='nav-item'><a class='nav-link' href='./Home.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Delete.php'>Delete</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Insert.php'>Insert</a></li>";
                            break;

                        case 'Home':
                            echo "<li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;

                        case 'Products':
                            echo "<li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;
                        
                        case 'About us':
                            echo "<li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                            break;

                        case 'Contact':
                            echo "<li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>";
                            break;
                    }

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
}
?>
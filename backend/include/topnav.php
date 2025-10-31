<nav class='navbar navbar-expand-lg bg-dark border-bottom border-body' data-bs-theme='dark'
    style='margin-bottom: 20vh;'>
    <div class='container-fluid'>
        <?php
        function topnav($page)
        {


            switch ($page):
                case 'Diary':
                    echo "                <i class='fa-solid fa-book' style='font-size:30px;color: #C1440E;'></i>
                                <a href='new_entry.php' class='btn btn-outline-primary'>NEW ENTRY</a>";
                    break;
                case 'Diary1':
                    echo "                <i class='fa-solid fa-book' style='font-size:30px;color: #C1440E;'></i>";

                    break;


                case 'statistiche':
                    echo "<a href='Udemy.php' class='btn btn-primary btn-lg'>back</a>";
                    break;

                // SOLO PER CAMBIARE L`URL DEL IMG
                case 'HomeDBMS':


                    echo "                      <!-- Logo -->
                                    <a class='navbar-brand' href='#'>
                                        <img src='../Muster_Web/img/LogoPanificio 1.png' alt='Logo' height='40'>
                                    </a>";
                    break;

                case 'Home':
                case 'Products':
                case 'About us':
                case 'Contact':

                    echo "                      <!-- Logo -->
                                  <a class='navbar-brand' href='#'>
                                        <img src='./img/LogoPanificio 1.png' alt='Logo' height='40'>
                                  </a>";
                    break;
            endswitch;






            // Menu cambia i link e la posizione di essi nel primo div che é il padre 
        

            switch ($page):


                case 'Home':
                    // Bottone hamburger 
                    include 'btn_hamburger.php';

                    echo "
                            <div class='collapse navbar-collapse  ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                    break;

                case 'Products':
                    // Bottone hamburger 
                    include 'btn_hamburger.php';
                    echo "
                            <div class='collapse navbar-collapse  ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                    break;

                case 'About us':
                    // Bottone hamburger 
                    include 'btn_hamburger.php';
                    echo "
                            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mainNav'
                                aria-controls='mainNav' aria-expanded='false' aria-label='Toggle navigation'>
                                <span class='navbar-toggler-icon'></span>
                            </button>
                             <div class='collapse navbar-collapse ' id='mainNav'>
                                <ul class='navbar-nav mx-auto  gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li>
                                  <li class='nav-item'><a class='nav-link' href='./contact.php'>Contact</a></li>";
                    break;

                case 'Contact':
                    // Bottone hamburger 
                    include 'btn_hamburger.php';
                    echo "
                             <div class='collapse navbar-collapse ' id='mainNav'>
                                <ul class='navbar-nav mx-auto gap-4 '>
                                  <li class='nav-item'><a class='nav-link' href='./index.php'>Home</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./Products.php'>Products</a></li> 
                                  <li class='nav-item'><a class='nav-link' href='./About us.php'>About us</a></li>";
                    break;
            endswitch;


            switch ($page):                  // PER NON AVERE BTN LOGIN E SING-UP
                case 'HomeDBMS':

                    echo "                                        <!-- Bottoni a destra -->
                                        <div class='d-flex ms-auto'>
                                           <a href='../Muster_Web/index.php'> <button type='button' class='btn btn-outline-primary'>  Muster Website </button></a>
                                        </div>
                                       
                                    </div>
                                </div>
                            </nav>";
                    break;

                case 'Home':
                case 'Products':
                case 'About us':
                case 'Contact':
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
                case 'Diary':
                    echo "  </div>
                                </div>
                            </nav>";
                    break;
                case 'Diary1':
                    echo "  </div>
                                </div>
                            </nav>";
                    break;
            endswitch;
        }
        ?>
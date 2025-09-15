<?php
function topnav($page)
{
    echo"<nav class='navbar  navbar-expand-lg bg-dark border-bottom border-body ' data-bs-theme='dark' style='margin-bottom: 20vh;'>";
        echo"<div class='row container-fluid '>";
            //     Logo 
                echo"<div class='col-2'>";
                    echo"<img class='img' src='./img/LogoPanificio 1.png' alt='Logo' >";//  width="100" height="50"
                    ///!!!!!!!!!!!!!!!!!!!! regolare url del logo
                echo"</div>";
                
                //    Bottone hamburger 
                echo"<div class='col-8 d-flex justify-content-center '>";
                    echo"<button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#mainNav'
                    aria-controls='mainNav' aria-expanded='false' aria-label='Toggle navigation'>";
                    echo"<span class='navbar-toggler-icon'></span>";
                    echo"</button>";

                ///                Menu + Bottoni (collassabili) 
                    echo"<div class='collapse navbar-collapse ' id='mainNav'>";
                        echo"<div class='container-fluid d-flex justify-content-center'>";
                            echo"<ul class='navbar-nav gap-5'>";


                            switch ($page) {
                                case 'HomeAdmin':
                                    echo "<li class='nav-item'><a class="nav-link" href='./Delete.php'>Delete</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Insert.php'>Insert</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Update.php'>Update</a></li>";
                                    break;

                                case 'Delete':
                                    echo "<li class='nav-item'><a class="nav-link" href='./Home.php'>Home</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Insert.php'>Insert</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Update.php'>Update</a></li>";
                                    break;

                                case 'Insert':
                                    echo "<li class='nav-item'><a class="nav-link" href='./Home.php'>Home</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Delete.php'>Delete</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Update.php'>Update</a></li>";
                                    break;

                                case 'Update':
                                    echo "<li class='nav-item'><a class="nav-link" href='./Home.php'>Home</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Delete.php'>Delete</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href='./Insert.php'>Insert</a></li>";
                                    break;

                                case 'Home':
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Products</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>About us</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Contact</a></li>";
                                    break;
                                
                                case 'About us':
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Home</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Products</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Contact</a></li>";
                                    break;

                                case 'Contact':
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Home</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>Products</a></li>";
                                    echo "<li class='nav-item'><a class="nav-link" href=''>About us</a></li>";
                                    break;
                                }

                                              
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottoni a destra su desktop -->
            <div class="col-2 col-md-3 d-flex justify-content-center">
                <!--<div class="container-fluid col-md-3 d-flex justify-content-end ">-->
                <a class="btn btn-outline-primary me-2" href="./log-in_User.html" role="button">Login</a>
                <a class="btn btn-primary" href="Sing up.html" role="button">Sign-up</a>
            </div>

        </div>
    </nav>
                           
}


?>


  
              

                

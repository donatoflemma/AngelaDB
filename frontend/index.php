<?php              // HEADER//
 include './../backend/include/header.php';
        NamePage('log-in') ; ?>



          <div class="container-fluid d-flex justify-content-center " >
                          <div class="row mt-5 " >
                                              <div class="col-8 d-none d-md-block p-4 d-flex justify-content-center vh-50" style="background-color: rgb(240, 226, 169);">
                                                <img class="img-fluid vh-100" src="../Muster_Web/img/Hero.png" alt="image not found" >
                                              </div>

                                              <div class="col-12 col-md-4 pb-5 d-flex  align-items-center flex-column " style="background-color: rgb(240, 226, 169);">

                                                                  <img class="img-fluid" src="../Muster_Web/img/LogoPanificio 1.png" alt="image not found" style="width: 60%;margin-bottom: 30%;margin-top: 20%;">
                                                                  
                                                                    <form class="p-5 p-md-5 "style="height: 30%;width: 80%;  border-radius: 3%; background-color:rgb(175, 134, 28);"  method="POST" action="../backend/Query_SQL/PHP_Log-in.php" > 
                                                                        <div class="form-floating mb-3" > 
                                                                          <input type="text" class="form-control" id="username" name="username"> 
                                                                          <label for="username">username</label> 
                                                                        </div> 
                                                                        <div class="form-floating mb-3"> 
                                                                          <input type="password" class="form-control" id="pwd" name="pwd"> 
                                                                          <label for="pwd">Password</label> 
                                                                        </div> 
                                                                        <button class="w-100 btn btn-lg btn-primary" type="submit" >Log in</button>  
                                                                    </form> 
                                                </div>

                          </div>

          </div>
<?php include'./../backend/include/footer.php';
    footerType('1');
?>
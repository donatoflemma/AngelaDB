<?php              // HEADER//
 include '../backend/include/header.php';
        NamePage('log-in') ; ?>



          <div class="container-fluid d-flex justify-content-center " >
                          <div class="row mt-5 " >
                                              <div class="col-8 d-none d-md-block p-4 d-flex justify-content-center vh-50" style="background-color: rgb(240, 226, 169);">
                                                <img class="img-fluid vh-100" src="./img/Hero.png" alt="image not found" >
                                              </div>

                                              <div class="col-12 col-md-4 pb-5 d-flex  align-items-center flex-column " style="background-color: rgb(240, 226, 169);">

                                                                  <img class="img-fluid" src="../frontend/img/LogoPanificio 1.png" alt="image not found" style="width: 60%;margin-bottom: 30%;margin-top: 20%;">
                                                                  
                                                                    <form class="p-5 p-md-5 "style="height: 30%;width: 80%;  border-radius: 3%; background-color:rgb(175, 134, 28); " > 
                                                                        <div class="form-floating mb-3" > 
                                                                          <input type="email" class="form-control" id="Email" placeholder="name@example.com"> 
                                                                          <label for="Email">Email address</label> 
                                                                        </div> 
                                                                        <div class="form-floating mb-3"> 
                                                                          <input type="password" class="form-control" id="Password" placeholder="Password"> 
                                                                          <label for="Password">Password</label> 
                                                                        </div> 
                                                                        <div class="checkbox mb-3"> 
                                                                          <label style="color: rgb(255, 249, 249) !important;">  
                                                                          <input type="checkbox" value="remember-me"> Remember me
                                                                          </label > 
                                                                        </div> 
                                                                        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button> 
                                                                        <hr class="my-4" style="color: rgb(255, 249, 249) !important;">  
                                                                        <small class="text-body-secondary " style="color: rgb(255, 249, 249) !important;">By clicking Sign up, you agree to the terms of use.</small> 
                                                                      </form> 
                                                </div>

                          </div>

          </div>
<?php include'../backend/include/footer.php';
    footerType('1');
?>





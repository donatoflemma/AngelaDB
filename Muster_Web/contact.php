<?php              // HEADER//
include '../backend/include/header.php';
NamePage('Contact'); ?>

<?php            // TOP NAV //
include '../backend/include/topnav.php';
topnav('Contact'); ?>



<div class="container text-center "><!--style="background-image:url(../Muster_Web/img/Contact.png);"-->
    <form class="p-5 p-md-5 " style="height: 30%;width: 80%;  border-radius: 3%; background-color:rgb(175, 134, 28); ">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="Email" placeholder="name@example.com">
            <label for="Email">Email address</label>
        </div>

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="Email" placeholder="name@example.com">
            <label for="Email">Name</label>
        </div>

        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="Password" placeholder="Password">
            <label for="Password">Telefon</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="Password" placeholder="Password">
            <label for="Password">comment</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
    </form>
</div>

</div>

<?php include '../backend/include/footer.php' ;
footerType('2');?>
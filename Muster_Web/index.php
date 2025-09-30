<?php
$title= 'Home';              // HEADER//
include '../backend/include/header.php';
?>

<?php            // TOP NAV //
include '../backend/include/topnav.php';
        topnav('Home');?>






<!--####### Central part #########-->
<div class="container  text-center">
    <div class="row mb-5">
        <div class="col-12 col-lg-6 d-flex justify-content-center">
            <img class="img-fluid" src="./img/Hero.png" alt="not found">

            <!--Cliccando, la pagina scorre fino al div con id="contatti" È solo un´esempio
            #################    OPPURE    #####################
            <button class="btn btn-primary" onclick="document.getElementById('contatti').scrollIntoView({behavior: 'smooth'});">
                Vai a Contatti
            </button>
            NOTARE onclick di JavaScript !!!!!!!!-->
        </div>

        <div class="col-lg-6 d-flex flex-column justify-content-center mt-5">

            <p class="lead pb-5 fw-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                Hic error, facere, quod earum ratione facilis accusamus inventore
                doloribus est quae atque quibusdam, impedit ut velit nobis optio corporis asperiores corrupti.</p>

            <p class="lead pb-5 fw-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                Hic error, facere, quod earum ratione facilis accusamus inventore
                doloribus est quae atque quibusdam, impedit ut velit nobis optio corporis asperiores corrupti.</p>

            <p class="lead fw-semibold">Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br>
                Hic error, facere, quod earum ratione facilis accusamus inventore
                doloribus est quae atque quibusdam, impedit ut velit nobis optio corporis asperiores corrupti.</p>

        </div>
    </div>
    <div class="row text-center " style="margin-top: 20vh;" id="FirstH1">
        <h1 class="display-1 bw-bold"><strong>Unsere Produkte</strong></h1>
    </div>



    <div class="row  d-flex justify-content-around text-center  ">
        <div class="col-12 col-lg-3 mt-5 d-flex justify-content-center">
            <div class="card" style="width: 100%" id="card">
                <img src="./img/Pane.jpg" class="card-img-top  mb-5" alt="not found" style="height: 100%;">
                <div class="card-body mb-3">
                    <h5 class="card-title"><strong>Lorem ipsum</strong></h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Hic error, facere, quod earum ratione facilis accusamus
                        inventore doloribus est quae atque
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 mt-5 d-flex justify-content-center">
            <div class="card" style="width: 100%">
                <img src="./img/focaccia al taglio .png" class="card-img-top  mb-5" alt="not found"
                    style="height: 100%;">
                <div class="card-body mb-3">
                    <h5 class="card-title"><strong>Lorem ipsum</strong></h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Hic error, facere, quod earum ratione facilis accusamus
                        inventore doloribus est quae atque
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 mt-5 d-flex justify-content-center">
            <div class="card" style="width: 100%">
                <img src="./img/dolci.png" class="card-img-top  mb-5" alt="not found" style="height: 100%;">
                <div class="card-body mb-3">
                    <h5 class="card-title"><strong>Lorem ipsum</strong></h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Hic error, facere, quod earum ratione facilis accusamus
                        inventore doloribus est quae atque
                    </p>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 mt-5 d-flex justify-content-center">
            <div class="card" style="width: 100%">
                <img src="./img/prodotti secchi .png" class="card-img-top mb-5" alt="not found" style="height: 100%;">
                <div class="card-body mb-3">
                    <h5 class="card-title"><strong>Lorem ipsum</strong></h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Hic error, facere, quod earum ratione facilis accusamus
                        inventore doloribus est quae atque
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary btn-lg mt-5" href="./Products.html" role="button">Lorem ipsum dolor sit</a>


    <div class="row d-flex justify-content-center gap-5" style="margin-top: 10vh;">
        <h1 class="display-1 bw-bold"><strong>Wo wir sind</strong></h1>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12115.305373497971!2d16.963246211836697!3d40.611654930060794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1spineta%20di%20palagianello%20!5e0!3m2!1sit!2sde!4v1757586961472!5m2!1sit!2sde"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>




<?php include'../backend/include/footer.php';
    footerType('2');
?>



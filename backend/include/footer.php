<?php
function footerType($tipe){
    switch($tipe):
        case '1':
            echo "
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI'
                crossorigin='anonymous'></script>
                </body>
                </html>";
            break;

        case '2':
            echo "
                <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js'
                integrity='sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI'
                crossorigin='anonymous'></script>

                <div class='container-fluid mt-5 bg-dark'>
                    <div class='row justify-content-center align-items-center text-center'>

                        <!-- Logo -->
                        <div class='col-4 d-flex justify-content-center'>
                            <img src='./img/LogoPanificio 1.png' alt='not found'>
                        </div>

                        <!-- Info -->
                        <div class='col-4 d-flex justify-content-around'>
                            <div>
                                <h1 class='text-light'>Kontakt</h1>
                                <h6 class='text-light'>Muster@gmail.com</h6>
                                <h5 class='text-light'><strong>Telefon:</strong></h5>
                                <h6 class='text-light'>+3900000000000</h6>
                            </div>

                            <div>
                                <h1 class='text-light'>Adresse</h1>
                                <h6 class='text-light'>Via pincopallino **</h6>
                                <h6 class='text-light'>19048</h6>
                                <h6 class='text-light'>Palagiano</h6>
                            </div>

                            <div>
                                <h1 class='text-light'>Öffnungszeiten</h1>
                                <h6 class='text-light'>Montag - Samstag</h6>
                                <h6 class='text-light'>9:00 Uhr bis 17:00 Uhr</h6>
                            </div>
                        </div>

                        <!-- Link -->
                        <div class='col-4 d-flex flex-column justify-content-center text-center'>
                            <a class='text-decoration-none text-light' href='#'>Impressum</a>
                            <a class='text-decoration-none text-light' href='#'>Datenschutz</a>
                            <a class='text-decoration-none text-light' href='#'>Cookie-Einstellungen</a>
                        </div>
                    </div>
                </div>

                </body>
                </html>";
            break;
    endswitch;
}
?>
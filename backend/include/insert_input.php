<?php
if(isset($_SESSION['table'])){
    $table = $_SESSION['table'];
    switch ($table):
        case 'Dipendenti':
            //Cognome (VAR),Nome (VAR),Stipendio (dec),Vacanze (int)
            echo"
                <form class='pl-2 d-flex mb-3 mt-3 ' > 
                    <div class='form-floating  mb-3' > 
                        <input type='text' class='form-control' id='Nachname' placeholder='Stefan'> 
                        <label for='Nachname'>Nachname</label> 
                    </div> 

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='text' class='form-control' id='Name' placeholder='Müller'> 
                        <label for='Name'>Name</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Gehalt' placeholder='1.200'> 
                        <label for='Gehalt'>Gehalt</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='UrlaubsTage' placeholder='31'> 
                        <label for='UrlaubsTage'>UrlaubsTage</label> 
                    </div>

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;


        case 'Fornitori':
            //Name (VAR),Telefono (VAR)
            echo"
                <form class='pl-2 d-flex mt-3 ' > 
                    <div class='form-floating  mb-3' > 
                        <input type='text' class='form-control' id='Name' placeholder='Unternehmen Name'> 
                        <label for='Name'>Company name</label> 
                    </div> 

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='text' class='form-control' id='Telefon' placeholder='+4900000000'> 
                        <label for='Telefon'>Telefon</label> 
                    </div>

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;

        case 'Categoria':
            //Name (VAR)
            echo"
                <form class='pl-2 d-flex mt-3 ' > 
                    <div class='form-floating  mb-3'> 
                        <input type='text' class='form-control' id='type' placeholder='type'> 
                        <label for='type'>Type</label> 
                    </div> 

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;

        case 'Prodotti':
            //Name (VAR),Prezzo (dec),Peso (dec)
            echo"
                <form class='pl-2 d-flex mt-3 '> 
                    <div class='form-floating  mb-3' > 
                        <input type='text' class='form-control' id='Name' placeholder='White bread'> 
                        <label for='Name'>Name</label> 
                    </div> 

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Preis' placeholder='0,00'> 
                        <label for='Preis'>Preis</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='weight' placeholder='0,00 kg'> 
                        <label for='weight'>weight</label> 
                    </div>

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;

        case 'Ordini':
            //Data (date),Name (VAR),Quantitá (INT),Costi (dec)
            echo"
                <form class='pl-2 d-flex mt-3 ' > 
                    <div class='form-floating  mb-3' > 
                        <input type='date' class='form-control' id='date' placeholder='DD,MM,YYYY'> 
                        <label for='date'>Date</label> 
                    </div> 

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='text' class='form-control' id='Name' placeholder='Stefan'> 
                        <label for='Name'>Name</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Quantity' placeholder='0000'> 
                        <label for='Quantity'>Quantity</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Costs ' placeholder='00.00'> 
                        <label for='Costs '>Costs </label> 
                    </div>

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;


        case 'Vendite':
            //Name (VAR),Datum (Date),Quantitá (INT),Prezzo (dec)
            echo"
                <form class='pl-2 d-flex mt-3 ' > 
                    <div class='form-floating  mb-3'> 
                        <input type='text' class='form-control' id='Name' placeholder='Name product'> 
                        <label for='Name'>Name product</label> 
                    </div> 

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='date' class='form-control' id='Date' placeholder='DD MM YYYY'> 
                        <label for='Date'>DD MM YYYY</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Number' placeholder='000'> 
                        <label for='Number'>Quantity</label> 
                    </div>

                    <div class='form-floating  mb-3' style='margin-left:2%;'> 
                        <input type='number' class='form-control' id='Preis' placeholder='00.00'> 
                        <label for='Preis'>Preis</label> 
                    </div>

                    <input  type='button' class='btn btn-light' value='Insert' style='width:10%; height:20% ; margin-left:2%;margin-top:1%'> 
                </form>";
            break;
        endswitch;



}
?>
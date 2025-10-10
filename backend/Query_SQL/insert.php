<?php include "../api/db_connection.php";
session_start();
/*  TEORIA SESSION
    session_start();
    $_SESSION['table'] = 'Dipendenti';
    exit;

    quella sessione viene aperta e salvata sul server,
    ma quando poi apri un altro file PHP, quello è un nuovo script che non 
    conosce ancora la sessione a meno che tu non gli dica di “riprenderla” con:
    session_start();

    Se includi (include o require) un file che ha già chiamato session_start(),
    allora non serve richiamarlo, perché è lo stesso processo PHP.

    TEORIA $_POST

    print_r($_POST); // passa ogni parametro passato dal metodo !!!
    $label = array('Nachname','Name','Gehalt','UrlaubsTage');
    ECCO COME PRINTA       Array ( [Nachname] => fgh [Name] => dfgh [Gehalt] => 5 [UrlaubsTage] => 5 [btn] => Insert ) 

*/
if (isset($_POST['btn'])) {
    if (!empty($_POST['btn'])) {
        $table = $_SESSION['table'];
        $POST_key = array_keys($_POST);
        array_pop($POST_key); // elimina l´ultimo items perche é la chiave del submit--> bottone quindi non devi sovrascivere l´array

        $placeholder_items = implode(',', $POST_key);
        $placeholder = implode(',', array_fill(0, (count($_POST) - 1), '?'));
        //$stmt = $conn->prepare("INSERT INTO $table ($placeholder_items) VALUES ($placeholder)");
        $stmt_prova = "INSERT INTO $table ($placeholder_items) VALUES ($placeholder)";
        echo $stmt_prova;
        /*switch ($table) {
            case "Dipendenti":
                $
                $Cognome = $_GET["nameTable"];// non sono sicuro che andra cosi 
                $Nome = $_GET["nameTable"];
                $Stipendio = $_GET["nameTable"];
                $Vacanze = $_GET["nameTable"];

                break;
            case "Fornitori":
                $Name = $_GET["nameTable"];
                $Telefono = $_GET["nameTable"];

                break;
            case "Categoria":
                $Name = $_GET["nameTable"];

                break;
            case "Prodotti":
                $Name = $_GET["Name"];
                $Prezzo = $_GET["Prezzo"];

                break;}


                $stmt->bind_param("ss", $Name, $Prezzo);// da finire perche non so come si dice decimal
                echo "<strong> Isert done !<strong/>";*/

        //$stmt->execute(); //esegue la query*/
    }
}
exit;


?>
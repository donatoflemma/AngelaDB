<?php
// Ricevi i dati
$username = $_POST['username'] ?? '';
$password = $_POST['pwd'] ?? '';

// Puoi fare controlli qui, ad esempio:
if ($username === 'admin' && $password === '1234') {
    // Redirect se login corretto
    header("Location: html.html");
    exit();
    
} else {
    // Redirect a pagina di errore o mostra messaggio
    echo "Credenziali non valide.";
}
echo "Credenziali non valide.";
?>
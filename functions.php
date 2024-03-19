<?php
// Funzione per generare una password casuale
function generateRandomPassword($length) {
    // Caratteri utilizzati per generare la password casuale
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz@#$&*";
    // Variabile per memorizzare la password generata
    $password = '';
    // Ciclo per generare la password carattere per carattere
    for($i = 0; $i < $length; $i++) {
        // Aggiunge un carattere casuale dalla stringa $chars alla password
        $password .= $chars[rand(0, strlen($chars) )];
    }
    // Restituisce la password generata
    return $password;
}

// Controlla se la lunghezza della password è stata specificata nel parametro GET
if(isset($_GET['length'])) {
    // Ottieni la lunghezza della password dalla richiesta GET
    $passwordLength = $_GET['length'];
    // Genera una password casuale utilizzando la funzione generateRandomPassword
    $randomPassword = generateRandomPassword($passwordLength);
} else {
    // Imposta una lunghezza predefinita per la password se non è stata specificata nella richiesta GET
    $passwordLength = 10; // Lunghezza predefinita
    // Genera una password casuale di lunghezza predefinita
    $randomPassword = generateRandomPassword($passwordLength);
}
?>
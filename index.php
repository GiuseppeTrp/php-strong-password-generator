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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random password generator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container bg-black text-light p-5 my-5 ">
        <h1 class="text-center mt-5">Random Password Generator</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="index.php" method="GET" class="mb-3">
                    <div class="input-group">
                        <label for="length" class="input-group-text">Password Length:</label>
                        <input type="number" id="length" name="length" value="<?php echo $passwordLength; ?>" min="10" max="100" class="form-control">
                        <button type="submit" class="btn btn-outline-success">Generate Random Password</button>
                    </div>
                </form>
            </div>
        </div>
        
        <?php if(isset($randomPassword)) { ?>
            <div class="row justify-content-center mt-5 text-white">
                <div class="col-md-6">
                    <h2 class="text-center">Your random password:</h2>
                    <p class=" password lead text-center fw-bold text-success bg-white rounded p-2"><?php echo $randomPassword; ?></p>
                </div>
            </div>
        <?php } ?>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>




<style>
    .password:hover{
        cursor:pointer;
        text-decoration: underline yellow;
    }

</style>
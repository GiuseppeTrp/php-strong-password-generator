<?php
// Include il file functions.php
include 'functions.php';
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
                    <p class=" password lead text-center fw-bold text-success bg-white rounded p-3 overflow-auto"><?php echo $randomPassword; ?></p>
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
    .password::-webkit-scrollbar {
            height: 5px; /* Larghezza della barra di scorrimento */
        }
        .password::-webkit-scrollbar-track {
            background: #f1f1f1; /* Colore dello sfondo della barra di scorrimento */
        }
        .password::-webkit-scrollbar-thumb {
            background: #888; /* Colore del cursore della barra di scorrimento */
            border-radius: 5px; /* Rende i bordi del cursore arrotondati */
        }
        .password::-webkit-scrollbar-thumb:hover {
            background: #555; /* Cambia il colore del cursore della barra di scorrimento al passaggio del mouse */
        }

</style>
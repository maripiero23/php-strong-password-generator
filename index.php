<?php
session_start();

include_once dirname(__FILE__)."/function.php";

// salutare();



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasswordGenerator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="bg-primary">
    <div class="container">

        <div class="row justify-content-center ">
            <div class="col-6">
                <h1 class="text-center mt-3">Boolean Password Generator</h1>
                <h3 class="text-center text-white">Genera una password sicura</h3>

                <div class="alert alert-info text-center" role="alert">
                <?php
                 if(isset($_GET["numeropass"])) {
                    echo getRandomPassword($_GET["numeropass"]);
                 }
                
                
                
                ?>
                </div>
                
            </div>
            

        </div>

    </div>

    <div class="container bg-white rounded">
        <div class="d-flex justify-content-around">
            <div class="my-3">
                Lunghezza password

            </div>

            <form action="index.php" method="GET">
                <div class="me-3 my-3">
                    <input type="text" class="form-control" name="numeropass">
                </div>

                <div class="buttons-container d-flex justify-content-center">
                    <button type="submit" class="btn btn-success my-3  mx-2">invio</button>
                    <button type="reset" class="btn btn-danger my-3 mx-2">reset</button>
        
                </div>

                



            </form>

        </div>


    </div>

</body>

</html>
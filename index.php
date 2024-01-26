<?php 

    include __DIR__.'/partials/functions.php';

    $passLen = $_GET['passLen'];
    $characters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $upperCharacters = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $numbers = [0,1,2,3,4,5,6,7,8,9];
    $symbols = ['.',',','-','_',':',';','<','>','?','!'];
    
    
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <form action="./index.php" method="get">
                        <label for="my-pass" class="ms-5 mb-3">Lunghezza della tua nuova password</label>
                        <input type="text" inputmode="numeric" pattern="\d*" name="passLen" id="length" placeholder="Inserisci la lunghezza della password" class="form-control w-50 ms-5">
                        <button type="submit" class="btn btn-success ms-5 mt-3">Genera</button>
                    </form>
                    <h2 class="text-center">La tua nuova password</h2>
                    <div class="box">
                        <p class="mb-0 text-center">
                            <?php
                                echo generatePassword($passLen, $characters, $upperCharacters, $numbers, $symbols);
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
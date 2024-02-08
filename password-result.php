<?php
    session_start();

    $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Password Generator</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        
        
        <!-- Font Awesome Icons-->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="css/12-col.css"> -->
        <link rel="stylesheet" href="css/style.css">

        <!-- Vue JS -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>

    <body>
        <div class="container d-flex justify-content-center mt-5">
            <?php
                if(strlen($password) > 0){
            ?>
            <div class="d-flex flex-column align-items-center">
                <h2 class="text-center mt-4">
                    La tua password random è:
                </h2>
                <h1>
                    <strong>
                        <?php
                            echo $password;
                        ?>
                    </strong>
                </h1>

                <button class="btn btn-dark p-2 mt-3">
                    <a href="./index.php" class="text-white text-decoration-none">
                        Torna al generatore di password
                    </a>
                </button>
            </div>
            <?php
                }
            ?>
        </div>

        <!-- JS -->
        <!-- <script src="js/script.js" type="text/javascript"></script> -->

    </body>
</html>
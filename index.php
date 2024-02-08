<?php
    require __DIR__.'/functions.php';

    $password = '';
    if (isset($_POST['password'])){
        $passwordLength = intval($_POST['password']);

        $password = randomPasswordGenerator($_POST['password']);
    }
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
        
       <div class="container">
            <h1 class="text-center pt-5 fw-bold">
                PHP Password Generator
            </h1>

            <form action="" method="POST" class="row">
                <div class="col text-center mt-4">
                    <label for="password">
                        Lunghezza della tua password
                    </label>
                    <input type="number" class="form-control mt-4" id="password" name="password" placeholder='Quanto deve essere lunga la tua password?' required min="4" max="15">
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-primary" type="submit">
                        Genera la mia password
                    </button>
                </div>

                <?php
                    if(strlen($password) > 0){
                ?>
                <h3 class="text-center mt-4">
                    La tua pasword random è:
                    <strong>
                        <?php
                            echo $password;
                        ?>
                    </strong>
                </h3>
                <?php
                    }
                ?>

            </form>
       </div>

        <!-- JS -->
        <!-- <script src="js/script.js" type="text/javascript"></script> -->

    </body>
</html>
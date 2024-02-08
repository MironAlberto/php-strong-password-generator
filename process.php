<?php
    session_start();

    require __DIR__.'/functions.php';

    $password = '';
    if (isset($_POST['password'])){
        $passwordLength = intval($_POST['password']);

        $password = randomPasswordGenerator($_POST['password']);
    }

    $_SESSION['password'] = $password;

    header('Location: ./password-result.php');
?>
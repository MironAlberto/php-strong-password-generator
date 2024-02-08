<?php
    function randomPasswordGenerator($passwordLength){
        $password = '';

        if($passwordLength >= 4 && $passwordLength <= 15){
            $availableCharacters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!#$%&()*+,-./:;<=>?@[\]^_`{|}~';
            $max = strlen($availableCharacters) - 1;
            $min = 0;

            for($i = 0; $i < $passwordLength; $i++){
                $randomCharacters = $availableCharacters[mt_rand($min, $max)];
                $password .= $randomCharacters;
            }
        }

        return $password;
    }
?>
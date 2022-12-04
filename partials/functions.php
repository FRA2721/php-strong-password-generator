<?php

// password generator function
function generator($password_length)
{
    // avaible characters
    $password_avaible_data = ["abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "0123456789", "*!£%&?-_@$"];

    // init empty password data
    $passwor_generated = "";

    // check if the lenght is major than 0
    if ($password_length > 0) {

        // for loop to generate a random password data
        for ($i = 0; $i < $password_length; $i++) {

            // ramdom characters
            $password_random_chars = rand(0, count($password_avaible_data) - 1);
            $password_random_item = rand(0, strlen($password_avaible_data[$password_random_chars]) - 1);
            $passwor_generated .= $password_avaible_data[$password_random_chars][$password_random_item];
        }
        // password generated
        return $passwor_generated;

    } else {
        return $passwor_generated = "NONE";
    }
}
?>
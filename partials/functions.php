<?php

// create a password generator function
function generator_for_password($password_length)
{
    // avaible characters for the password generator
    $password_chars = ["abcdefghijklmnopqrstuvwxyz", "ABCDEFGHIJKLMNOPQRSTUVWXYZ", "0123456789", "*!?£$%&-_@"];
    
    // init empty password
    $password_generated = "";
    // check if the lenght is major than 0 value (if is empty)
    if ($password_length > 0) {

        for ($i = 0; $i < $password_length; $i++) {
            // the generator select random characters from the default data
            $random_value = rand(0, count($password_chars) - 1);
            $random_chars = rand(0, strlen($password_chars[$random_value]) - 1);
            $password_generated .= $password_chars[$random_value][$random_chars];
        }
        // password generated data
        return $password_generated;
    }
}
?>
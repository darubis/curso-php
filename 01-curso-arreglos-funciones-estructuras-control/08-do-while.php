<?php


// do {
    //     echo "Esto se ejecuta por lo menos una vez";
    // } while (false);

//\/\/\/\/\/\/\\/\/\/\/\\/\/\/\/\/\\//\/\\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\\/\//\
    
$usernames = ["pepito123","Mr.Michi", "RetaxMain"];

do {
    $username = readline ("Por favor, ingresa tu nuevo nombre de usuario: ");
    echo "\n";
}while (in_array($username, $usernames));

echo "\n";
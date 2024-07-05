<?php

// function greet($name){
//     return "Hola, $name";
// }

// echo greet("Italo");

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 


// referencias
$course = "PHP";
function path(&$course){
    $course = "Laravel";
    echo $course; // laravel
}

path($course);
echo $course; // laravel

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 


// predeterminado

function greet($name = 'Italo'){
    return "Hola, $name";
}

echo greet();
echo greet('Abel');
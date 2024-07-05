<?php

// funcion anonima

$greet = function($name){ // una funcion anonima se usa en una variable que requiere logica
    return "Hola, $name";
};

// echo $greet('Italo');

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

// ejemplo 2

function greet2(Closure $lang, $name){
    return $lang($name);
}

$es = function($name){
    return "Hola, $name";
}; // al tratarse de una variable debemos poner el ;


$en = function($name){
    return "Hello, $name";
};


echo greet2($es, "Lynda");
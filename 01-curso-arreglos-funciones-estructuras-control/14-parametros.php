<?php

function suma($a  = 1, $b = 1){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

// suma(5,6);

//\/\/\/\/\/\/\\/\\/\/\//\\/\//\/\\/\/\\/\/\/\\/\/\/\//\/\/\\//\

// Operador de unpacking

$arreglo1 = [1,2,3];
$arreglo2 = [4,5,6];

$resultado = [...$arreglo1,...$arreglo2];

// var_dump($resultado);

//\/\/\/\/\/\/\\/\\/\/\//\\/\//\/\\/\/\\/\/\/\\/\/\/\//\/\/\\//\

function suma1($a,$b){
    echo "La suma de $a + $b es: " . $a + $b . "\n";
}

$numeros = [1,2];
$numeros1 = [50,20];
$numeros2 = [1000,20];

// suma1(...$numeros);
// suma1(...$numeros1);
// suma1(...$numeros2);

//\/\/\/\/\/\/\\/\\/\/\//\\/\//\/\\/\/\\/\/\/\\/\/\/\//\/\/\\//\

function suma_infinita(...$params){
    $suma = 0;
    foreach($params as $numero){
        $suma += $numero;
    }
    echo "La sumatoria es: $suma\n";
}

suma_infinita(1,2);
suma_infinita(1,2,3);
suma_infinita(1,2,3,4);


echo "\n";
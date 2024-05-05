<?php
$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == Igual
var_dump($a == $b); // true

// === Identico
var_dump($a === $b2); //false

// != Diferente
var_dump($a != $b); // false

// Diferente
var_dump($a !== $b2); // true

// <  menor que
var_dump($a < $b); // 5 < 5 false
var_dump($d < $c); // 9 < 2 true

// > mayor que
var_dump($a < $b); // 5 > 5 false

// operador de nave espacial <=>,  va a devolver -1 si el numero que esta a la izquierda
// es menor que el numero que esta a la derecha
// si los dos numeros son iguales a va a devolver 0
// Si el numero que esta a la izquierda e mayor que el que esta a la derecha va devolver
// 1
echo 2 <=> 1; // 1
echo 1 <=> 1; // 0
echo -50 <=> 1; // -1

// ?? fusion de null
$edad_de_pepito = 23;

// si no esta la edad de juanito no esta definido entonces muestra la edad de pepito
echo $edad_de_juanito ?? $edad_de_pepito;

echo "\n";
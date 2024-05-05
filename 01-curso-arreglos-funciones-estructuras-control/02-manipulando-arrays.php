<?php
// consultar todas las funciones para arreglos.
// https://www.php.net/manual/es/ref.array.php

$edades = [18,22,40,34];

// count
echo count($edades); // 4

// array_push, anadir algun dato al final del arreglo
array_push($edades, 13);
var_dump($edades);

// is_array, verificar si es un arreglo
$esto_no_arreglo = "";

var_dump(is_array($esto_no_arreglo));
var_dump(is_array($edades));

// explode, convertir un string en un array
$lista_de_frutas = "fresa,cereza,manzana";
$lista_de_frutas_array = explode(",", $lista_de_frutas);

var_dump($lista_de_frutas_array);


// implode, convertir un array en strings
$implode_lista_de_frutas_array = implode(",",$lista_de_frutas_array);
var_dump($implode_lista_de_frutas_array);

echo "\n";
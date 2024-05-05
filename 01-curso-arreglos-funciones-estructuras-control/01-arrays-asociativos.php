<?php

$edades = array(
    "Carlos" => 20,
    "Mr.Michi" => 18,
    "Juan" => 40, //esta comma es opcional
);

echo "La edad de Mr.Michi es " . $edades["Mr.Michi"] . "\n";

//\/\/\/\/\//\/\/\\/\/\/\/\/\/\/\/\/\/\/\\\/\/\\/\/\/\/\/\/\/\/\/\\/\/\//\/\/\/\/

$cafes = array(
    "Capuchino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

echo "El precio del cafe americano es de {$cafes['Americano']} \n";

//\/\/\/\/\//\/\/\\/\/\/\/\/\/\/\/\/\/\/\\\/\/\\/\/\/\/\/\/\/\/\/\\/\/\//\/\/\/\/

// arrays asociativos
$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Santana",
    ),
    "Mr.Michi" => array(
        "edad" => 18,
        "apellido" => "Michisancio",
    ),
);

echo "La informacion de Mr.Michi es: Edad: " . $personas["Mr.Michi"]["edad"] . " Apellido: " . $personas["Mr.Michi"]["apellido"];

echo "\n";
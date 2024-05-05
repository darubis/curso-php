<?php

$tiendita_de_cafes = array(
    "Americano" => 20,
    "Late" => 25,
    "Recalentado" => 10,
    "Capucciono" => 27.5,
    "Mocca" => 24
);

// Ejemplo de break

// foreach($tiendita_de_cafes AS $cafe => $precio){

//     echo "Actualmente encontre al cafe $cafe \n";

//     if ($cafe == "Late"){
//         echo "Encontramos a Latte!";
//         break;
//     }
// }

//\/\/\/\/\/\/\\/\/\/\/\\/\/\/\/\/\\//\/\\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\\/\//\

// Ejemplo con continue

foreach($tiendita_de_cafes AS $cafe => $precio){

    if ($cafe == "Recalentado"){
        continue;
    }

    echo "El cafe $cafe es muy rico \n";


}

echo "\n";
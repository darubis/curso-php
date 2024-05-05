<?php

$asientos_disponibles = -4;
$es_hijo_de_tom_holland = false;

// if ($asientos_disponibles > 0){
//     echo "Puedes ver la pelicula de Spidey";
// }else{
//     echo "Lo sentimos, te tocara spolearte";
// }

if ($asientos_disponibles > 0)
    echo "Puedes ver la pelicula de Spidey";
else if ($es_hijo_de_tom_holland == true)
    echo "No te creo, pero puedes ver la pelicula";
else
    echo "Lo sentimos, te tocara spolearte";

echo "\n";
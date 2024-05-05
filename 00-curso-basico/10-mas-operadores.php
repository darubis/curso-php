<?php
// operador de asignacion
$edad_de_juanito = ($edad_de_pepito = 18) + 5;

echo "La edad de pepito es $edad_de_pepito\n";
echo "La edad de juanito es $edad_de_juanito\n";

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

// operadores de incremento
$contador = 1;
// $contador = $contador + 1;
// $contador += 1;
$contador++;

echo "$contador\n";

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

/*
+=
-=
*=
/=

*/

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

$nombre = "Carlos";
// $nombre = $nombre . " " . "Santana";
$nombre .= " " . "Santana";

echo $nombre;

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

$contador1 = 1;
++$contador1;
echo $contador1;
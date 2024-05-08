<?php

// Funciones matematicas en php

// encontrar el numero maximo
echo max(9,4,3,2) . "\n";

// encontrar el numero minimo
echo min(9,4,3,2) . "\n";

// obtener el numero aleatorio
echo rand(40,100) . "\n";

// obtener raiz cuadrada
echo sqrt(5) . "\n";

// redondear un numero hacia el entero mas cercano
$num = 3.9;
echo floor($num) . "\n"; // Salida: 3

// redondear un numero hacia arriba
$num = 3.1;
echo ceil($num) . "\n"; // Salida: 4


// redondear un numero
$num = 3.7;
echo round($num) . "\n"; // Salida: 4

echo "\n";

?>
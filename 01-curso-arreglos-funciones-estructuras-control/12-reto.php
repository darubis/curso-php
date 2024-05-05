<?php

$numero_de_tiendas = 8;
$anterior = 0;
$actual = 1;

for ($i = 2; $i <= $numero_de_tiendas; $i++){
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

}
echo "Hay $actual formas distintas de llegar";

echo "\n";
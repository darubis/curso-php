<?php

$contador = 1;

// primero asigna y luego incrementa
$resultado = $contador++; // 1

echo $resultado;
echo "\n";

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

// Tiene asociatividad de izquierda
// echo 1 - 2 - 3 - 4;


//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

// Tiene asociatividad derecha
// $b = 5;
$c = 10;
// Primero se evalua lo de la derecha
$a = $b = $c;

echo $a; // da 10

echo "\n";

//\/\/\/\\/\\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/

$gatos_4_patas = true;
$gatos_programan_en_php = false;

$result = $gatos_4_patas and $gatos_programan_en_php;

var_dump($result);



echo "\n";
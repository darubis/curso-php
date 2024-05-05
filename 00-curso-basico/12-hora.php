<?php
$segundos = readline("Ingresa el tiempo en segundos: ");

// sacar la cantidad de horas
$horas = (int) ($segundos / 3600);

// verificar cuantos segundos sobran. Es decir, quedan faltando para la proxima hora 
$segundos = (int) ($segundos % 3600);

// sacar la cantidad de minutos
$minutos = (int) ($segundos / 60);

$segundos = (int) ($segundos / 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos";

echo "\n";
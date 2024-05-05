<?php
// reto realizado por mi cuenta
$horas = readline("Ingresa el tiempo en horas: ");
$minutos = readline("Ingresa el tiempo en minutos: ");
$segundos = readline("Ingresa el tiempo en segundos: ");

// convertir horas en segundos
$segundos1 = (int) ($horas * 3600);

// convertir minutos en segundos
$segundos2 = (int) ($minutos * 60);

// Sumar todas las conversiones

$resultado = $segundos + $segundos1 + $segundos2;

echo "El total de segundos para $horas horas con $minutos minutos y $segundos segundos es => $resultado";

echo "\n";
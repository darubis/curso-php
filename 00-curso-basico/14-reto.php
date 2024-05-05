<?php
// ejercicio realizado por el instructor
$horas = readline("por favor, ingresa el tiempo en horas: ");
$minutos = readline("por favor, ingresa el tiempo en minutos: ");
$segundos = readline("por favor, ingresa el tiempo en segundos: ");

$tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

echo "Este tiempo equivale a $tiempo_en_segundos segundos. \n";
<?php

// reto realizado por mi

$dinero_donado = readline("Cuanto dinero tienes ");

if ($dinero_donado >= 100)
    echo "Felicidades, toma tu dinero :)";
else
    echo "Lo siento, aun no tienes suficiente dinero para retirar";

echo "\n";


// reto por el profesor

$cantidad_donada = readline("Por favor, Ingresa la cantidad de donaciones acumulada que tienes ");

if ( $cantidad_donada >= 100){
    echo "Tu retiro esta en progreso";
}else{
    echo "Lo sentimos, solo puedes retirar despues de los 100 dolares acumulados";
}

echo "\n";
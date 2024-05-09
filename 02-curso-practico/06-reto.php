<?php

function clasificacion_por_edad($edad){

    $resultado = "";
    if($edad < 5){
        $resultado = "El estudiante con 4 anos tendra sus juguetes en la parte inferior de la bodega.";
    } else if ($edad >= 5 && $edad < 7) {
        $resultado = "El estudiante con 6 anos tendra sus juguetes en la parte media de la bodega.";
    } else if ($edad >= 7 && $edad < 15) {
        $resultado = "El estudiante con 10  anos tendra sus juguetes en la parte inferior de la bodega.";
    } else {
        $resultado = "Ya no eres un estudiante, tu edad excede el limite de edad";
    }
    return $resultado;
}

echo clasificacion_por_edad(4);
echo "\n";
?>
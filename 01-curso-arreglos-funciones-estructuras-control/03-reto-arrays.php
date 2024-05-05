<?php

// Creación de la estructura de datos para la escuela de gatos
$escuela_michis = array(
    "gato1" => array(
        "nombre" => "Santana",
        "color" => "purple",
        "comidas" => array(
            "comidas_favoritas" => array(
                "pasta",
                "purina",
                "arroz"
            ),
            "comidas_no_favoritas" => array(
                "murcielagos",
                "pajaros",
                "lentejas"
            )
        )
    ),
    // Segundo gato
    "gato2" => array(
        "nombre" => "Santana",
        "color" => "purple",
        "comidas" => array(
            "comidas_favoritas" => array(
                "pollo",
                "purina",
                "arroz"
            ),
            "comidas_no_favoritas" => array(
                "murcielagos",
                "pajaros",
                "lentejas"
            )
        )
    ),
    // Tercer gato
    "gato3" => array(
        "nombre" => "Santana",
        "color" => "purple",
        "comidas" => array(
            "comidas_favoritas" => array(
                "ratones",
                "purina",
                "arroz"
            ),
            "comidas_no_favoritas" => array(
                "murcielagos",
                "pajaros",
                "lentejas"
            )
        )
    )
);


// codigo del profesor
$escuela = array(

    array(
        "Nombre" => "Michijose",
        "Ocupaccion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas" => "Lasana,Atun",
            "NoFavoritas" => "Fresas,Cacahuates"
            )
        ),

    array(
        "Nombre" => "Michisancio",
        "Ocupaccion" => "jQuery Developer",
        "Color" => "Blanco con manchitas negras",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
            )
        ),
    
    array(
        "Nombre" => "Mr.Michi",
        "Ocupaccion" => "Pro en PHP",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pescado,Pollo",
            "NoFavoritas" => "Atun,Cacahuates"
            )
        ),
);

// obtener las comidad favorita de michisancio

$michisancio = $escuela[1];

echo "Las comidas favoritas de Michisancio son: " . $michisancio['Comidas']['Favoritas'] . "\n";

// obtener el color de Mr.Michi
$mr_michi = $escuela[2];
echo "El color favorito de Mr.Michi es " . $mr_michi['Color'];

echo "\n";
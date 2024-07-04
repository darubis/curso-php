<?php

// Alterar
$text = "PHP es UN LENGUAJE";

// poner en minuscula
echo strtolower($text);

// poner en mayuscula
echo strtoupper($text);

// poner la primer letra en mayuscula
echo ucfirst($text);

// poner la primer letra en minuscula
echo lcfirst($text);

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

// Reemplazar
$slug = str_replace(' ', '-', $text);
echo strtolower($slug);


//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

// Modificacion
$code = 39;
echo str_pad($code, 8, '#');
echo str_pad($code, 8, '#', STR_PATH_BOTH);


//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 


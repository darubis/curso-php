<?php

echo 'un texto de una linea
varias lineas
comilla simple \' backslash \\ continuar con mas texto $variable';

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

$name = 'italo';
echo "\nMi nombre es $name";

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo "\n{$courses['backend'][0]}";

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

class User{
    public $name = 'italo';
}

$user = new User;
echo "$user->name";

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

$teacher = 'italo';
$italo = 'Profesor de PHP';
echo "$teacher es ${teacher}";

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

function getTeacher(){
    return 'teacher';
}

$teacher = 'Italo';
echo "${getTeacher()} ensena PHP";
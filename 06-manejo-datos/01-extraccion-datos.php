<?php

$data = 'Estudio PHP';
// echo $data{0};

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 


$post = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita vel, fugit aliquam nostrum, ab placeat qui alias quasi ipsa debitis, delectus laborum veritatis commodi illum totam ipsam velit obcaecati eos?";

$extract = substr($post, 0, 20);
echo "$extract... [ver mas]";

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

$data = 'javascript, php, laravel'; // campo tags
$tags = explode(', ', $data); // array
echo "<pre>";
var_dump($tags);

//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 


$courses = ['javascript', "php", "laravel"];
echo implode(', ', $courses);


//\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\\/\/\/\/\/ 

$course = "   Curso de PHP    ";
$course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";
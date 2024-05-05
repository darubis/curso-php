<?php
$gatos_felinos = true;
$gatos_4_patas = true;
$gatos_vuelan = false;
$gatos_programan_con_php = false;

// and

var_dump($gatos_felinos && $gatos_4_patas); // true
var_dump($gatos_felinos && $gatos_vuelan); // false

// or
var_dump($gatos_felinos || $gatos_vuelan); // true

// not
var_dump(!$gatos_felinos); // false

// experimento
$resultado = $gatos_4_patas and $gatos_programan_con_php;
var_dump($resultado); // true

echo "\n";
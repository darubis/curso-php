<?php

$a = true;
$b = false;

if ($a && $b) {
    echo "Ambos son verdaderos";
} elseif ($a || $b) {
    echo "Al menos uno es verdadero";
}

if (!$b) {
    echo "B es falso";
}

?>
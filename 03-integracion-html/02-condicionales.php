<?php

$se_hablo_de_bruno = false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
</head>
<body>

    <h1>Esto no se debe de hacer</h1>
    <?php if($se_hablo_de_bruno){ 
        echo "<b>Sorprendido</b>";
    }else{
        echo "todo esta bien";
    } ?>


    <h1>Esto es aceptable</h1>

    <?php if($se_hablo_de_bruno){ ?>
        <b>sorprendido</b>
    <?php } else  { ?>
        <b>todo esta bien</b>
    <?php } ?>


    <h1>una mejor forma</h1>
<?php if($se_hablo_de_bruno): ?>
    <b>sorprendido</b>
<?php else: ?>
    <b>todo esta bien</b>
<?php endif; ?>
</body>
</html>
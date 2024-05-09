<?php

$nombre = "Mr.Michi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprime texto y etiquetas con php</title>
</head>
<body>
    <?php echo "<b>Hola mama estoy aprendiendo a integrar html con php</b>"; ?>

     <?= "<i>Esta es otra forma de imprimir texto y etiquetas con php</i>"; ?>

     <h1>Hola <?= $nombre;?></h1>
</body>
</html>
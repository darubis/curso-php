<?php

$zorritos = ["https://randomfox.ca/images/1.jpg","https://randomfox.ca/images/2.jpg","https://randomfox.ca/images/3.jpg"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola, Esto es html desde php</h1>

    <?php foreach($zorritos as $zorrito){ ?>
        <img src="<?php echo $zorrito ?>">
    <?php } ?>
</body>
</html>
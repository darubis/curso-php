<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No hagas esto</title>
</head>
<body>
    <h1>tabla del 9</h1>
    <ul>

    <?php

        for ($i = 1; $i < 10; $i++){
            echo "<li>" . "9 x $i = " . (9 * $i) . "</li>";
        }
        ?>
    </ul>
</body>
</html>
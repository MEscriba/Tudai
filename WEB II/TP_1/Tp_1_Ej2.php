<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php
    echo ("<h1> ejercicio de lista dinamica </h1>");
    echo('<ul>');
        for ($i=1; $i<5;$i++){
            echo('<li>');
            echo($i);
            echo('</li>');
        }
    echo('</ul>');
    ?>
</body>
</html>

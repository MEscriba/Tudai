<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
    
    echo ("<h1> mostrando los primeros 5 elementos </h1>");
    echo('<ul>');
        for ($i=1; $i<=5;$i++){
            $cadena5 = "<li>($i)</li>";
            echo($cadena5);
        }
        
    echo('</ul>');
    ?>
<a href="Tp_1_Ej4.php">ver los primeros 5</a>
<a href="cadena10.php">ver los primeros 10</a>
<a href="cadena15.php">ver los primeros 15</a>
</body>
</html>

<?php
    echo ("<h1> mostrando los primeros 10 elementos </h1>");
    echo('<ul>');
        for ($i=1; $i<=10;$i++){
            $cadena10 = "<li>($i)</li>";
            echo($cadena10);
        }

?>

<a href="Tp_1_Ej4.php">ver los primeros 5</a>
<a href="cadena10.php">ver los primeros 10</a>
<a href="cadena15.php">ver los primeros 15</a>
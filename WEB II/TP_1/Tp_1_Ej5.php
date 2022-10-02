<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Ejercicio 5</title>
</head>
<body>

<form action="Tp_1_Ej5.php" method="POST" type>
<label for="">ingrese peso</label>
<input type="text" name="peso">
<label for="">ingrese altura</label>
<input type="text" name="altura">
<div class="col-12">
          <button class="btn btn-primary" type="submit">envio de formulario</button>
 </div>
</form>
<?php
if (empty($_POST["peso"])||($_POST["altura"])){
    echo "</br> <p> debes completar todos los campos </p>";
    return;
}

$peso = $_POST["peso"];
$altura = $_POST["altura"];

echo "<p> el peso es: " .$peso. "</p>";
echo "<p> la altura es: " .$altura. "</p>";

function calculoIMC($peso, $altura){
    $imc = $peso / ($altura * $altura);
    return $imc;
}
echo "<p> el IMC es: " .$peso. "/".($altura*$altura). "=". $imc. "</p>";

if($imc < 18.5){
    echo "<p> ud se encuentra en bajo peso </p>";
} else {
    if($imc >= 25 && $imc <30){
        echo "<p> ud se encuentra en normopeso </p>";
    } 
    else{
        echo "<p> ud se encuentra en sobrepeso </p>";
    }
}

?>
</body>
</html>


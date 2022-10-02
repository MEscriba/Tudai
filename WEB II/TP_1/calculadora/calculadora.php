<?php
if (!is_numeric ($_POST['valor1'])||!is_numeric ($_POST['valor2'])||empty($_POST['operacion'])){
    echo ('ERROR: parametros incorrectos');
    die();
}

$operando1 = $_POST['valor1'];
$operando2 = $_POST['valor2'];
$operacion = $_POST['operacion'];

switch ($operacion){
    case 'sumar':{
        $resultado= $operando1 + $operando2;
        break;
    }
    case 'restar':{
        $resultado= $operando1 - $operando2;
        break;
    }
    case 'multiplicar':{
        $resultado= $operando1 * $operando2;
        break;
    }
    case 'dividir':{
        $resultado= $operando1 / $operando2;
        break;
    }
    default: {
        echo ('operacion no definida');
        break;
    }
}

echo ('el resultado es :'.$resultado);
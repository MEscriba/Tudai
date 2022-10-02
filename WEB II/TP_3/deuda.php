<?php

//consumir la bd desde php
//1 abrir la conexion con la db
//2 ejecutar la consulta sql
//3 obtener datos de la consulta
//4 cerrar la conexion con la db
function getPagos(){
    //1
    $db = new PDO( 'mysql:host=localhost;'.'dbname=db_deudas; charset=utf8', 'root', '');
    //2 - en pdo se hace en dos pasos prepare y execute
    $query= $db->prepare('SELECT*FROM pagos');
    $query->execute();
    //3
    $pagos= $query->fetchAll(PDO::FETCH_OBJ); //devuelve un array con todos los pagos
    return $pagos;
}


$pagos= getPagos();
echo "<ul>";
foreach($pagos as $pago){
    echo "<li> $pago->deudor(cuota: $pago->cuota, fecha de pago; $pago->fecha_pago)</li>";
}
echo "</ul>";
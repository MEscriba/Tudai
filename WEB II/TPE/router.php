<?php
require_once './app/controllers/matchController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'list'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$matchController = new MatchController();


// tabla de ruteo
switch ($params[0]) {
    case 'list':
        $matchController->showUmpires();
        break;
    case 'add':
        $matchController->addUmpire();
        break;
    case 'delete':
        // obtengo el parametro de la acción
        $id = $params[1];
        $matchController->deleteUmpire($id);
        break;
    default:
        echo('404 Page not found');
        break;
}


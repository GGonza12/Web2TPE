<?php
require_once ('Controller/StoreController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$storeController = new StoreController();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        $storeController->showHome(); 
        break;
    case 'CreateGame': 
        $storeController->createGame($_POST['juego'],$_POST['descripcion'],$_POST['precio'],$_POST['empresa']); 
        break;
    case 'deleteGame': 
        $storeController->deleteGame($params[1]); 
        break;
  //  case 'viewGame': 
  //      $storeController->viewGame($id); 
  //      break;
    default: 
        echo('404 Page not found'); 
        break;
}

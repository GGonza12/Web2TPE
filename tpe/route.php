<?php
require_once ('Controller/StoreController.php');
require_once ('Controller/LoginController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$storeController = new StoreController();
$loginController = new LoginController();

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login':
        $loginController->login();
        break;
    case 'logout':
        $loginController->logout();
        break;
    case 'verify':
        $loginController->VefiryLogin();
        break;
    case 'createacount':
        $loginController->SignIn($_POST['user'],$_POST['email'],$_POST['password']);
        break;
    case 'home':
        $storeController->showHome(); 
        break;
    case 'store':
        $storeController->ShowStore();
        break;
    case 'CreateGame': 
        $storeController->createGame($_POST['juego'],$_POST['imagen'],$_POST['categorias'],$_POST['descripcion'],$_POST['precio'],$_POST['empresa']); 
        break;
    case 'deleteGame': 
        $storeController->deleteGame($params[1]); 
        break;
    case 'viewGame': 
        $storeController->viewGame($params[1]); 
        break;
    case 'ShowGamesOfCompany':
        $storeController->showGamesOfCompany($_POST['empresa']);
        break;
    case 'CreateCompany':
        $storeController->CreateEmpresa($_POST['empresa']);
        break;  
    case 'ShowGamesOfCompany':
        $storeController->showGamesOfCompany($params[1]);
        break;
    case 'UpdateViewCompany':
        if ($params[1] == 'UpdateCompany'){
            $storeController->UpdateCompany($_POST['empresa'],$_POST['id']);    
            break;
        }
        else {
            $storeController->ShowUpdateCompany($params[1]);
            break; 
        }
    default: 
        echo('404 Page not found'); 
        break;
}

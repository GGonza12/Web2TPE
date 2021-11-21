<?php
require_once('Controller/StoreController.php');
require_once('Controller/LoginController.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


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
    case 'administrador':
        $loginController->administrador();
     break;
    case'agregarPermiso':
        $loginController->agregerPermiso($params[1]);    
         break;
    case'quitarPermiso':
       $loginController->quitarPermiso($params[1]);   
        break;
    case 'eliminarUsuario':
        $loginController->eliminarUsuario($params[1]);
        break;         
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
        $loginController->SignIn($_POST['user'], $_POST['email'], $_POST['password']);
        $loginController->VefiryLogin();
        break;
    case 'home':
        $storeController->showHome();
        break;
    //STORE:
    case 'store':
        $storeController->ShowStore();
        break;
    case 'CreateGame':
        $storeController->createGame($_POST['juego'], $_POST['imagen'], $_POST['categorias'], $_POST['descripcion'], $_POST['precio'], $_POST['empresa']);
        break;
    case 'deleteGame':
        $storeController->deleteGame($params[1]);
        break;
    case 'viewGame':
        $storeController->viewGame($params[1]);
        break;
    case 'UpdateViewGame':
        $storeController->ShowUpdateGame($params[1]);
        break;
    case 'UpdateGame':
        $storeController->UpdateGame($_POST['id'], $_POST['juego'], $_POST['imagen'], $_POST['categorias'], $_POST['descripcion'], $_POST['precio'], $_POST['empresa']);
        break;
    //COMPANYS:    
    case 'CreateCompany':
        $storeController->CreateEmpresa($_POST['empresa'],$_POST['informacion']);
        break;
    case 'DeleteCompany':
        $storeController->DeleteCompany($params[1]);
        break;
    case 'ShowGamesOfCompany':
        $storeController->showGamesOfCompany($params[1]);
        break;
    case 'UpdateViewCompany':
        $storeController->ShowUpdateCompany($params[1]);
        break;
    case 'UpdateCompany':
        $storeController->UpdateCompany($_POST['empresa'], $_POST['id'],$_POST['informacion']);
        break;
    case 'Companys':
        $storeController->ShowCompanys();
        break;
    default:
        echo ('404 Page not found');
        break;
}

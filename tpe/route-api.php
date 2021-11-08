<?php

require_once 'libs/Route.php';
require_once 'Controller/ApiComentsController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiComentsController', 'ObtenerComentarios');
$router->addRoute('comentario/:ID', 'GET', 'ApiComentsController', 'ObtenerComentario');
$router->addroute('comentario/:ID', 'DELETE','ApiComentsController','EliminarComentario');
$router->addroute('comentario/:ID', 'POST','ApiComentsController','AgregarComentario');
$router->addroute('comentario/:ID', 'PUT','ApiComentsController','ModificarComentario');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

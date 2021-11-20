<?php

require_once 'libs/Route.php';
require_once 'Controller/ApiComentsController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentarios', 'GET', 'ApiComentsController', 'ObtenerComentarios');
//$router->addRoute('juegos', 'GET', 'ApiComentsController', 'ObtenerJuegos');
$router->addroute('comentarios', 'POST','ApiComentsController','AgregarComentario');
$router->addRoute('comentario/:ID', 'GET', 'ApiComentsController', 'ObtenerComentario');
$router->addroute('comentario/:ID', 'DELETE','ApiComentsController','EliminarComentario');
$router->addroute('comentario/puntaje/:ID', 'PUT','ApiComentsController','ModificarPuntaje');
$router->addroute('comentario/puntaje/:ID', 'POST','ApiComentsController','InsertarImagen');
//$router->addroute('comentario/:ID', 'PUT','ApiComentsController','ModificarComentario');
$router->addroute('comentario/juego/:ID', 'GET','ApiComentsController','ObtenerComentariosJuego');

// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);

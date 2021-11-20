<?php

require_once './Model/ComentsModel.php';
require_once './Model/GamesModel.php';
require_once './View/ApiView.php';
require_once './Helpers/AuthHelper.php';


class ApiComentsController
{
    private $modelcoment;
    private $modelgame;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->modelcoment = new ComentModel();
        $this->modelgame = new GamesModel();
        $this->view = new APIView();
        $this->authHelper = new AuthHelper();
    }
    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    function ObtenerComentarios()
    {
        $comentarios = $this->modelcoment->GetComents();
        if (!empty($comentarios)) {
            return $this->view->response($comentarios, 200);
        } else {
            return $this->view->response('No hay comentarios', 404);
        }
    }
    function ObtenerJuegos()
    {
        $juegos = $this->modelgame->GetGames();
        if (!empty($juegos)) {
            return $this->view->response($juegos, 200);
        } else {
            return $this->view->response('No hay comentarios', 404);
        }
    }
    function ObtenerComentario($params = [])
    {
        $id = $params[':ID'];
        $comentario = $this->modelcoment->GetComent($id);
        if (!empty($comentario)) {
            return $this->view->response($comentario, 200);
        } else {
            return $this->view->response("No hay comentario con el id: $id", 404);
        }
    }
    function ObtenerComentariosJuego($params = []){
        $id = $params[':ID'];
        $comentarios = $this->modelcoment->GetComentsByGame($id);
        if (!empty($comentarios)) {
            return $this->view->response($comentarios, 200);
        } else {
            return $this->view->response('No hay comentarios', 404);
        }
        
    }
    function EliminarComentario($params = [])
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $id = $params[':ID'];
        $comentario = $this->modelcoment->GetComent($id);
        if ($rol == true){
            if ($comentario) {
                $this->modelcoment->DeleteComent($id);
                $this->view->response("Comentario con id: $id eliminado con éxito", 200);
            } else {
                $this->view->response("No existe el comentario al que eliminar con id: $id", 404);
            }
        }
        else if ($rol == false){
            $this->view->response("No tiene permitido eliminar el comentario: $id", 401);

        }
    }

    function AgregarComentario()
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $body = $this->getBody();
        $comentario = $body->comentario;
        $puntaje = $body->puntaje;
        $id_juego = $body->id_juego;
        if (($rol == true || $rol == false) && (isset($comentario)&&isset($puntaje)&&isset($id_juego))){
            $id = $this->modelcoment->InsertComent($comentario,$puntaje,$id_juego);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
        }
    }
        else{
            $this->view->response("No tiene permitido comentar.", 401);
        }
    }
//    function ModificarComentario($params = [])
//    {
//        $id = $params[':ID'];
//        $body = $this->getBody();
//        $comentario = $body->comentario;
//        $imagen = $body->imagen;
//        $this->modelcoment->UpdateComent($comentario, $imagen, $id);
//        if ($id != 0) {
//            $this->view->response("El comentario se modifico con exito con el id=$id", 200);
//        } else {
//            $this->view->response("El comentario no se pudo modificar", 500);
//        }
//    }
//    function ModificarPuntaje($params = [])
//    {
//        $id = $params[':ID'];
//        $body = $this->getBody();
//        $puntaje = $body->puntaje;
//        $this->modelcoment->UpdateScore($puntaje, $id);
//        if ($id != 0) {
//            $this->view->response("El puntaje se modifico con exito con el id= $id", 200);
//        } else {
//            $this->view->response("El puntaje no se pudo modificar", 500);
//        }
//    }
}

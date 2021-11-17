<?php

include './Model/ComentsModel.php';
include './Model/GamesModel.php';
include './View/ApiView.php';

class ApiComentsController
{
    private $modelcoment;
    private $modelgame;
    private $view;

    public function __construct()
    {
        $this->modelcoment = new ComentModel();
        $this->modelgame = new GamesModel();
        $this->view = new APIView();
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
        $id = $params[':ID'];
        $comentario = $this->modelcoment->GetComent($id);
        if ($comentario) {
            $this->modelcoment->DeleteComent($id);
            $this->view->response("Comentario con id: $id eliminado con éxito", 200);
        } else {
            $this->view->response("No existe el comentario al que eliminar con id: $id", 404);
        }
    }

    function AgregarComentario()
    {
        $body = $this->getBody();
        $comentario = $body->comentario;
        $imagen = $body->imagen;
        $id_juego = $body->id_juego;
        $id_usuario = $body->id_usuario;
        $id = $this->modelcoment->InsertComent($comentario, $imagen,$id_juego,$id_usuario );
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
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
    function ModificarPuntaje($params = [])
    {
        $id = $params[':ID'];
        $body = $this->getBody();
        $puntaje = $body->puntaje;
        $this->modelcoment->UpdateScore($puntaje, $id);
        if ($id != 0) {
            $this->view->response("El puntaje se modifico con exito con el id= $id", 200);
        } else {
            $this->view->response("El puntaje no se pudo modificar", 500);
        }
    }
}

<?php

include './Model/ComentsModel.php';
include './View/ApiView.php';

class ApiComentsController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new ComentModel();
        $this->view = new APIView();
    }
    private function getBody()
    {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

    function ObtenerComentarios()
    {
        $comentarios = $this->model->GetComents();
        if (!empty($comentarios)) {
            return $this->view->response($comentarios, 200);
        } else {
            return $this->view->response('No hay comentarios', 404);
        }
    }
    function ObtenerComentario($params = [])
    {
        $id = $params[':ID'];
        $comentario = $this->model->GetComent($id);
        if (!empty($comentario)) {
            return $this->view->response($comentario, 200);
        } else {
            return $this->view->response("No hay comentario con el id: $id", 404);
        }
    }
    function EliminarComentario($params = [])
    {
        $id = $params[':ID'];
        $comentario = $this->model->GetComent($id);
        if ($comentario) {
            $this->model->DeleteComent($id);
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
        $id = $this->model->InsertComent($comentario, $imagen);
        if ($id != 0) {
            $this->view->response("El comentario se insertó con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo insertar", 500);
        }
    }
    function ModificarComentario($params = [])
    {
        $id = $params[':ID'];
        $body = $this->getBody();
        $comentario = $body->comentario;
        $imagen = $body->imagen;
        $this->model->UpdateComent($comentario, $imagen, $id);
        if ($id != 0) {
            $this->view->response("El comentario se modifico con exito con el id=$id", 200);
        } else {
            $this->view->response("El comentario no se pudo modificar", 500);
        }
    }
    function ModificarPuntaje($params = [])
    {
        $id = $params[':ID'];
        $body = $this->getBody();
        $puntaje = $body->puntaje;
        $this->model->UpdateScore($puntaje, $id);
        if ($id != 0) {
            $this->view->response("El puntaje se modifico con exito con el id= $id", 200);
        } else {
            $this->view->response("El puntaje no se pudo modificar", 500);
        }
    }
}

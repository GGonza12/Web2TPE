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
        return $this->view->response($comentarios, 200);
    }
    function ObtenerComentario($params = [])
    {
        $id = $params[':ID'];
        $comentario = $this->model->GetComent($id);
        return $this->view->response($comentario, 200);
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
}

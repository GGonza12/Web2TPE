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
        if ($id != null){
            $comentario = $this->modelcoment->GetComent($id);
            if (!empty($comentario)) {
                return $this->view->response($comentario, 200);
            } else {
                return $this->view->response("No hay comentario con el id: $id", 404);
            }
        }
    }
    function ObtenerComentariosJuego($params = []){
        $id = $params[':ID'];
        if ($id != null){
            $comentarios = $this->modelcoment->GetComentsByGame($id);
            if (!empty($comentarios)) {
                return $this->view->response($comentarios, 200);
            } else {
                return $this->view->response('No hay comentarios', 404);
            }
        }
    }
    function EliminarComentario($params = [])
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        $id = $params[':ID'];
        if ($id != null){
            $comentario = $this->modelcoment->GetComent($id);
            if($check == "admin"){
                if ($comentario) {
                    $this->modelcoment->DeleteComent($id);
                    $this->view->response("Comentario con id: $id eliminado con éxito", 200);
                } else {
                    $this->view->response("No existe el comentario al que eliminar con id: $id", 404);
                }
            }
            else if ($check == "comun"){
                $this->view->response("No tiene permitido eliminar el comentario: $id", 401);
            }
        }
    }

    function AgregarComentario()
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $body = $this->getBody();
        $comentario = $body->comentario;
        $puntaje = $body->puntaje;
        $mydate = getdate(date("U"));
        $fecha = "$mydate[year]-$mydate[mon]-$mydate[mday]-$mydate[hours]-$mydate[minutes]-$mydate[mday]-$mydate[seconds]";
        $id_juego = $body->id_juego;
        $id_usuario = $body->id_usuario;
        if (($check == "admin" || $check == "comun") && (isset($comentario)&&isset($puntaje)&&isset($id_juego)&&isset($id_usuario))){
            $id = $this->modelcoment->InsertComent($comentario,$puntaje,$id_juego,$id_usuario,$fecha);
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

}

<?php
require_once 'C:/xampp/htdocs/Web2TPE/tpe/Model/StoreModel.php';
require_once 'C:/xampp/htdocs/Web2TPE/tpe/View/StoreView.php';

class TaskController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new StoreModel();
        $this->view = new StorekView();
    }

    function showHome(){
        $games = $this->model->getGames();
        $this->view->showGames($games);
    }

    function createGame(){

        $this->model->insertGame($_POST['']);
        $this->view->showHomeLocation();
    }

    function deleteGame($id){
        $this->model->deleteGameFromDB($id);
        $this->view->showHomeLocation();
    }
    
    function viewGame($id){
        $game = $this->model->getGame($id);
        $this->view->showGame($game);
    }

}

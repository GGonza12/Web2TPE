<?php
require_once 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\Model\StoreModel.php';
require_once 'C:\xampp\htdocs\webtpe\Web2TPE\tpe\View\StoreView.php';

class StoreController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new StoreModel();
        $this->view = new StoreView();
    }

    function showHome(){
        $games = $this->model->GetGames();
        $this->view->ShowGames($games);
    }

    function createGame($juego,$descripcion,$precio,$empresa){

        $this->model->InsertGame($juego,$descripcion,$precio,$empresa);
        $this->view->ShowHomeLocation();
    }

    //function deleteGame($id){
   //     $this->model->DeleteGameFromDB($id);
   //     $this->view->showHomeLocation();
   // }
    
  //  function viewGame($id){
  //      $game = $this->model->GetGame($id);
  //      $this->view->ShowGame($game);
  //  }

}

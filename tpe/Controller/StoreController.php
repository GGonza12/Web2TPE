<?php
require_once 'C:\xampp\htdocs\Web2TPE\tpe\Model\StoreModel.php';
require_once 'C:\xampp\htdocs\Web2TPE\tpe\View\StoreView.php';

class StoreController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new StoreModel();
        $this->view = new StoreView();
    }

    function showHome(){
        $games = $this->model->GetGames();
        
        $company = $this->model->GetCompanys();
        $this->view->ShowGames($games,$company);
        
    }
    function showGamesOfCompany($id){
        $games = $this->model->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games);
    }

    function createGame($juego,$descripcion,$precio,$empresa){
        $this->model->InsertGame($juego,$descripcion,$precio,$empresa);
        $this->view->ShowHomeLocation();
    }

    function CreateEmpresa($empresa){
        $this->model->InsertCompany($empresa);
        $this->view->ShowHomeLocation();
    }

    function deleteGame($id){
        $this->model->Delete($id);
        $this->view->showHomeLocation();
    }
    
    function viewGame($id){
        $game = $this->model->GetGame($id);
        $this->view->ShowGame($game);
   }

   function ShowUpdateCompany($id){
    $company= $this->model->GetCompany($id);
    $this->view->UpdateViewCompany($company);
    
    
   }

   function UpdateCompany($empresa,$id){
       $this->model->UpdateComp($empresa,$id);
       $this->view->showHomeLocation();
   }

   function DeleteCompany($id){
    $this->model->DeleteCompany($id);
    $this->view->showHomeLocation();
   }

}




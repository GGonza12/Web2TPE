<?php
require_once './Model/StoreModel.php';
require_once './View/StoreView.php';
require_once './Helpers/AuthHelper.php';

class StoreController{

    private $model;
    private $view;
    private $authHelper;

    function __construct(){
        $this->model = new StoreModel();
        $this->view = new StoreView();
        $this->authHelper = new AuthHelper();
    }

    function showHome(){
        $this->authHelper->CheckLoggedIn(); 
        $games = $this->model->GetGames();        
        $company = $this->model->GetCompanys();
        $this->view->ShowGames($games,$company);
        
    }
    function showGamesOfCompany($id){
        $games = $this->model->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games);
    }

    function createGame($juego,$descripcion,$precio,$empresa){
        $this->authHelper->CheckAdmin();
        $this->model->InsertGame($juego,$descripcion,$precio,$empresa);
        $this->view->ShowHomeLocation();
    }

    function CreateEmpresa($empresa){
        $this->authHelper->CheckAdmin();
        $this->model->InsertCompany($empresa);
        $this->view->ShowHomeLocation();
    }

    function deleteGame($id){
        $this->authHelper->CheckAdmin();
        $this->model->Delete($id);
        $this->view->showHomeLocation();
    }
    
    function viewGame($id){
        
        $game = $this->model->GetGame($id);
        $this->view->ShowGame($game);
   }

   function ShowUpdateCompany($id){
    $this->authHelper->CheckAdmin();
    $this->authHelper->CheckLoggedIn();
    $company= $this->model->GetCompany($id);
    $this->view->UpdateViewCompany($company);
    
    
   }

   function UpdateCompany($empresa,$id){
    $this->authHelper->CheckAdmin();
       $this->model->UpdateComp($empresa,$id);
       $this->view->showHomeLocation();
   }

   function DeleteCompany($id){
    $this->authHelper->CheckAdmin();
    $this->model->DeleteCompany($id);
    $this->view->showHomeLocation();
   }

}




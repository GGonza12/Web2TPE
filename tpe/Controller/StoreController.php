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
        $this->view->ShowGamesHome($games,$company);
        
    }
    function ShowStore(){
        $this->authHelper->CheckLoggedIn();
        $games = $this->model->GetGames();
        $this->view->ShowGamesStore($games);
    }

    function showGamesOfCompany($id){
        $this->authHelper->CheckLoggedIn();
        $company = $this->model->GetCompany($id);
        $games = $this->model->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games,$company);
    }

    function createGame($juego,$imagen,$categorias,$descripcion,$precio,$empresa){
        $this->authHelper->CheckLoggedIn();
        $this->model->InsertGame($juego,$imagen,$categorias,$descripcion,$precio,$empresa);
        $this->view->ShowHomeLocation();
    }

    function CreateEmpresa($empresa){
        $this->authHelper->CheckLoggedIn();
        $this->model->InsertCompany($empresa);
        $this->view->ShowHomeLocation();
    }

    function deleteGame($id){
        $this->authHelper->CheckLoggedIn();
        $this->model->Delete($id);
        $this->view->showHomeLocation();
    }
    
    function viewGame($id){
        $this->authHelper->CheckLoggedIn();
        $game = $this->model->GetGame($id);
        $this->view->ShowGame($game);
   }

   function ShowUpdateCompany($id){
    $this->authHelper->CheckLoggedIn();
    $company= $this->model->GetCompany($id);
    $this->view->UpdateViewCompany($company);
    
    
   }

   function UpdateCompany($empresa,$id){
    $this->authHelper->CheckLoggedIn();
       $this->model->UpdateComp($empresa,$id);
       $this->view->showHomeLocation();
   }

   function DeleteCompany($id){
    $this->authHelper->CheckLoggedIn();
    $this->model->DeleteCompany($id);
    $this->view->showHomeLocation();
   }

}




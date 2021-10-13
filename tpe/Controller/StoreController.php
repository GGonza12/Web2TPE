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
        $rol = $this->authHelper->admin();
        $games = $this->model->GetGames();        
        $company = $this->model->GetCompanys();
        $this->view->ShowGamesHome($games,$company,$rol);
        
    }
    function ShowStore(){
        $this->authHelper->CheckLoggedIn();

        $games = $this->model->GetGames();
        $this->view->ShowGamesStore($games);

    }

    function showGamesOfCompany($id){

        $company = $this->model->GetCompany($id);
        $games = $this->model->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games,$company);
    }

    function createGame($juego,$imagen,$categorias,$descripcion,$precio,$empresa){

        $this->model->InsertGame($juego,$imagen,$categorias,$descripcion,$precio,$empresa);
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




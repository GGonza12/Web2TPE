<?php
require_once './Model/StoreModel.php';
require_once './View/StoreView.php';
require_once './Helpers/AuthHelper.php';

class StoreController
{

    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new StoreModel();
        $this->view = new StoreView();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        $this->authHelper->CheckLoggedIn();
    }
    function ShowStore()
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $games = $this->model->GetGames();
        $company = $this->model->GetCompanys();
        $this->view->ShowGamesStore($games, $company, $rol);
    }

    function showGamesOfCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $company = $this->model->GetCompany($id);
        $games = $this->model->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games, $company);
    }

    function createGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->InsertGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa);
        $this->view->ShowStoreLocation();
    }
    function deleteGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->Delete($id);
        $this->view->showStoreLocation();
    }

    function viewGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $game = $this->model->GetGame($id);
        $this->view->ShowGame($game);
    }
    function ShowUpdateGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $game = $this->model->GetGame($id);
        $company = $this->model->GetCompanys();
        $this->view->UpdateViewGame($game,$company);
    }

    function UpdateGame($id_juego,$juego,$imagen,$categorias,$descripcion,$precio,$id_empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->UpdateGame($id_juego,$juego,$imagen,$categorias,$descripcion,$precio,$id_empresa);
        $this->view->showStoreLocation();
    }

    function CreateEmpresa($empresa,$informacion)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->InsertCompany($empresa,$informacion);
        $this->view->showCompanysLocation();
        
    }

    function ShowUpdateCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $company = $this->model->GetCompany($id);
        $this->view->UpdateViewCompany($company);
    }

    function ShowCompanys()
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $companys = $this->model->GetCompanys();
        $this->view->ShowCompanys($rol,$companys);
    }

    function UpdateCompany($empresa, $id,$informacion)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->UpdateComp($empresa, $id,$informacion);
        $this->view->showCompanysLocation();
    }

    function DeleteCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $this->model->DeleteCompany($id);
        $this->view->showCompanysLocation();
    }

}

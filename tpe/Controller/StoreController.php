<?php
require_once './Model/GamesModel.php';
require_once './Model/CompanysModel.php';
require_once './View/StoreView.php';
require_once './Helpers/AuthHelper.php';

class StoreController
{

    private $modelGame;
    private $modelCompany;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->modelGame = new GamesModel();
        $this->modelCompany = new CompanysModel();
        $this->view = new StoreView();
        $this->authHelper = new AuthHelper();
    }

    function showHome()
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $this->view->ShowHome($check);
    }
    function ShowStore()
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $games = $this->modelGame->GetGames();
        $company = $this->modelCompany->GetCompanys();
        $this->view->ShowGamesStore($games, $company,$check);
    }

    function showGamesOfCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $company = $this->modelCompany->GetCompany($id);
        $games = $this->modelCompany->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games, $company,$check);
    }

    function createGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $this->modelGame->InsertGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa);
            $this->view->ShowStoreLocation();
        }
        else{
            $this->view-> showHomeLocation();
        }
    }
    function deleteGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $this->modelGame->Delete($id);
            $this->view->showStoreLocation();
        }
        else{
            $this->view-> showHomeLocation();
        }
        
    }

    function viewGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $user = $this->authHelper->CheckUser();
        $game = $this->modelGame->GetGame($id);
        $this->view->ShowGame($user,$game,$check);
    }
    
    function ShowUpdateGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $game = $this->modelGame->GetGame($id);
            $company = $this->modelCompany->GetCompanys();
            $this->view->UpdateViewGame($game,$company,$check);
        }
        else{
            $this->view-> showHomeLocation();
        }
    }

    function UpdateGame($id_juego,$juego,$imagen,$categorias,$descripcion,$precio,$id_empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $this->modelGame->UpdateGame($id_juego,$juego,$imagen,$categorias,$descripcion,$precio,$id_empresa);
            $this->view->showStoreLocation();
        }
        else{
            $this->view-> showHomeLocation();
        }
    }

    function CreateEmpresa($empresa,$descripcion)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $this->modelCompany->InsertCompany($empresa,$descripcion);
            $this->view->showCompanysLocation();
        }
        else{
            $this->view-> showHomeLocation();
        }
        
    }

    function ShowUpdateCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $company = $this->modelCompany->GetCompany($id);
            $this->view->UpdateViewCompany($company,$check);
        }
        else{
            $this->view-> showHomeLocation();
        }
    }

    function ShowCompanys()
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $companys = $this->modelCompany->GetCompanys();
        $this->view->ShowCompanys($companys,$check);
    }

    function UpdateCompany($empresa, $id,$descripcion)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $this->modelCompany->UpdateComp($empresa, $id, $descripcion);
            $this->view->showCompanysLocation();
        }
        else{
            $this->view-> showHomeLocation();
        }
    }

    function DeleteCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        if($check == "admin"){
            $games = $this->modelCompany->GamesOfCompany($id);
            if(empty($games)){
                $this->modelCompany->DeleteCompany($id);
                $this->view->showCompanysLocation();
            }
            else if(!empty($games)){
                echo '<script language="javascript">alert("no mi amigo");</script>';
                $this->view->showCompanysLocation();
            }
        }
    }

}

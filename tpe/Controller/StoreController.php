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
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->logged();
        $this->view->ShowHome($rol, $logged);
    }
    function ShowStore()
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        $games = $this->modelGame->GetGames();
        $company = $this->modelCompany->GetCompanys();
        $this->view->ShowGamesStore($games, $company, $rol, $logged);
    }

    function showGamesOfCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->logged();
        $company = $this->modelCompany->GetCompany($id);
        $games = $this->modelCompany->GamesOfCompany($id);
        $this->view->ShowGamesOfCompany($games, $company,$rol,$logged);
    }

    function createGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $this->modelGame->InsertGame($juego, $imagen, $categorias, $descripcion, $precio, $empresa);
            $this->view->ShowStoreLocation();
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }
    function deleteGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->logged();
        if ($rol == true) {
            $this->modelGame->Delete($id);
            $this->view->showStoreLocation();
        } else {
            $this->view->ShowHome($rol,$logged);
        }
    }

    function viewGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->logged();
        $game = $this->modelGame->GetGame($id);
        $this->view->ShowGame($game,$rol,$logged);
    }

    function ShowUpdateGame($id)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $game = $this->modelGame->GetGame($id);
            $company = $this->modelCompany->GetCompanys();
            $this->view->UpdateViewGame($game, $company,$rol,$logged);
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }

    function UpdateGame($id_juego, $juego, $imagen, $categorias, $descripcion, $precio, $id_empresa)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $this->modelGame->UpdateGame($id_juego, $juego, $imagen, $categorias, $descripcion, $precio, $id_empresa);
            $this->view->showStoreLocation();
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }

    function CreateEmpresa($empresa, $descripcion)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $this->modelCompany->InsertCompany($empresa, $descripcion);
            $this->view->showCompanysLocation();
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }

    function ShowUpdateCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $company = $this->modelCompany->GetCompany($id);
            $this->view->UpdateViewCompany($company,$rol,$logged);
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }

    function ShowCompanys()
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        $companys = $this->modelCompany->GetCompanys();
        $this->view->ShowCompanys($rol, $logged, $companys);
    }

    function UpdateCompany($empresa, $id, $descripcion)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $this->modelCompany->UpdateComp($empresa, $id, $descripcion);
            $this->view->showCompanysLocation();
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }

    function DeleteCompany($id)
    {
        $this->authHelper->CheckLoggedIn();
        $logged = $this->authHelper->logged();
        $rol = $this->authHelper->admin();
        if ($rol == true) {
            $this->modelCompany->DeleteCompany($id);
            $this->view->showCompanysLocation();
        } else {
            $this->view->ShowHome($rol, $logged);
        }
    }


  //  function UploadImage()
  //  {
  //      $id = $params[":ID"]
  //      $
//        $img = move_uploaded_file("php:/input",)
//        if ($_FILES['input_name']['type'] == "image/jpg" || $_FILES['input_name']['type'] == "image/jpeg" || $_FILES['input_name']['type'] == "image/png")
  //      {
    //        $this->model->saveTask($_FILES['input_name']['tmp_name']);
      //  } 
       // else{
       //     $this->model->saveTask();
       // }
   // }
}

<?php
require_once('C:/xampp/htdocs/Web2TPE/tpe/libs/smarty-3.1.39/libs/Smarty.class.php');

class StoreView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function ShowGames($games)
    {
        $this->smarty->assign('titulo', 'Juegos');

        $this->smarty->assign('juegos', $games);
       // $this->smarty->assing('aa',$a);
        $this->smarty->display('templates/home.tpl');

    }
    function ShowCompanys($company) {
        $this->smarty->assign('titulo2', 'Empresas');
        $this->smarty->assign('company', $company);
        $this->smarty->display('templates/empresas.tpl');
        
    }
    function ShowGamesOfCompany($games) {
        $this->smarty->assign('games',$games);
        $this->smarty->display('templates/juegosdeempresa.tpl');
    }
    
    function ShowGame($game)
    {
        $this->smarty->assign('titulo', $game->juego);
        $this->smarty->assign('juego', $game);
        $this->smarty->display('templates/ViewGame.tpl');
    }

    //function ShowCompanys($companys)
    //{
        
   //     $this->smarty->display('templates/home.tpl');
   // }

    function showHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }

}
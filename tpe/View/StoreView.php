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
        $this->smarty->display('templates/home.tpl');
    }
    
    function ShowGame($game)
    {
        $this->smarty->assign('titulo', $game->juego);
        $this->smarty->assign('juego', $game);
        $this->smarty->display('templates/ViewGame.tpl');
    }

    function showHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }

}
<?php
require_once('C:/xampp/htdocs/webtpe/Web2TPE/tpe/libs/smarty-3.1.39/libs/Smarty.class.php');

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

    //
    //function showTask($task)
    //{
   //     $this->smarty->assign('titulo', $task->producto);
    //    $this->smarty->assign('task', $task);
    //    $this->smarty->display('templates/Taskdetail.tpl');
   // }

    function showHomeLocation(){
        header("Location: " . BASE_URL . "home");
    }

}
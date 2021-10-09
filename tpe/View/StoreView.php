<?php
require_once('C:/xampp/htdocs/web2/tp4/ejer5/libs/smarty-3.1.39/libs/Smarty.class.php');

class StoreView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function ShowGames($coments)
    {
        $this->smarty->assign('titulo', 'Comentarios');
        $this->smarty->assign('coments', $coments);
        $this->smarty->display('templates/home.tpl');
    }
    //function showTask($task)
    //{
   //     $this->smarty->assign('titulo', $task->producto);
    //    $this->smarty->assign('task', $task);
    //    $this->smarty->display('templates/Taskdetail.tpl');
   // }

    function showHomeLocation()
    {
        header("Location: " . BASE_URL . "home");
    }

}
<?php

require_once('C:/xampp/htdocs/Web2TPE/tpe/libs/smarty-3.1.39/libs/Smarty.class.php');
class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
        
    function ShowLogin($error = ""){
        $this->smarty->assign('titulo', 'Log In');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function ShowHome(){
        header("Location: ".BASE_URL."home");
    }


}
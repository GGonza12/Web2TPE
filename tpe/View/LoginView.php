<?php

require_once('../tpe/libs/smarty-3.1.39/libs/Smarty.class.php');
class LoginView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }
    
        
    function ShowLogin($rol,$error = ""){
        $this->smarty->assign('rol', $rol);
        $this->smarty->assign('titulo', 'Log In');
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/login.tpl');
    }

    function ShowUsers($usuarios){
        $this->smarty->assign('titulo','lista usuarios');
        $this->smarty->assign('usuarios',$usuarios);
        $this->smarty->display('templates/permisos.tpl');
    }

    function ShowAdmin(){
        header("Location: ".BASE_URL."administrador");
    }

    function ShowHome(){
        header("Location: ".BASE_URL."home");
    }


}
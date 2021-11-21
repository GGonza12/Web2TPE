<?php

class AuthHelper {
    function __construct()
    {
        
    }
    function CheckUser(){
        if(isset($_SESSION["email"])){
            $usuario = $_SESSION["user"];
            return $usuario;
        }
    }
    function CheckRol(){
        if(isset($_SESSION["email"])){
            $permiso = $_SESSION["rol"];
            return $permiso;
        }
    }

    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){

            header("Location: ".BASE_URL."login");
            die();
        }
    }

}
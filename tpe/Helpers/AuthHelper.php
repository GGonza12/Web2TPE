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
    // CheckRol sirve para ver que rol tiene el usuario registrado.
    function CheckRol(){     
        if(isset($_SESSION["email"])){
            $permiso = $_SESSION["rol"];
            return $permiso;
        }
    }
    //Para confirmar si el usuario esta logueado.
    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){

            header("Location: ".BASE_URL."login");
            die();
        }
    }

}
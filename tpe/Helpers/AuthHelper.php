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

    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){

            header("Location: ".BASE_URL."login");
            die();
        }
    }
    function admin(){
        if((isset($_SESSION["email"]) && $_SESSION["rol"]=='admin')){
            $rol = true;
        }
        else{
            $rol = false;
        }
        return $rol;
    }
}
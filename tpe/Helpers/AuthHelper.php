<?php

class AuthHelper {
    function __construct()
    {
        
    }

    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){

            header("Location: ".BASE_URL."login");
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
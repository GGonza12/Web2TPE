<?php

class AuthHelper {
    function __construct()
    {
        
    }

    function CheckLoggedIn(){
        session_start();
        if(!isset($_SESSION["email"])){

            header("Location: ".BASE_URL."login");
            die();
        }
    }

    function Logged(){
        if((isset($_SESSION["email"]))){
            $logged = true;
            var_dump($logged);
        }
        else{
            $logged = false;
            var_dump($logged);
        }
        return $logged;
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
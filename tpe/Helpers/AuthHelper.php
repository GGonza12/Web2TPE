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
    function CheckAdmin(){
        session_start();
        if(($_SESSION["rol"] != 'admin')){

            header("Location: ".BASE_URL."home");
        }
    }
}
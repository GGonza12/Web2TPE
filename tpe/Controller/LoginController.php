<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {
    private $model;
    private $view;

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function login(){
        $this->view->ShowLogin();
    }

    function SignIn($user,$email,$password){
        $this->model->CreateUser($user,$email,$password);
        $this->view->ShowLogin("usuario creado con exito");
    }

    function logout(){
        session_start();
        session_destroy();
        $this->view->ShowLogin("Cerraste sesión");
    }

    function VefiryLoginAdmin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
            if (($user && password_verify($password, $user->contrasena)) && ($user->rol == 'admin' )){
                session_start();
                $_SESSION["email"] = $email;

                $this->view->ShowHome();
            } 
            else {
                $this->view->ShowLogin('Acceso denegado.');
            }
        }
    }
    function VefiryLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->contrasena)){
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["rol"] == $user->rol;

                    
                $this->view->ShowHome();
            } 
            else {
                $this->view->ShowLogin('Acceso denegado.');
            }
        }
    }

    
}

<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";
require_once "./Helpers/AuthHelper.php";

class LoginController {
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        
        $this->model = new UserModel();
        $this->authHelper = new AuthHelper();
        $this->view = new LoginView();

    }

    function login(){
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->Logged();
        $this->view->ShowLogin($rol,$logged);
    }

    function ShowPermisos(){
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->Logged();
        $usuarios = $this->model->getUsers();
        $rol = $this->authHelper->admin();
        $this->view->ShowPermisos($rol,$logged,$usuarios);
    }

    function SignIn($user,$email,$password){
        $this->model->CreateUser($user,$email,$password);
    }

    function logout(){
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->Logged();
        session_start();
        session_destroy();
        $this->view->ShowLogin($rol,$logged,"Cerraste sesión");
    }

    function VefiryLogin(){
        $rol = $this->authHelper->admin();
        $logged = $this->authHelper->Logged();
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->contrasena)){
                session_start();
                $_SESSION["email"] = $email;
                $_SESSION["rol"] = $user->rol;
                $this->view->ShowHome();
            } 
            else {
                $this->view->ShowLogin($rol,$logged,'Acceso denegado.');
            }
        }
    }


    function agregerPermiso($id){
        $this->model->agregarPermiso($id);
        $this->view->ShowAdmin();
        
    }

    function DeleteUser($id){
        $this->model->DeleteUser($id);
        $this->view->ShowAdmin();
        
    }

    function quitarPermiso($id){
        $this->model->quitarPermiso($id);
        $this->view->ShowAdmin();
    }
}

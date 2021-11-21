<?php
require_once "./Model/UserModel.php";
require_once "./View/LoginView.php";

class LoginController {
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        
        $this->model = new UserModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
        

    }

    function login(){

        $check= $this->authHelper->CheckRol();
        $this->view->ShowLogin($check);
    }

    function SignIn($user,$email,$password){
        $this->model->CreateUser($user,$email,$password);
    }

    function logout(){
        $check= $this->authHelper->CheckRol();
        session_start();
        session_destroy();
        
        $this->view->ShowLogin($check,"Cerraste sesión");
    }

    function VefiryLogin(){
        if (!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->contrasena)){
                session_start();
                $_SESSION["user"] = $user->id_usuario;
                $_SESSION["email"] = $email;
                $_SESSION["rol"] = $user->rol;
                $this->view->ShowHome();
            } 
            else {
                $this->view->ShowLogin('Acceso denegado.');
            }
        }
    }

    function administrador(){
        $this->authHelper->CheckLoggedIn();
        $check= $this->authHelper->CheckRol();
        $usuarios = $this->model->getUsers();
        $this->view->ShowUsers($usuarios,$check);

    }

    function agregerPermiso($id){
        $this->model->agregarPermiso($id);
        $this->view->ShowAdmin();
        
    }
    function eliminarUsuario($id){
        $this->model->deleteUser($id);
        $this->view->ShowAdmin();
        
    }
    function quitarPermiso($id){
        $this->model->quitarPermiso($id);
        $this->view->ShowAdmin();
    }
    
}

<?php
require_once "./Model/UserModel.php";
require_once "./Model/ComentsModel.php";
require_once "./View/LoginView.php";

class LoginController
{
    private $model;
    private $modelcoment;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new UserModel();
        $this->modelcoment = new ComentModel();
        $this->view = new LoginView();
        $this->authHelper = new AuthHelper();
    }

    function login()
    {
        $check = $this->authHelper->CheckRol();
        $this->view->ShowLogin($check);
    }

    function SignIn()
    {
        if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password'])){
            $user = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $rol = 'comun';
            $this->model->CreateUser($user, $email, $password,$rol);
        }
    }

    function logout()
    {
        $check = $this->authHelper->CheckRol();
        session_start();
        session_destroy();
        $this->view->ShowLogin($check, "Cerraste sesión");
    }

    function VefiryLogin()
    {   
        $check = $this->authHelper->CheckRol();
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->model->getUser($email);
            if ($user && password_verify($password, $user->contrasena)) {
                session_start();
                $_SESSION["user"] = $user->id_usuario;
                $_SESSION["email"] = $email;
                $_SESSION["rol"] = $user->rol;
                $this->view->ShowHome();
            } else {
                $this->view->ShowLogin($check,'Acceso denegado.');
            }
            }
    }

    function administrador()
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        if ($check == "admin") {
            $usuarios = $this->model->getUsers();
            $this->view->ShowUsers($usuarios, $check);
        }
        else {
            $this->view->ShowHome();
        }
    }

    function agregerPermiso($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        if ($id != null){
            if ($check == "admin") {
                $rol = 'admin';
                $this->model->agregarPermiso($rol, $id);
                $this->view->ShowAdmin();
            }
            else {
                $this->view->ShowHome();
            }
        }
    }
    function eliminarUsuario($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        if ($id != null){  
            $comentarios = $this->modelcoment->GetComentsByUser($id);
            if($_SESSION["user"] == $id){
                $usuarios = $this->model->getUsers();
                $this->view->ShowUsers($usuarios,$check,"No puedes eliminarte a ti mismo.");
            }
            //Verifico si el usuario tenia comentarios y elimino los comentarios.
            else if ($check == "admin" && $comentarios != null){ 
                $this->modelcoment->DeleteAllComentsFromUser($id);
                $this->model->deleteUser($id);
                $this->view->ShowAdmin();
            }
            else if ($check == "admin" && $comentarios == null) {
                $this->model->deleteUser($id);
                $this->view->ShowAdmin();
            }
        }

    }
    function quitarPermiso($id)
    {
        $this->authHelper->CheckLoggedIn();
        $check = $this->authHelper->CheckRol();
        if ($id != null){
            if($_SESSION["user"] == $id){
                $usuarios = $this->model->getUsers();
                $this->view->ShowUsers($usuarios,$check,"No puedes quitar el permiso de administrador a ti mismo.");
            }
            else if($_SESSION["user"] != $id){
                $rol = 'comun';
                $this->model->quitarPermiso($rol, $id);
                $this->view->ShowAdmin();
            }
        }
    }
}

<?php
class UserModel {
    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }

    function getUser($email){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function CreateUser($user,$email,$password){
        $rol= 'admin';
        $query = $this->db->prepare("INSERT INTO usuarios(usuario,email,contraseña,rol) VALUES(?,?,?,?)");
        $query->execute(array($user,$email,$password,$rol));
    }
    
        
    

}
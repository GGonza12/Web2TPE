<?php
class UserModel
{
    private $db;
    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_juegos;charset=utf8', 'root', '');
    }

    function getUser($email)
    {
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email=?");
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function CreateUser($user, $email, $password)
    {
        $rol = 'comun';
        $passwordhash = password_hash($password, PASSWORD_BCRYPT);
        $query = $this->db->prepare("INSERT INTO usuarios(usuario,email,contrasena,rol) VALUES(?,?,?,?)");
        $query->execute(array($user, $email, $passwordhash, $rol));
    }

    function getUsers()
    {
        $query = $this->db->prepare("SELECT * FROM usuarios");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function agregarPermiso($id)
    {
        $rol = 'admin';
        $query = $this->db->prepare(" UPDATE usuarios SET rol=? WHERE id_usuario=?");
        $query->execute(array($rol, $id));
    }

    function quitarPermiso($id)
    {
        $rol = 'comun';
        $query = $this->db->prepare("UPDATE usuarios SET rol=? WHERE id_usuario=?");
        $query->execute(array($rol, $id));
    }

    function DeleteUser($id)
    {
        $rol = 'admin';
        $query = $this->db->prepare("DELETE FROM usuarios  WHERE id_usuario=?");
        $query->execute(array($id));
    }
}

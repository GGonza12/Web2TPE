<?php

    class ComentModel{
        private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }
    
    function GetComents(){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios");
        $sentencia->execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function InsertComent($comentario,$puntaje,$id_juego,$id_usuario){
    
        $sentencia = $this->db->prepare("INSERT INTO comentarios(comentario,puntaje,id_juego,id_usuario) VALUES(?,?,?,?)");
        $sentencia->execute(array($comentario,$puntaje,$id_juego,$id_usuario));
        return $this->db->lastInsertId();
    }

    function DeleteComent($id){
        $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
        $sentencia->execute(array($id));
    }
    function GetComentsByGame($id){
        $sentencia = $this->db->prepare("SELECT coment.*, useer.usuario FROM comentarios coment INNER JOIN usuarios useer WHERE coment.id_juego=? AND coment.id_usuario = useer.id_usuario");
        $sentencia->execute(array($id));
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }

    function GetComent($id){
        $sentencia = $this->db->prepare("SELECT * from comentarios WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    
    }
    function UpdateComent($comentario,$imagen,$id){
        $sentencia = $this->db->prepare("UPDATE comentarios SET comentario=?,imagen=? WHERE id_comentario=?");
        $sentencia->execute(array($comentario,$imagen,$id));
        
    }
    function UpdateScore($score,$id){
        $sentencia = $this->db->prepare("UPDATE comentarios SET puntaje=? WHERE id_comentario=?");
        $sentencia->execute(array($score,$id));
    }


}
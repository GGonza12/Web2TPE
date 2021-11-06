<?php

    class GamesModel{
        private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
    }
    
    function GetGames(){
        $sentencia = $this->db->prepare("SELECT * FROM juegos");
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    function InsertGame($juego,$imagen,$categorias,$descripcion,$precio,$id_empresa){
    
        $sentencia = $this->db->prepare("INSERT INTO juegos(juego,imagen,categorias,descripcion,precio,id_empresa) VALUES(?, ?, ?, ?, ?, ?)");
        $sentencia->execute(array($juego,$imagen,$categorias,$descripcion,$precio,$id_empresa));
    }

    function Delete($id){
        $sentencia = $this->db->prepare("DELETE FROM juegos WHERE id_juego=?");
        $sentencia->execute(array($id));
    }

    function GetGame($id){
        $sentencia = $this->db->prepare("SELECT * from juegos WHERE id_juego=?");
        $sentencia->execute(array($id));
        $juego = $sentencia->fetch(PDO::FETCH_OBJ);
        return $juego;
    
    }
    function UpdateGame($id_juego,$juego,$imagen,$categorias,$descripcion,$precio,$id_empresa){
        $sentencia = $this->db->prepare("UPDATE juegos SET juego=?,imagen=?,categorias=?,descripcion=?,precio=?,id_empresa=? WHERE id_juego=?");
        $sentencia->execute(array($juego,$imagen,$categorias,$descripcion,$precio,$id_empresa,$id_juego));
        
    }


}
<?php

    class StoreModel{
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

    function GetCompanys(){
        $sentencia = $this->db->prepare("SELECT * FROM empresas");
        $sentencia->execute();
        $empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $empresas;
    }
    function GetCompany($id){
        $sentencia = $this->db->prepare("SELECT * FROM empresas WHERE id_empresa=?");
        $sentencia->execute(array($id));
        $empresas = $sentencia->fetch(PDO::FETCH_OBJ);
        return $empresas;
    }
    function GamesOfCompany($id){
        $sentencia = $this->db->prepare("SELECT a.*, b.* FROM juegos a INNER JOIN empresas b WHERE a.id_empresa=? AND b.id_empresa=?");
        $sentencia->execute(array($id,$id));
        $games = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $games; 
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

    function InsertCompany($empresa){
        $sentencia = $this->db->prepare("INSERT INTO empresas(empresa) VALUES(?)");
        $sentencia->execute(array($empresa));
    }

    function UpdateComp($empresa,$id){
        $sentencia = $this->db->prepare("UPDATE empresas SET empresa=? WHERE id_empresa=?");
        $sentencia->execute(array($empresa,$id));
        
}
    function DeleteCompany($id){
        $sentencia = $this->db->prepare("DELETE FROM empresas WHERE id_empresa=?");
        $sentencia->execute(array($id));
    }
    



}
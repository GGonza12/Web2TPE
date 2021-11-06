<?php

    class CompanysModel{
        private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8', 'root', '');
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

    function InsertCompany($empresa,$informacion){
        $sentencia = $this->db->prepare("INSERT INTO empresas(empresa,informacion) VALUES(?,?)");
        $sentencia->execute(array($empresa,$informacion));
    }

    function UpdateComp($empresa,$id,$informacion){
        $sentencia = $this->db->prepare("UPDATE empresas SET empresa=?,informacion=? WHERE id_empresa=?");
        $sentencia->execute(array($empresa,$informacion,$id));
        
}
    function DeleteCompany($id){
        $sentencia = $this->db->prepare("DELETE FROM empresas WHERE id_empresa=?");
        $sentencia->execute(array($id));
    }
    



}
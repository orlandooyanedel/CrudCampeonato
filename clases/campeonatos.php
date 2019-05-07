<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class campeonato{
    private $id_campeonato;
    private $codigo;
    private $nombre;
    private $fechainicio;
    private $fechatermino;
    private $cantidadpartidos;

    function __construct($id_campeonato, $codigo, $nombre, $fechainicio, $fechatermino, $cantidadpartidos) {
        $this->id_campeonato = $id_campeonato;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->fechainicio = $fechainicio;
        $this->fechatermino = $fechatermino;
        $this->cantidadpartidos = $cantidadpartidos;
    }
    
    function getId_campeonato() {
        return $this->id_campeonato;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }
    
    function getFechainicio() {
        return $this->fechainicio;
    }

    function getFechatermino() {
        return $this->fechatermino;
    }

    function getCantidadpartidos() {
        return $this->cantidadpartidos;
    }

    function setId_campeonato($id_campeonato) {
        $this->id_campeonato = $id_campeonato;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setFechainicio($fechainicio) {
        $this->fechainicio = $fechainicio;
    }

    function setFechatermino($fechatermino) {
        $this->fechatermino = $fechatermino;
    }

    function setCantidadpartidos($cantidadpartidos) {
        $this->cantidadpartidos = $cantidadpartidos;
    }
    
    function InsertaDatos(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('insert into campeonato values (?,?,?,?,?,?)');
        echo $this->id;
        $PDOst->execute(array($this->nomarchivo,$this->archivo,$this->id));
        }

    function ActualizaDatos(){
        /*Verficamos la existencia*/
        $db= new DBConnect();
        $dblink=$db->conexion();
        
        if (!isset($dblink)){
            return false;
        }
        
        $PDOst=$dblink->prepare('update campeonato
                                 set idcampeonato=?,codigo=?,nombre=?,fechainicio=?,fechatermino=?,catidadpartidos=?
                                 where idcampeonato=?');
        echo $this->id;
        $PDOst->execute(array($this->nomarchivo,$this->archivo,$this->id));
        }
}
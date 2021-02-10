<?php

namespace PruebaPhp\model\Reaccion;

class Reaccion{
    protected $id;
    protected $idUsuario;
    protected $idPublicacion;
    protected $idTipoReaccion;

    public function getId(){
        return $this->id;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getIdPublicacion(){
        return $this->idPublicacion;
    }
    public function getIdTiporeaccion(){
        return $this->idTiporeaccion;
    }

}
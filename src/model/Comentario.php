<?php

namespace PruebaPhp\model\Comentario;

class Comentario{
    protected $id;
    protected $idUsuario;
    protected $idPublicacion;
    protected $texto;
    protected $date;

    public function getId(){
        return $this->id;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getIdPublicacion(){
        return $this->idPublicacion;
    }
    public function getTexto(){
        return $this->texto;
    }
    public function getDate(){
        return $this->date;
    }
}
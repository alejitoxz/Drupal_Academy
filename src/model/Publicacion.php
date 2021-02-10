<?php

namespace PruebaPhp\model\Publicacion;

class Publicacion{
    protected $id;
    protected $idUsuario;
    protected $date;
    protected $texto;

    public function getId(){
        return $this->id;
    }
    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function getDate(){
        return $this->date;
    }
    public function getTexto(){
        return $this->texto;
    }

}
<?php

namespace PruebaPhp\model\Reaccion;

class Reaccion{
    protected $id;
    protected $tipoiCara;
    protected $imagen;

    public function getId(){
        return $this->id;
    }
    public function getTipoCara(){
        return $this->tipoCara;
    }
    public function getImagen(){
        return $this->imagen;
    }
}
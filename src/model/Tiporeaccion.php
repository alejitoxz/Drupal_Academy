<?php

namespace PruebaPhp\model\TipoReaccion;

class TipoReaccion{
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
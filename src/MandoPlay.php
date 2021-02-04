<?php

namespace PruebaPhp;


class MandoPlay extends Mando{

    protected $teclas;

    function __construct(){
        $this->teclas = [
            'triangulo',
            'cuadrado',
            'circulo',
            'equis',
            'flecha_arriba',
            'flecha_abajo',
            'flecha_izquierda',
            'flecha_derecha',
        ]
    }

    abstract public function ejecutar($accion){
        switch($accion){
            case 'triangulo'
        }
    }
}
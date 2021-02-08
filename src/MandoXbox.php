<?php

namespace PruebaPhp;


class MandoXbox extends Mando{

    protected $teclas;
    protected $encender;
    
    function __construct(){
        $this->teclas = [
            'Y',
            'X',
            'A',
            'B',
            'flecha_arriba',
            'flecha_abajo',
            'flecha_izquierda',
            'flecha_derecha',
        ];
        }

    function ejecutar($accion) {
        switch($accion){
            case 'Y';
            $this->oprimirY();
            break;

            case 'X';
            $this->oprimirX();
            break;

            case 'A';
            $this->oprimirA();
            break;

            case 'B';
            $this->oprimirB();
            break;

            case 'flecha_arriba';
            $this->oprimirFlechaArriba();
            break;

            case 'flecha_abajo';
            $this->oprimirFlechaAbajo();
            break;

            case 'flecha_izquierda';
            $this->oprimirFlechaIzquierda();
            break;

            case 'flecha_derecha';
            $this->oprimirFlechaDerecha();
            break;
            default;
            echo "alguna accion";
            break;
        }
    }
        function estado($encender){
        if($this->encender == true){
            echo "Mando Encendido";
        }
        else {
            echo "Mando Apagado";
        }
    }
    protected function oprimirY(){
        echo "Se oprime la Y";
        echo "<br>";
    }
    protected function oprimirX(){
        echo "Se oprime la X";
        echo "<br>";
    }
    protected function oprimirA(){
        echo "Se oprime la A";
        echo "<br>";
    }
    protected function oprimirB(){
        echo "Se oprime la B";
        echo "<br>";
    }
    protected function oprimirFlechaArriba(){
        echo "Se oprime Flecha Arriba";
        echo "<br>";
    }
    protected function oprimirFlechaAbajo(){
        echo "Se oprime Flecha Abajo";
        echo "<br>";
    }
    protected function oprimirFlechaIzquierda(){
        echo "Se oprime Flecha Izquierda";
        echo "<br>";
    }
    protected function oprimirFlechaDerecha(){
        echo "Se oprime Flcha Derecha";
        echo "<br>";
    }
    public function encenderMando(){
        $this->encender = true;
    }
    public function apagarMando(){
        $this->encender = false;
    }
}
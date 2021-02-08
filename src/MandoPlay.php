<?php

namespace PruebaPhp;


    class MandoPlay extends Mando{
    protected $encendido;
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
        ];}
        function estado($encender){
            if($this->encendido){
                echo "Mando Encendido";
            }
            else {
                echo "Mando Apagado";
            }
        }

     public function ejecutar($accion) {
        switch($accion){
            case 'triangulo';
            $this->oprimirTriangulo();
            break;

            case 'cuadrado';
            $this->oprimirCuadrado();
            break;

            case 'circulo';
            $this->oprimirCirculo();
            break;

            case 'equis';
            $this->oprimirEquis();
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
    protected function oprimirTriangulo(){
        echo "Se oprime el Cuadrado";
        echo "<br>";
    }
    protected function oprimirCuadrado(){
        echo "Se oprime el Circulo";
        echo "<br>";
    }
    protected function oprimirCirculo(){
        echo "Se oprime el triangulo";
        echo "<br>";
    }
    protected function oprimirEquis(){
        echo "Se oprime la equis";
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
        $this->encendido = true;
    }
    public function apagarMando(){
        $this->encendido = false;
    }
}
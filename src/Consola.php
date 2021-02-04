<?php
namespace PruebaPhp;
class Consola {
    protected $mando;
    function __construct(MandoInterfaz $mando){
       $this->mando = $mando;
    }
    public function encenderConsola(){
        $this->mando->encenderMando();
        $this->mando->ejecutar("Mando Encendio");
        $this->mando->conexion();
        $this->mando->ejecutar("Mando Conectado");
        
    }
    public function accionesMando(){
        $this->mando->movimientoIzquierdo();
        $this->mando->ejecutar("Movimiento General");
        $this->mando->movimientoDerecho();
        $this->mando->ejecutar("Movimiento de camara");
        $this->mando->teclaA();
        $this->mando->ejecutar("Salto/Escalar/aceptar");
        $this->mando->teclaB();
        $this->mando->ejecutar("Agachar");
        $this->mando->teclaY();
        $this->mando->ejecutar("Carmbiar Arma");
        $this->mando->teclaX();
        $this->mando->ejecutar("Recargar");
        $this->mando->gatillos();
        $this->mando->ejecutar("Disparar y Apuntar");
    }
    public function apagarConsola(){
        $this->mando->apagarMando();
        $this->mando->ejecutar("Mando Apagado");
    }
}
?>
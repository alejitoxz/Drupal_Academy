<?php
namespace PruebaPhp;
class Consola {
    protected $mando;
    
    function __construct(MandoInterfaz $mando){
        $this->mando = $mando;
    }
    function encenderConsola(){
        $this->mando->encenderMando();
    }
    function usuarioUsandoMando(){
        $this->mando->ejecutar('triangulo');
        $this->mando->ejecutar('circulo');
        $this->mando->ejecutar('cuadrado');
        $this->mando->ejecutar('equis');
        $this->mando->ejecutar('flecha_arriba');
        $this->mando->ejecutar('flecha_abajo');
        $this->mando->ejecutar('flecha_izquierda');
        $this->mando->ejecutar('flecha_derecha');
    }
}
?>
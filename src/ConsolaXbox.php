<?php
namespace PruebaPhp;
class ConsolaXbox {
    protected $mando;
    
    function __construct(MandoInterfaz $mando){
        $this->mando = $mando;
    }
    public function encenderConsola(){
        
    }
    function usuarioUsandoMandoXbox(){
        $this->mando->ejecutar('Y');
        $this->mando->ejecutar('X');
        $this->mando->ejecutar('A');
        $this->mando->ejecutar('B');
        $this->mando->ejecutar('flecha_arriba');
        $this->mando->ejecutar('flecha_abajo');
        $this->mando->ejecutar('flecha_izquierda');
        $this->mando->ejecutar('flecha_derecha');
    }
}
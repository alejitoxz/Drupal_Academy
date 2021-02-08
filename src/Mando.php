<?php

namespace PruebaPhp;


    abstract class Mando implements MandoInterfaz{

    protected $teclas;

    abstract public function ejecutar($accion);
    abstract public function estado($encender);

}
?>

<?php

namespace PruebaPhp;

interface MandoInterfaz {
  /**
   * imprimir
   *
   * @param  mixed $mensaje
   * @return void
   */
  public function ejecutar(string $mensaje) : void;
  public function encenderMando() : void;
  public function conexion() : void;
  public function movimientoIzquierdo() : void;
  public function movimientoDerecho():void;
  public function teclaA() : void;
  public function teclaB() : void;
  public function teclaY() : void;
  public function teclaX() : void;
  public function gatillos() : void;
  public function apagarMando() : void;
}
?>
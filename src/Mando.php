<?php

namespace PruebaPhp;


class Mando implements MandoInterfaz{

    protected $estado = 0;
    protected $mensaje;
    protected $teclas;
    abstract public function ejecutar($accion);




























    /*
    public function ejecutar($mensaje = "") : void{
            if ($this->estado == 1) {
            echo "El Boton On ejecuta Mando: $mensaje";
            echo "<br>";
            }
            else if($this->estado==2){
                echo "El Joystick Izquierdo es: $mensaje";
                echo "<br>";
            }
            else if($this->estado==3){
                echo "El Joystick Derecho es: $mensaje";
                echo "<br>";
            }
            else if($this->estado==4){
                echo "El boton (A) ejecuta: $mensaje";
                echo "<br>";
            }
            else if($this->estado==5){
                echo "El boton (B) ejecuta: $mensaje";
                echo "<br>";
            }
            else if($this->estado==6){
                echo "El boton (Y) ejecuta: $mensaje";
                echo "<br>";
            }
            else if($this->estado==7){
                echo "El boton (X) ejecuta: $mensaje";
                echo "<br>";
            }
            else if($this->estado==8){
                echo "El boton gatillos ejecuta: $mensaje";
                echo "<br>";
            }
            else if($this->estado==9){
                echo "El boton Conexion ejecuta: $mensaje";
                echo "<br>";
            }
            else if ($this->estado==0){
            echo"El Botton of funciona para Mando: $mensaje";
            echo "<br>";
            }
    }

    public function apagarMando() : void{
        $this->estado = 0;
    }

    public function encenderMando() : void{
        $this->estado = 1;
    }
    public function movimientoIzquierdo() : void{
        $this->estado = 2;
    }
    public function movimientoDerecho():void{
        $this->estado = 3;
    }
    public function teclaA() : void{
        $this->estado = 4;
    }
    public function teclaB() : void{
        $this->estado = 5;
    } 
    public function teclaY() :void{
        $this->estado = 6;
    }
    public function teclaX() : void{
        $this->estado = 7;
    }
    public function gatillos() : void{
        $this->estado = 8;
    }
    public function conexion() : void{
        $this->estado = 9;
    }*/
}
?>

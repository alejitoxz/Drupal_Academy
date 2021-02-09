<?php

namespace PruebaPhp\model\Usuario;

class Usuario{
    protected $id;
    protected $nombre;
    protected $telefono;
    protected $direccion;
    protected $password;
    protected $date;
    protected $idNacionalidad;
    protected $email;

    public function getId(){
        return $this->id;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getDate(){
        return $this->date;
    }
    public function getIdNacionalidad(){
        return $this->idNacionalidad;
    }
    public function getEmail(){
        return $this->email;
    }
}
<?php

namespace PruebaPhp\model\Pais;

class Pais{
    protected $id;
    protected $name;

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
}
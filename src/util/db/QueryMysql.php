<?php
 
 namespace PruebaPhp\util\bd;

 class QueryMysql implements QueryInterface{

     protected $conection;

    public function __construct($conection){
        $this->conection = $conection; 
    }

     public function insert(String $tableName, array $columns, array $values){
        $valor = count($values);
        $interrogacion = implode(",",array_fill(0,$valor,"?"));
        $columnsString = implode(",", $columns);
        $query = "INSERT INTO $tableName ($columsString) VALUES ($interrogacion)";
        $this->conection->prepare($query)->execute([$value]);
     }

    public function Update(String $tableName, array $columns , array $values, String $campo, String $valorCampo){
        $valor = count();
        $columnsString = [];
        $query = "UPDATE $tableName SET '$columnsString' WHERE '$campo' = ('$valorCampo')";
        $this->connection->prepare($query)->execute([$values]);
    }

    public function delete(String $tableName, String $columns, String $values, String $condicion){
        
        $condicion;
        function __construct($condicion){
            $this->condicion = $condicion;
        }
        
        $condiciones=[
            "menor" => ["DELETE FROM $tableName WHERE $columns < '.$values'"],
            "igual"  => ["DELETE FROM $tableName WHERE $columns = '.$values'"],
            "mayor" => ["DELETE FROM $tableName WHERE $columns > '.$values'"],
        ];
       

        $query = $condiciones[$condicion];
        $this->conection->prepare($query)->excecute($values);
    }
 }
<?php
 
 namespace PruebaPhp\util\bd;

 interface QueryInterface{
     public function insert($tableName, $fields,$values);
     public function Update($tableName, $fields, $values);
     public function delete(String $tableName, String $columns, String $values, String $condicion);
 }
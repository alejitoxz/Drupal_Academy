<?php

namespace PruebaPhp\model\mysql;

use PruebaPhp\model\StorageInterface;
use PruebaPhp\model\Model;
use PruebaPhp\model\publicacion;
use PruebaPhp\util\db\QueryInterface;

class StoragePublicacion implements StorageInterface {
    protected $query;

    protected $tableName = 'publicacion';
  
    public function __construct(QueryInterface $query) {
      $this->query = $query;
    }
}
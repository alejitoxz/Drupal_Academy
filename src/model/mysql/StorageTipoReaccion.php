<?php

namespace PruebaPhp\model\mysql;

use PruebaPhp\model\StorageInterface;
use PruebaPhp\model\Model;
use PruebaPhp\model\TipoReaccion;
use PruebaPhp\util\db\QueryInterface;

class StorageTipoReaccion implements StorageInterface {
    protected $query;

    protected $tableName = 'TipoReaccion';

    public function __construct(QueryInterface $query) {
        $this->query = $query;
    }

}
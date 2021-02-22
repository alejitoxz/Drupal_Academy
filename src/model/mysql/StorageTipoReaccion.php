<?php

namespace PruebaPhp\model\mysql;

use PruebaPhp\model\StorageInterface;
use PruebaPhp\model\Model;
use PruebaPhp\model\TipoReaccion;
use PruebaPhp\util\db\QueryInterface;

class StorageTipoReaccion implements StorageInterface {
    protected $query;

    protected $tableName = 'tipo_reaccion';

    public function __construct(QueryInterface $query) {
        $this->query = $query;
    }
    public function create(Model $tipoReaccion) {
        $columns = ['tipoCara','imagen'];
        $values = [$tipoReaccion->getTipoCara(),$tipoReaccion->getImagen()];
        $this->query->insert($this->tableName, $columns, $values);
    }
    public function update(Model $tipoReaccion) {
        $updateValues = [
          ['column' => 'tipoCara', 'value' => $tipoReaccion->getTipoCara()],
          ['column' => 'imagen', 'value' => $TipoReaccion->getImagen()],
        ];
        $conditions = [
          ['column' => 'id', 'value' => $tipoReaccion->getId()],
        ];
        $this->query->update($this->tableName, $updateValues, $conditions);
    }
    public function delete(Model $tipoReaccion) {
        $conditions = [
          ['column' => 'id', 'value' => $tipoReaccion->getId()],
        ];
        $this->query->delete($this->tableName, $conditions);
    }
    public function getById(String $id) : Model {
        $conditions = [
          ['column' => 'id', 'value' => $id],
        ];
        $TipoReaccion = $this->query->find($this->tableName, [], $conditions);
        if (!count($tipoReaccion)) {
          return NULL;
        }
        $tipoReaccionData = array_shift($tipoReaccion);
        $ttipoReaccion = new TipoReaccion($tipoReaccionData['tipoCara'],$tipoReaccionData['imagen'],$tipoReaccionData['id']);
        return $tipoReaccion;
    }
    public function getAll() {
        $tipoReaccionData = $this->query->find($this->tableName);
        $tipoReaccion = [];
        foreach ($tipoReaccionData as $tipoReaccionData) {
          $tipoReaccion[] = new TipoReaccion($tipoReaccionData['tipoCara'],$tipoReaccionData['imagen'],$tipoReaccionData['id']);
        }
        return $tipoReaccionData;
    }
}
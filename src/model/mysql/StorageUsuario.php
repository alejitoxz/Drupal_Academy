<?php

namespace PruebaPhp\model\mysql;

use PruebaPhp\model\StorageInterface;
use PruebaPhp\model\Model;
use PruebaPhp\model\Usuario;
use PruebaPhp\util\db\QueryInterface;

class StorageUsuario implements StorageInterface {

  protected $query;


  protected $tableName = 'usuario';

  public function __construct(QueryInterface $query) {
    $this->query = $query;
  }

  public function create(Model $usuario) {
      var_dump($usuario);
    $columns = ['nombre','telefono','direccion','password','date','idNacionalidad','email'];
    $values = [$usuario->getNombre(),$usuario->getTelefono(),$usuario->getDireccion(),$usuario->getPassword(),$usuario->getDate(),$usuario->getIdNacionalidad(),$usuario->getEmail()];
    $this->query->insert($this->tableName, $columns, $values);
  }

  public function update(Model $usuario) {
    $updateValues = [
      ['column' => 'name', 'value' => $usuario->getNombre()],
      ['column' => 'name', 'value' => $usuario->getTelefono()],
      ['column' => 'name', 'value' => $usuario->getDireccion()],
      ['column' => 'name', 'value' => $usuario->getPassword()],
      ['column' => 'name', 'value' => $usuario->getDate()],
      ['column' => 'name', 'value' => $usuario->getIdNacionalidad()],
      ['column' => 'name', 'value' => $usuario->getEmail()],
    ];
    $conditions = [
      ['column' => 'id', 'value' => $usuario->getId()],
    ];
    $this->query->update($this->tableName, $updateValues, $conditions);
  }

  public function delete(Model $usuario) {
    $conditions = [
      ['column' => 'id', 'value' => $usuario->getId()],
    ];
    $this->query->delete($this->tableName, $conditions);
  }

  public function getById(String $id) : Model {
    $conditions = [
      ['column' => 'id', 'value' => $id],
    ];
    $usuarios = $this->query->find($this->tableName, [], $conditions);
    if (!count($usuarios)) {
      return NULL;
    }
    $usuarioData = array_shift($usuarios);
    $usuario = new Usuario($usuarioData['nombre'],$usuarioData['telefono'],$usuarioData['direcion'],$usuarioData['password'],$usuarioData['date'],$usuarioData['idNacionalidad'],$usuarioData['email'], $usuarioData['id']);
    return $usuario;
  }

  public function getAll() {
    $usuarioData = $this->query->find($this->tableName);
    $usuarios = [];
    foreach ($usuarioData as $usuarioData) {
      $usuarios[] = new Usuario($usuarioData['nombre'],$usuarioData['telefono'],$usuarioData['direcion'],$usuarioData['password'],$usuarioData['date'],$usuarioData['idNacionalidad'],$usuarioData['email'], $usuarioData['id']);
    }
    return $usuarios;
  }

}
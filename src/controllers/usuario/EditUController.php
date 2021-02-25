<?php

namespace PruebaPhp\controllers\usuario;

use PruebaPhp\controllers\ControllerBase;
use PruebaPhp\model\mysql\StorageUsuario;

class EditUController extends ControllerBase {

  public function __invoke($request, $response, $args) {
    $id = $args['id'];
    $usuario = NULL;
    if ($id) {
      $storage = new StorageUsuario($this->container->dbMysql);
      $usuario = $storage->getById($id);
    }
    $response = $this->container->view->render($response, '/usuario/edit.phtml', ['usuario' => $usuario]);
    return $response;
  }

}
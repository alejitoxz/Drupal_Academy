<?php

namespace PruebaPhp\controllers\pais;

use PruebaPhp\controllers\ControllerBase;
use PruebaPhp\model\mysql\StoragePais;

class DeleteController extends ControllerBase {

  public function __invoke($request, $response, $args) {
    $id = $args['id'];
    $pais = NULL;
    if ($id) {
      $storage = new StoragePais($this->container->dbMysql);
      $pais = $storage->getById($id);
      $storage->delete($pais);
    }
    return $response->withRedirect('/pais');
  }

}
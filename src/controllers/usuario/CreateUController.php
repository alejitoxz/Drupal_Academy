<?php

namespace PruebaPhp\controllers\Usuario;

use PruebaPhp\controllers\ControllerBase;


class CreateUController extends ControllerBase {

  public function __invoke($request, $response, $args) {
    $usuario = NULL;
    
    $response = $this->container->view->render($response, '/usuario/edit.phtml', ['usuario' => $usuario]);
    return $response;
  }

}
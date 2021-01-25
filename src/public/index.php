<?php
/**
 * @file
 * Index file.
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Views\PhpRenderer;

require '../../vendor/autoload.php';

$app = new App();
// Set Slim container.
$container = $app->getContainer();
$container['view'] = new PhpRenderer('../templates/');

$app->get('/registro', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'registro.phtml');
  
  return $response;
});

$app->post('/registro', function (Request $request, Response $response) {
  $body = $request->getBody();

  $response->getBody()->write($body);
  return $response;
});

$app->get('/pais', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'pais.phtml');
  
  return $response;
});

$app->get('/comentario', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'comentario.phtml');
  
  return $response;
});

$app->get('/publicacion', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'publicacion.phtml');
  
  return $response;
});

$app->get('/tiporeaccion', function (Request $request, Response $response) {

  $response = $this->view->render($response, 'tiporeaccion.phtml');
  
  return $response;
});

$app->run();
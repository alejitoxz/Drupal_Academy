<?php
/**
 * @file
 * Index file.
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Views\PhpRenderer;
use PruebaPhp\util\db\QueryMysql;
use PruebaPhp\model\mysql\StoragePais;
use PruebaPhp\model\mysql\StorageTipoReaccion;
use PruebaPhp\model\Pais;
use PruebaPhp\model\TipoReaccion;
use PruebaPhp\model\Usuario;
use PruebaPhp\model\mysql\StorageUsuario;



$config = [];
require 'settings.php';
require '../../vendor/autoload.php';
$c = new \Slim\Container(['settings' => $config] );

$app = new \Slim\App($c);

// Set Slim container.
$container = $app->getContainer();
$container['view'] = new PhpRenderer('../templates/');
$container['db'] = function ($c) {
  $db = $c['settings']['db'];
  $pdo = new PDO('mysql:host=' . $db['host'] . ';dbname=' . $db['dbname'],
  $db['user'], $db['pass']);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  return $pdo;
};

$app->get('/registro', function (Request $request, Response $response) {

  //$response = $this->view->render($response, 'registro.phtml');
  $query = new QueryMysql($this->db);
  $storage = new StorageUsuario($query);
  $usuario = new Usuario('Diego','2725224','casa 80 #1-11','803fadf23','11-feb-2021','1','diego.caycedo@globant.com');
  $storage->create($usuario);
  return $response;
});

$app->post('/registro', function (Request $request, Response $response) {
  $body = $request->getBody();

  $response->getBody()->write($body);
  return $response;
});

$app->get('/pais', function (Request $request, Response $response) {

  $query = new QueryMysql($this->db);
  $storage = new StoragePais($query);
  $pais = new Pais('Italia');
  $storage->create($pais);
  $paises = $storage->getAll();
  var_dump($paises);
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

  //$response = $this->view->render($response, 'tiporeaccion.phtml');

  $query = new QueryMysql($this->db);
  $storage = new StorageTipoReaccion($query);
  $tipoReaccion = new TipoReaccion('like','1');
  $storage->create($tipoReaccion);
  return $response;
});

$app->run();
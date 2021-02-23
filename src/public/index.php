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
use PruebaPhp\model\Publicacion;
use PruebaPhp\model\mysql\StoragePublicacion;
use PruebaPhp\model\Comentario;
use PruebaPhp\model\mysql\StorageComentario;
use PruebaPhp\model\Reaccion;
use PruebaPhp\model\mysql\StorageReaccion;




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
  //$usuario = new Usuario('Diego','2725224','casa 80 #1-11','803fadf23','11-feb-2021','1','diego.caycedo@globant.com');
  //$storage->create($usuario);
  //$nombre = "Douglas";
  //$usuarios = $storage->getById('1');
  
  //$usuarios->setNombre($nombre);
  //$storage->update($usuarios);
  var_dump($usuarios);  


  //delete
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

  //$response = $this->view->render($response, 'comentario.phtml');
  $query = new QueryMysql($this->db);
  $storage = new StorageComentario($query);
  //$comentario = new Comentario('2','1','hola soy diego','1');
  //$storage->create($comentario);

  $reaccion = $storage->getAll();
  var_dump($reaccion);
  return $response;
});

$app->get('/publicacion', function (Request $request, Response $response) {

  //$response = $this->view->render($response, 'publicacion.phtml');
  $query = new QueryMysql($this->db);
  $storage = new StoragePublicacion($query);
  $publicacion = new Publicacion('2','1171502725','hola soy hola mundo');
  $storage->create($publicacion);

  //delete
  $publicacion = $storage->getById('1');
  var_dump($publicacion);

  //select all
  $publicacion = $storage->getAll();
  var_dump($publicacion);
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
$app->get('/reaccion', function (Request $request, Response $response) {

  //$response = $this->view->render($response, 'tiporeaccion.phtml');

  $query = new QueryMysql($this->db);
  $storage = new StorageReaccion($query);
  //$reaccion = new Reaccion('1','1','1');
  //$storage->create($reaccion);

  $reaccion = $storage->getAll();
  var_dump($reaccion);
  return $response;
});
$app->run();
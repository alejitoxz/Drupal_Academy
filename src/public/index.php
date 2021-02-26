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
use PruebaPhp\model\mysql\StorageTipoReaccion;  
use PruebaPhp\model\TipoReaccion;
use PruebaPhp\model\Usuario;
use PruebaPhp\model\mysql\StorageUsuario;
use PruebaPhp\model\Publicacion;
use PruebaPhp\model\mysql\StoragePublicacion;
use PruebaPhp\model\Comentario;
use PruebaPhp\model\mysql\StorageComentario;
use PruebaPhp\model\Reaccion;
use PruebaPhp\model\mysql\StorageReaccion;

use PruebaPhp\controllers\pais\OverviewController;
use PruebaPhp\controllers\pais\ViewController;
use PruebaPhp\controllers\pais\EditController;
use PruebaPhp\controllers\pais\UpdateController;
use PruebaPhp\controllers\pais\DeleteController;
use PruebaPhp\controllers\pais\CreateController;
use PruebaPhp\controllers\pais\InsertController;

use PruebaPhp\controllers\usuario\OverviewController as UserOverviewController;
use PruebaPhp\controllers\usuario\DeleteController as UserDeleteController;
use PruebaPhp\controllers\usuario\EditController as UserEditController;
use PruebaPhp\controllers\usuario\UpdateController as UserUpdateController;
use PruebaPhp\controllers\usuario\CreateController as UserCreateController;
use PruebaPhp\controllers\usuario\InsertController as UserInsertController;

use PruebaPhp\controllers\tipoReaccion\OverviewController as tpOverviewController;
use PruebaPhp\controllers\tipoReaccion\DeleteController as tpDeleteController;
use PruebaPhp\controllers\tipoReaccion\EditController as tpEditController;
use PruebaPhp\controllers\tipoReaccion\UpdateController as tpUpdateController;
use PruebaPhp\controllers\tipoReaccion\CreateController as tpCreateController;
use PruebaPhp\controllers\TipoReaccion\InsertController as tpInsertController;
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
$container['dbMysql'] = new QueryMysql($container['db']);

$app->get('/pais', OverviewController::class);
$app->get('/pais/{id}/view', ViewController::class);
$app->get('/pais/{id}/edit', EditController::class);
$app->post('/pais/{id}/edit', UpdateController::class);
$app->get('/pais/create', CreateController::class);
$app->post('/pais/create', InsertController::class);
$app->get('/pais/{id}/delete', DeleteController::class);

$app->get('/usuario', UserOverviewController::class);
$app->get('/usuario/{id}/view', UserViewUController::class);
$app->get('/usuario/{id}/delete', UserDeleteController::class);
$app->get('/usuario/{id}/edit', UserEditController::class);
$app->post('/usuario/{id}/edit', UserUpdateController::class);
$app->get('/usuario/create', UserCreateController::class);
$app->post('/usuario/create', UserInsertController::class);

$app->get('/tiporeaccion', tpOverviewController::class);
$app->get('/tiporeaccion/{id}/view', tpViewUController::class);
$app->get('/tiporeaccion/{id}/delete', tpDeleteController::class);
$app->get('/tiporeaccion/{id}/edit', tpEditController::class);
$app->post('/tiporeaccion/{id}/edit', tpUpdateController::class);
$app->get('/tiporeaccion/create', tpCreateController::class);
$app->post('/tiporeaccion/create', tpInsertController::class);



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
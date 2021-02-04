<?php
/**
 * @file
 * Index file.
 */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Views\PhpRenderer;
use PruebaPhp\Impresora;
use PruebaPhp\ImpresoraPapel;
use PruebaPhp\Mando;
use PruebaPhp\MandoXbox;
use Modelo\user\Usuario;
use PruebaPhp\Consola;
use PruebaPhp\MandoAccion;

require '../../vendor/autoload.php';
$configuration = [
  'settings' => [
      'displayErrorDetails' => true,
  ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);

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
$app->get('/impresora', function (Request $request, Response $response) {

  $impresora = new ImpresoraPapel();

  $usuario = new Usuario("miri", "Apel");

  $nombre = $usuario->imprimirNombre($impresora);

  echo "<br>";

 /* $impresora = new Impresora();
  $impresora->encederImpresora();
  $impresora->agregarMensaje("HOLA MUNDO");
  $impresora->imprimir();
  echo "<br>";
  $impresora->apagarImpresora();
  $impresora->imprimir("HOLA CON LA IMPRESORA APAGADA");
  echo "<br>";

  $impresoraHija = new ImpresoraPapel();
  $impresoraHija->encederImpresora();
  $impresoraHija->agregarMensaje("HOLA JULIAN");
  $impresoraHija->imprimir();
  echo "<br>";
  $impresoraHija->apagarImpresora();
  $impresoraHija->imprimir();

  echo "<br>";
  $impresoraHija2 = new ImpresoraPapel();
  $impresoraHija2->agregarMensaje("HOLA DIEGO");
  $impresoraHija2->imprimir();
  */
  
  return $response;

});

$app->get('/mando', function (Request $request, Response $response) {
  echo "Mando";
  echo "<br>";
  $mando = new Mando();
  $consola = new Consola($mando);
  $consola->encenderConsola();
  $consola->accionesMando();
  $consola->apagarConsola();
  echo "<br>";
  echo "MandoPlay";
  echo "<br>";
  $HijoMando = new Mando();
  $consola = new Consola($mando);
  $consola->encenderConsola();
  $consola->accionesMando();
  $consola->apagarConsola();
  echo "<br>";
  echo "MandoXbox";
  echo "<br>";
  $mando = new MandoXbox();
  $consola = new Consola($mando);
  $consola->encenderConsola();
  $consola->accionesMando();
  $consola->apagarConsola();
  echo "<br>";


  return $response;
});

$app->run();
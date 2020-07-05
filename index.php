<?php
require("vendor/autoload.php");
 
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
 
require 'vendor/autoload.php';
 
$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $view = 'home.php';
    require('./template.php');
});

$app->get('/dentists', function (Request $request, Response $response) {
    $view = 'dentists.php';
    $title = 'Dentyści';
    require('./template.php');
});

$app->get('/pricelist', function (Request $request, Response $response) {
    $view = 'pricelist.php';
    $title = 'Cennik';
    require('./template.php');
});

$app->get('/contact', function (Request $request, Response $response) {
    $view = 'contact.php';
    $title = 'Kontakt';
    require('./template.php');
});

$app->run();
?>
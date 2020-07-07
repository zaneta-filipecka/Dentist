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

$app->post('/contact', function (Request $request, Response $response) {
    $parsedBody = $request->getParsedBody();
    $message = 'Wiadomość została wysłana';
    $error = false;
    $text1 = $_POST['firstname'];
    $text2 = $_POST['lastname'];
    $text3 = $_POST['subject'];
    foreach($parsedBody as $field) {
        if(empty($field) || trim($text1) === '' || trim($text2) === '' || trim($text3) === '') {
            $message = 'Niepoprawnie uzupełniony formularz';
            $error = true;
        }
    }
    if(!$error) {
        $parsedBody = null;
    }

    $view = 'contact.php';
    require('./template.php');
});

$app->run();
?>
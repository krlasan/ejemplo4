<?php
require_once __DIR__.'/vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();

$app->get('/clima', function() use($app) {

    $client = new Client ();
    $url = "http://openweathermap.org/data/2.5/weather?id=3530597&appid=b1b15e88fa797225412429c1c50c122a1";
    $response = $client->get($url);
    $body = $response->getBody();

    return new Response($body,200,array('Content-Type' => 'application/json'));

});

$app->run();

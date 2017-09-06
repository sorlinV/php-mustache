<?php
require('vendor/autoload.php');
$client = new \GuzzleHttp\Client();
// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'https://dog.ceo/api/breeds/list/all');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
$promise->wait();
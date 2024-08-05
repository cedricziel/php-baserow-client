<?php

require_once __DIR__.'/../vendor/autoload.php';

use CedricZiel\Baserow\Client;

$token = 'my-token';
$client = Client::createForUrl('https://baserow.example.com', accessToken: $token);

$rows = $client->listDatabaseTableRows(586);

var_dump($rows);

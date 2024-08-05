<?php

require_once __DIR__.'/../vendor/autoload.php';

use CedricZiel\Baserow\Authentication\DatabaseTokenAuthentication;
use Http\Client\Common\Plugin\AddHostPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Nyholm\Psr7\Uri;

$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = CedricZiel\Baserow\Generated\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$rows = $client->listDatabaseTableRows(586);

var_dump($rows);

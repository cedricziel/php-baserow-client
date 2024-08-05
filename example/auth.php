<?php

require_once __DIR__.'/../vendor/autoload.php';

use CedricZiel\Baserow\Client;
use CedricZiel\Baserow\Generated\Model\ExampleRowRequestSerializerWithUserFieldNames;
use CedricZiel\Baserow\Generated\Model\TokenObtainPairWithUser;

// 1. we need to log in to obtain a JWT token
$authClient = Client::create();

$body = new TokenObtainPairWithUser();
$body->setEmail('my@example.com');
$body->setPassword('mypassword');

$res = $authClient->tokenAuth($body);
$token = $res->getAccessToken();

// 2. we can use the token for further requests
$client = Client::createForUrl('https://baserow.example.com', jwtToken: $token);

$body = new ExampleRowRequestSerializerWithUserFieldNames();
$client->createDatabaseTableRow(123);

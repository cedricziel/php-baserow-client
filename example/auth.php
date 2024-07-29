<?php

use CedricZiel\Baserow\Authentication\JWTAuthentication;
use CedricZiel\Baserow\Generated\Client;
use CedricZiel\Baserow\Generated\Model\ExampleRowRequestSerializerWithUserFieldNames;
use CedricZiel\Baserow\Generated\Model\TokenObtainPairWithUser;

$authClient = Client::create();

$body = new TokenObtainPairWithUser();
$body->setEmail('my@example.com');
$body->setPassword('mypassword');

$res = $authClient->tokenAuth($body);
$token = $res->getAccessToken();

$client = Client::create(null, [new JWTAuthentication($token)]);
$body = new ExampleRowRequestSerializerWithUserFieldNames();
$client->createDatabaseTableRow(123);
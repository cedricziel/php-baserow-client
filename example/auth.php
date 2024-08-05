<?php

use CedricZiel\Baserow\Authentication\JWTAuthentication;
use CedricZiel\Baserow\Generated\Client;
use CedricZiel\Baserow\Generated\Model\ExampleRowRequestSerializerWithUserFieldNames;
use CedricZiel\Baserow\Generated\Model\TokenObtainPairWithUser;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

$authClient = Client::create();

$body = new TokenObtainPairWithUser();
$body->setEmail('my@example.com');
$body->setPassword('mypassword');

$res = $authClient->tokenAuth($body);
$token = $res->getAccessToken();

$authRegistry = new AuthenticationRegistry([
    new JWTAuthentication($token),
]);
$client = Client::create(null, [$authRegistry]);
$body = new ExampleRowRequestSerializerWithUserFieldNames();
$client->createDatabaseTableRow(123);

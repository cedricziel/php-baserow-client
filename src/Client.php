<?php

namespace CedricZiel\Baserow;

use CedricZiel\Baserow\Authentication\DatabaseTokenAuthentication;
use CedricZiel\Baserow\Generated\Authentication\JWTAuthentication;
use CedricZiel\Baserow\Generated\Client as GeneratedClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Nyholm\Psr7\Uri;

class Client extends GeneratedClient
{
    public static function createForUrl(
        string $url,
        ?string $accessToken = null,
        ?string $jwtToken = null,
        $httpClient = null,
        array $additionalPlugins = [],
        array $additionalNormalizers = [],
    ): Client {
        $plugins = [
            new AddHostPlugin(new Uri($url)),
        ];

        if (!$accessToken && !$jwtToken) {
            throw new \InvalidArgumentException('Either a database token or a JWT token must be provided.');
        }

        if ($accessToken) {
            $plugins[] = new DatabaseTokenAuthentication($accessToken);
        }

        if ($jwtToken) {
            $plugins[] = new JWTAuthentication($jwtToken);
        }

        $plugins = array_merge($plugins, $additionalPlugins);

        return parent::create($httpClient, $plugins, $additionalNormalizers);
    }
}
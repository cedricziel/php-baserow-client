<?php

declare(strict_types=1);

namespace CedricZiel\Baserow\Authentication;

class DatabaseTokenAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $token;

    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }

    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        $header = sprintf('Token %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);

        return $request;
    }

    public function getScope(): string
    {
        return 'Database token';
    }
}

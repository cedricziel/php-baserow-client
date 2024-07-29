<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class GitHubAuthProviderModelAuthProvider extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $id;
    /**
     * The type of the related field.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string|null
     */
    protected $domain;
    /**
     * @var bool
     */
    protected $enabled;
    /**
     * @var string
     */
    protected $name;
    /**
     * App ID, or consumer key.
     *
     * @var string
     */
    protected $clientId;
    /**
     * API secret, client secret, or consumer secret.
     *
     * @var string
     */
    protected $secret;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The type of the related field.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the related field.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getDomain(): ?string
    {
        return $this->domain;
    }

    public function setDomain(?string $domain): self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;

        return $this;
    }

    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * App ID, or consumer key.
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * App ID, or consumer key.
     */
    public function setClientId(string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * API secret, client secret, or consumer secret.
     */
    public function getSecret(): string
    {
        return $this->secret;
    }

    /**
     * API secret, client secret, or consumer secret.
     */
    public function setSecret(string $secret): self
    {
        $this->initialized['secret'] = true;
        $this->secret = $secret;

        return $this;
    }
}

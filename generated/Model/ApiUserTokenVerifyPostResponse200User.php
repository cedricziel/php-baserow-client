<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ApiUserTokenVerifyPostResponse200User extends \ArrayObject
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
     * The first name of related user.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The username of the related user. This is always an email address.
     *
     * @var string
     */
    protected $username;
    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     *
     * @var string
     */
    protected $language;

    /**
     * The first name of related user.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The first name of related user.
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The username of the related user. This is always an email address.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * The username of the related user. This is always an email address.
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }

    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }
}

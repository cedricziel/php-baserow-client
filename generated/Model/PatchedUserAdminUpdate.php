<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PatchedUserAdminUpdate extends \ArrayObject
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
     * @var string
     */
    protected $username;
    /**
     * @var string
     */
    protected $name;
    /**
     * Designates whether this user should be treated as active. Set this to false instead of deleting accounts.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * Designates whether this user is an admin and has access to all workspaces and Baserow's admin areas.
     *
     * @var bool
     */
    protected $isStaff;
    /**
     * @var string
     */
    protected $password;

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

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
     * Designates whether this user should be treated as active. Set this to false instead of deleting accounts.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Designates whether this user should be treated as active. Set this to false instead of deleting accounts.
     */
    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Designates whether this user is an admin and has access to all workspaces and Baserow's admin areas.
     */
    public function getIsStaff(): bool
    {
        return $this->isStaff;
    }

    /**
     * Designates whether this user is an admin and has access to all workspaces and Baserow's admin areas.
     */
    public function setIsStaff(bool $isStaff): self
    {
        $this->initialized['isStaff'] = true;
        $this->isStaff = $isStaff;

        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;

        return $this;
    }
}

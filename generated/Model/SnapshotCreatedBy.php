<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class SnapshotCreatedBy extends \ArrayObject
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
     * Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.
     *
     * @var string
     */
    protected $username;

    /**
     * Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only.
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }
}

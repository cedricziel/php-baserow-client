<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ApiDatabaseViewsFilterViewFilterIdDeleteResponse404 extends \ArrayObject
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
     * Machine readable error indicating what went wrong.
     *
     * @var string
     */
    protected $error;
    protected $detail;

    /**
     * Machine readable error indicating what went wrong.
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Machine readable error indicating what went wrong.
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }

    public function getDetail()
    {
        return $this->detail;
    }

    public function setDetail($detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;

        return $this;
    }
}

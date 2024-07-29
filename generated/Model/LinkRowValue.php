<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class LinkRowValue extends \ArrayObject
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
     * The unique identifier of the row in the related table.
     *
     * @var int
     */
    protected $id;
    /**
     * The primary field's value as a string of the row in the related table.
     *
     * @var string
     */
    protected $value;

    /**
     * The unique identifier of the row in the related table.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The unique identifier of the row in the related table.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The primary field's value as a string of the row in the related table.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The primary field's value as a string of the row in the related table.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class BuilderBaseApplicationCreatePolymorphic extends \ArrayObject
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
    protected $name;
    /**
     * * `database` - database
     * `builder` - builder.
     *
     * @var string
     */
    protected $type;
    /**
     * @var bool
     */
    protected $initWithData = false;
    /**
     * The favicon image file.
     *
     * @var BuilderBaseApplicationCreatePolymorphicFaviconFile|null
     */
    protected $faviconFile;

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
     * * `database` - database
     * `builder` - builder.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * * `database` - database
     * `builder` - builder.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getInitWithData(): bool
    {
        return $this->initWithData;
    }

    public function setInitWithData(bool $initWithData): self
    {
        $this->initialized['initWithData'] = true;
        $this->initWithData = $initWithData;

        return $this;
    }

    /**
     * The favicon image file.
     */
    public function getFaviconFile(): ?BuilderBaseApplicationCreatePolymorphicFaviconFile
    {
        return $this->faviconFile;
    }

    /**
     * The favicon image file.
     */
    public function setFaviconFile(?BuilderBaseApplicationCreatePolymorphicFaviconFile $faviconFile): self
    {
        $this->initialized['faviconFile'] = true;
        $this->faviconFile = $faviconFile;

        return $this;
    }
}

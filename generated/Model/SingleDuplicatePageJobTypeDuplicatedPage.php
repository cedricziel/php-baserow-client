<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class SingleDuplicatePageJobTypeDuplicatedPage extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $path;
    /**
     * @var list<PathParam>
     */
    protected $pathParams;
    /**
     * Lowest first.
     *
     * @var int
     */
    protected $order;
    /**
     * @var int
     */
    protected $builderId;

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

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->initialized['path'] = true;
        $this->path = $path;

        return $this;
    }

    /**
     * @return list<PathParam>
     */
    public function getPathParams(): array
    {
        return $this->pathParams;
    }

    /**
     * @param list<PathParam> $pathParams
     */
    public function setPathParams(array $pathParams): self
    {
        $this->initialized['pathParams'] = true;
        $this->pathParams = $pathParams;

        return $this;
    }

    /**
     * Lowest first.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Lowest first.
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getBuilderId(): int
    {
        return $this->builderId;
    }

    public function setBuilderId(int $builderId): self
    {
        $this->initialized['builderId'] = true;
        $this->builderId = $builderId;

        return $this;
    }
}

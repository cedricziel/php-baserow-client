<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class LocalBaserowGetRow extends \ArrayObject
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
     * @var list<LocalBaserowTableServiceFilter>
     */
    protected $filters;

    /**
     * @return list<LocalBaserowTableServiceFilter>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @param list<LocalBaserowTableServiceFilter> $filters
     */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;

        return $this;
    }
}

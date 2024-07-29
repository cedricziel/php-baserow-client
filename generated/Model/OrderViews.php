<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class OrderViews extends \ArrayObject
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
     * View ids in the desired order.
     *
     * @var list<int>
     */
    protected $viewIds;

    /**
     * View ids in the desired order.
     *
     * @return list<int>
     */
    public function getViewIds(): array
    {
        return $this->viewIds;
    }

    /**
     * View ids in the desired order.
     *
     * @param list<int> $viewIds
     */
    public function setViewIds(array $viewIds): self
    {
        $this->initialized['viewIds'] = true;
        $this->viewIds = $viewIds;

        return $this;
    }
}

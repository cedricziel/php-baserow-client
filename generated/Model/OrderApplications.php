<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class OrderApplications extends \ArrayObject
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
     * Application ids in the desired order.
     *
     * @var list<int>
     */
    protected $applicationIds;

    /**
     * Application ids in the desired order.
     *
     * @return list<int>
     */
    public function getApplicationIds(): array
    {
        return $this->applicationIds;
    }

    /**
     * Application ids in the desired order.
     *
     * @param list<int> $applicationIds
     */
    public function setApplicationIds(array $applicationIds): self
    {
        $this->initialized['applicationIds'] = true;
        $this->applicationIds = $applicationIds;

        return $this;
    }
}

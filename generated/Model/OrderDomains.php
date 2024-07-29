<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class OrderDomains extends \ArrayObject
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
     * The ids of the domains in the order they are supposed to be set in.
     *
     * @var list<int>
     */
    protected $domainIds;

    /**
     * The ids of the domains in the order they are supposed to be set in.
     *
     * @return list<int>
     */
    public function getDomainIds(): array
    {
        return $this->domainIds;
    }

    /**
     * The ids of the domains in the order they are supposed to be set in.
     *
     * @param list<int> $domainIds
     */
    public function setDomainIds(array $domainIds): self
    {
        $this->initialized['domainIds'] = true;
        $this->domainIds = $domainIds;

        return $this;
    }
}

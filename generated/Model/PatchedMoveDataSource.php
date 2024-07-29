<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PatchedMoveDataSource extends \ArrayObject
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
     * If provided, the data_source is moved before the data_source with this Id. Otherwise the data_source is placed  last for this page.
     *
     * @var int|null
     */
    protected $beforeId;

    /**
     * If provided, the data_source is moved before the data_source with this Id. Otherwise the data_source is placed  last for this page.
     */
    public function getBeforeId(): ?int
    {
        return $this->beforeId;
    }

    /**
     * If provided, the data_source is moved before the data_source with this Id. Otherwise the data_source is placed  last for this page.
     */
    public function setBeforeId(?int $beforeId): self
    {
        $this->initialized['beforeId'] = true;
        $this->beforeId = $beforeId;

        return $this;
    }
}

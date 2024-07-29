<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PatchedUpdateViewFilterGroup extends \ArrayObject
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
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR) in the group to be shown.
     *
     * `AND` - And
     * `OR` - Or
     *
     * @var string
     */
    protected $filterType;

    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR) in the group to be shown.
     *
     * `AND` - And
     * `OR` - Or
     */
    public function getFilterType(): string
    {
        return $this->filterType;
    }

    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR) in the group to be shown.
     *
     * `AND` - And
     * `OR` - Or
     */
    public function setFilterType(string $filterType): self
    {
        $this->initialized['filterType'] = true;
        $this->filterType = $filterType;

        return $this;
    }
}

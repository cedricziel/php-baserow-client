<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class GridViewUpdate extends \ArrayObject
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
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
     *
     * `AND` - And
     * `OR` - Or
     *
     * @var string
     */
    protected $filterType;
    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     *
     * @var bool
     */
    protected $filtersDisabled;
    /**
     * The new password or an empty string to remove any previous password from the view and make it publicly accessible again.
     *
     * @var string
     */
    protected $publicViewPassword;
    /**
     * Indicates how the access to the view is determined. By default, views are collaborative and shared for all users that have access to the table.
     *
     * @var string
     */
    protected $ownershipType;
    /**
     * * `id` - Id
     * `count` - Count.
     *
     * @var string
     */
    protected $rowIdentifierType;
    /**
     * Indicates whether the view is publicly accessible to visitors.
     *
     * @var bool
     */
    protected $public;
    /**
     * The unique slug that can be used to construct a public URL.
     *
     * @var string
     */
    protected $slug;

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
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
     *
     * `AND` - And
     * `OR` - Or
     */
    public function getFilterType(): string
    {
        return $this->filterType;
    }

    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
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

    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     */
    public function getFiltersDisabled(): bool
    {
        return $this->filtersDisabled;
    }

    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     */
    public function setFiltersDisabled(bool $filtersDisabled): self
    {
        $this->initialized['filtersDisabled'] = true;
        $this->filtersDisabled = $filtersDisabled;

        return $this;
    }

    /**
     * The new password or an empty string to remove any previous password from the view and make it publicly accessible again.
     */
    public function getPublicViewPassword(): string
    {
        return $this->publicViewPassword;
    }

    /**
     * The new password or an empty string to remove any previous password from the view and make it publicly accessible again.
     */
    public function setPublicViewPassword(string $publicViewPassword): self
    {
        $this->initialized['publicViewPassword'] = true;
        $this->publicViewPassword = $publicViewPassword;

        return $this;
    }

    /**
     * Indicates how the access to the view is determined. By default, views are collaborative and shared for all users that have access to the table.
     */
    public function getOwnershipType(): string
    {
        return $this->ownershipType;
    }

    /**
     * Indicates how the access to the view is determined. By default, views are collaborative and shared for all users that have access to the table.
     */
    public function setOwnershipType(string $ownershipType): self
    {
        $this->initialized['ownershipType'] = true;
        $this->ownershipType = $ownershipType;

        return $this;
    }

    /**
     * * `id` - Id
     * `count` - Count.
     */
    public function getRowIdentifierType(): string
    {
        return $this->rowIdentifierType;
    }

    /**
     * * `id` - Id
     * `count` - Count.
     */
    public function setRowIdentifierType(string $rowIdentifierType): self
    {
        $this->initialized['rowIdentifierType'] = true;
        $this->rowIdentifierType = $rowIdentifierType;

        return $this;
    }

    /**
     * Indicates whether the view is publicly accessible to visitors.
     */
    public function getPublic(): bool
    {
        return $this->public;
    }

    /**
     * Indicates whether the view is publicly accessible to visitors.
     */
    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }

    /**
     * The unique slug that can be used to construct a public URL.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The unique slug that can be used to construct a public URL.
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}

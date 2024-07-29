<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class View extends \ArrayObject
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
     * @var int
     */
    protected $tableId;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $order;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var Table
     */
    protected $table;
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
     * @var list<ViewFilter>
     */
    protected $filters;
    /**
     * @var list<ViewFilterGroup>
     */
    protected $filterGroups;
    /**
     * @var list<ViewSort>
     */
    protected $sortings;
    /**
     * @var list<ViewGroupBy>
     */
    protected $groupBys;
    /**
     * @var list<ViewDecoration>
     */
    protected $decorations;
    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     *
     * @var bool
     */
    protected $filtersDisabled;
    /**
     * Indicates whether the public view is password protected or not.
     *
     * :return: True if the public view is password protected, False otherwise.
     *
     * @var bool
     */
    protected $publicViewHasPassword;
    /**
     * @var bool
     */
    protected $showLogo;
    /**
     * @var string
     */
    protected $ownershipType;
    /**
     * @var int
     */
    protected $ownedById;

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

    public function getTableId(): int
    {
        return $this->tableId;
    }

    public function setTableId(int $tableId): self
    {
        $this->initialized['tableId'] = true;
        $this->tableId = $tableId;

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

    public function getOrder(): int
    {
        return $this->order;
    }

    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getTable(): Table
    {
        return $this->table;
    }

    public function setTable(Table $table): self
    {
        $this->initialized['table'] = true;
        $this->table = $table;

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
     * @return list<ViewFilter>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * @param list<ViewFilter> $filters
     */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;

        return $this;
    }

    /**
     * @return list<ViewFilterGroup>
     */
    public function getFilterGroups(): array
    {
        return $this->filterGroups;
    }

    /**
     * @param list<ViewFilterGroup> $filterGroups
     */
    public function setFilterGroups(array $filterGroups): self
    {
        $this->initialized['filterGroups'] = true;
        $this->filterGroups = $filterGroups;

        return $this;
    }

    /**
     * @return list<ViewSort>
     */
    public function getSortings(): array
    {
        return $this->sortings;
    }

    /**
     * @param list<ViewSort> $sortings
     */
    public function setSortings(array $sortings): self
    {
        $this->initialized['sortings'] = true;
        $this->sortings = $sortings;

        return $this;
    }

    /**
     * @return list<ViewGroupBy>
     */
    public function getGroupBys(): array
    {
        return $this->groupBys;
    }

    /**
     * @param list<ViewGroupBy> $groupBys
     */
    public function setGroupBys(array $groupBys): self
    {
        $this->initialized['groupBys'] = true;
        $this->groupBys = $groupBys;

        return $this;
    }

    /**
     * @return list<ViewDecoration>
     */
    public function getDecorations(): array
    {
        return $this->decorations;
    }

    /**
     * @param list<ViewDecoration> $decorations
     */
    public function setDecorations(array $decorations): self
    {
        $this->initialized['decorations'] = true;
        $this->decorations = $decorations;

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
     * Indicates whether the public view is password protected or not.
     *
     * :return: True if the public view is password protected, False otherwise.
     */
    public function getPublicViewHasPassword(): bool
    {
        return $this->publicViewHasPassword;
    }

    /**
     * Indicates whether the public view is password protected or not.
     *
     * :return: True if the public view is password protected, False otherwise.
     */
    public function setPublicViewHasPassword(bool $publicViewHasPassword): self
    {
        $this->initialized['publicViewHasPassword'] = true;
        $this->publicViewHasPassword = $publicViewHasPassword;

        return $this;
    }

    public function getShowLogo(): bool
    {
        return $this->showLogo;
    }

    public function setShowLogo(bool $showLogo): self
    {
        $this->initialized['showLogo'] = true;
        $this->showLogo = $showLogo;

        return $this;
    }

    public function getOwnershipType(): string
    {
        return $this->ownershipType;
    }

    public function setOwnershipType(string $ownershipType): self
    {
        $this->initialized['ownershipType'] = true;
        $this->ownershipType = $ownershipType;

        return $this;
    }

    public function getOwnedById(): int
    {
        return $this->ownedById;
    }

    public function setOwnedById(int $ownedById): self
    {
        $this->initialized['ownedById'] = true;
        $this->ownedById = $ownedById;

        return $this;
    }
}

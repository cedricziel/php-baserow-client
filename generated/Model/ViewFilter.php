<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ViewFilter extends \ArrayObject
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
     * The view to which the filter applies. Each view can have his own filters.
     *
     * @var int
     */
    protected $view;
    /**
     * The field of which the value must be compared to the filter value.
     *
     * @var int
     */
    protected $field;
    /**
     * Indicates how the field's value must be compared to the filter's value. The filter is always in this order `field` `type` `value` (example: `field_1` `contains` `Test`).
     *
     * @var string
     */
    protected $type;
    /**
     * The filter value that must be compared to the field's value.
     *
     * @var string
     */
    protected $value;
    /**
     * Can contain unique preloaded values per filter. This is for example used by the `link_row_has` filter to communicate the display name if a value is provided.
     *
     * @var array<string, mixed>
     */
    protected $preloadValues;
    /**
     * The id of the filter group this filter belongs to. If this is null, the filter is not part of a filter group.
     *
     * @var int|null
     */
    protected $group;

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

    /**
     * The view to which the filter applies. Each view can have his own filters.
     */
    public function getView(): int
    {
        return $this->view;
    }

    /**
     * The view to which the filter applies. Each view can have his own filters.
     */
    public function setView(int $view): self
    {
        $this->initialized['view'] = true;
        $this->view = $view;

        return $this;
    }

    /**
     * The field of which the value must be compared to the filter value.
     */
    public function getField(): int
    {
        return $this->field;
    }

    /**
     * The field of which the value must be compared to the filter value.
     */
    public function setField(int $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;

        return $this;
    }

    /**
     * Indicates how the field's value must be compared to the filter's value. The filter is always in this order `field` `type` `value` (example: `field_1` `contains` `Test`).
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Indicates how the field's value must be compared to the filter's value. The filter is always in this order `field` `type` `value` (example: `field_1` `contains` `Test`).
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The filter value that must be compared to the field's value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The filter value that must be compared to the field's value.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * Can contain unique preloaded values per filter. This is for example used by the `link_row_has` filter to communicate the display name if a value is provided.
     *
     * @return array<string, mixed>
     */
    public function getPreloadValues(): iterable
    {
        return $this->preloadValues;
    }

    /**
     * Can contain unique preloaded values per filter. This is for example used by the `link_row_has` filter to communicate the display name if a value is provided.
     *
     * @param array<string, mixed> $preloadValues
     */
    public function setPreloadValues(iterable $preloadValues): self
    {
        $this->initialized['preloadValues'] = true;
        $this->preloadValues = $preloadValues;

        return $this;
    }

    /**
     * The id of the filter group this filter belongs to. If this is null, the filter is not part of a filter group.
     */
    public function getGroup(): ?int
    {
        return $this->group;
    }

    /**
     * The id of the filter group this filter belongs to. If this is null, the filter is not part of a filter group.
     */
    public function setGroup(?int $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }
}

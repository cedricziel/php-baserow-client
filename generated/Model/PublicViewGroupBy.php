<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PublicViewGroupBy extends \ArrayObject
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
    protected $view;
    /**
     * The field that must be grouped by.
     *
     * @var int
     */
    protected $field;
    /**
     * Indicates the sort order direction. ASC (Ascending) is from A to Z and DESC (Descending) is from Z to A.
     *
     * `ASC` - Ascending
     * `DESC` - Descending
     *
     * @var string
     */
    protected $order;
    /**
     * The pixel width of the group by in the related view.
     *
     * @var int
     */
    protected $width;

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

    public function getView(): string
    {
        return $this->view;
    }

    public function setView(string $view): self
    {
        $this->initialized['view'] = true;
        $this->view = $view;

        return $this;
    }

    /**
     * The field that must be grouped by.
     */
    public function getField(): int
    {
        return $this->field;
    }

    /**
     * The field that must be grouped by.
     */
    public function setField(int $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;

        return $this;
    }

    /**
     * Indicates the sort order direction. ASC (Ascending) is from A to Z and DESC (Descending) is from Z to A.
     *
     * `ASC` - Ascending
     * `DESC` - Descending
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Indicates the sort order direction. ASC (Ascending) is from A to Z and DESC (Descending) is from Z to A.
     *
     * `ASC` - Ascending
     * `DESC` - Descending
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * The pixel width of the group by in the related view.
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * The pixel width of the group by in the related view.
     */
    public function setWidth(int $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;

        return $this;
    }
}

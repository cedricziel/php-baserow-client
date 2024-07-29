<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class CreatedOnFieldField extends \ArrayObject
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
     * Lowest first.
     *
     * @var int
     */
    protected $order;
    /**
     * The type of the related field.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     *
     * @var bool
     */
    protected $primary;
    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * Field description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     *
     * @var string
     */
    protected $dateFormat;
    /**
     * Indicates if the field also includes a time.
     *
     * @var bool
     */
    protected $dateIncludeTime;
    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     *
     * @var string
     */
    protected $dateTimeFormat;
    /**
     * Indicates if the timezone should be shown.
     *
     * @var bool
     */
    protected $dateShowTzinfo;
    /**
     * Force a timezone for the field overriding user profile settings.
     *
     * @var string|null
     */
    protected $dateForceTimezone;

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

    /**
     * Lowest first.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Lowest first.
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * The type of the related field.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the related field.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;

        return $this;
    }

    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Field description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Field description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     */
    public function setDateFormat(string $dateFormat): self
    {
        $this->initialized['dateFormat'] = true;
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Indicates if the field also includes a time.
     */
    public function getDateIncludeTime(): bool
    {
        return $this->dateIncludeTime;
    }

    /**
     * Indicates if the field also includes a time.
     */
    public function setDateIncludeTime(bool $dateIncludeTime): self
    {
        $this->initialized['dateIncludeTime'] = true;
        $this->dateIncludeTime = $dateIncludeTime;

        return $this;
    }

    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     */
    public function getDateTimeFormat(): string
    {
        return $this->dateTimeFormat;
    }

    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     */
    public function setDateTimeFormat(string $dateTimeFormat): self
    {
        $this->initialized['dateTimeFormat'] = true;
        $this->dateTimeFormat = $dateTimeFormat;

        return $this;
    }

    /**
     * Indicates if the timezone should be shown.
     */
    public function getDateShowTzinfo(): bool
    {
        return $this->dateShowTzinfo;
    }

    /**
     * Indicates if the timezone should be shown.
     */
    public function setDateShowTzinfo(bool $dateShowTzinfo): self
    {
        $this->initialized['dateShowTzinfo'] = true;
        $this->dateShowTzinfo = $dateShowTzinfo;

        return $this;
    }

    /**
     * Force a timezone for the field overriding user profile settings.
     */
    public function getDateForceTimezone(): ?string
    {
        return $this->dateForceTimezone;
    }

    /**
     * Force a timezone for the field overriding user profile settings.
     */
    public function setDateForceTimezone(?string $dateForceTimezone): self
    {
        $this->initialized['dateForceTimezone'] = true;
        $this->dateForceTimezone = $dateForceTimezone;

        return $this;
    }
}

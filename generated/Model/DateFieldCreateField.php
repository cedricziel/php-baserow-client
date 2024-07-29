<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class DateFieldCreateField extends \ArrayObject
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
     * * `text` - text
     * `long_text` - long_text
     * `url` - url
     * `email` - email
     * `number` - number
     * `rating` - rating
     * `boolean` - boolean
     * `date` - date
     * `last_modified` - last_modified
     * `last_modified_by` - last_modified_by
     * `created_on` - created_on
     * `created_by` - created_by
     * `duration` - duration
     * `link_row` - link_row
     * `file` - file
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `phone_number` - phone_number
     * `formula` - formula
     * `count` - count
     * `rollup` - rollup
     * `lookup` - lookup
     * `multiple_collaborators` - multiple_collaborators
     * `uuid` - uuid
     * `autonumber` - autonumber
     * `password` - password
     * `ai` - ai.
     *
     * @var string
     */
    protected $type;
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
    /**
     * ('A UTC offset in minutes to add to all the field datetimes values.',).
     *
     * @var int|null
     */
    protected $dateForceTimezoneOffset;

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
     * * `text` - text
     * `long_text` - long_text
     * `url` - url
     * `email` - email
     * `number` - number
     * `rating` - rating
     * `boolean` - boolean
     * `date` - date
     * `last_modified` - last_modified
     * `last_modified_by` - last_modified_by
     * `created_on` - created_on
     * `created_by` - created_by
     * `duration` - duration
     * `link_row` - link_row
     * `file` - file
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `phone_number` - phone_number
     * `formula` - formula
     * `count` - count
     * `rollup` - rollup
     * `lookup` - lookup
     * `multiple_collaborators` - multiple_collaborators
     * `uuid` - uuid
     * `autonumber` - autonumber
     * `password` - password
     * `ai` - ai.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * * `text` - text
     * `long_text` - long_text
     * `url` - url
     * `email` - email
     * `number` - number
     * `rating` - rating
     * `boolean` - boolean
     * `date` - date
     * `last_modified` - last_modified
     * `last_modified_by` - last_modified_by
     * `created_on` - created_on
     * `created_by` - created_by
     * `duration` - duration
     * `link_row` - link_row
     * `file` - file
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `phone_number` - phone_number
     * `formula` - formula
     * `count` - count
     * `rollup` - rollup
     * `lookup` - lookup
     * `multiple_collaborators` - multiple_collaborators
     * `uuid` - uuid
     * `autonumber` - autonumber
     * `password` - password
     * `ai` - ai.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

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

    /**
     * ('A UTC offset in minutes to add to all the field datetimes values.',).
     */
    public function getDateForceTimezoneOffset(): ?int
    {
        return $this->dateForceTimezoneOffset;
    }

    /**
     * ('A UTC offset in minutes to add to all the field datetimes values.',).
     */
    public function setDateForceTimezoneOffset(?int $dateForceTimezoneOffset): self
    {
        $this->initialized['dateForceTimezoneOffset'] = true;
        $this->dateForceTimezoneOffset = $dateForceTimezoneOffset;

        return $this;
    }
}

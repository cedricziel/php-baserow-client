<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class URLFieldCreateField extends \ArrayObject
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
}

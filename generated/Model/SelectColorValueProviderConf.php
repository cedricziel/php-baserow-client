<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class SelectColorValueProviderConf extends \ArrayObject
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
     * An id of a select field of the table. The value provider return the color of the selected option for each row.
     *
     * @var int|null
     */
    protected $fieldId;

    /**
     * An id of a select field of the table. The value provider return the color of the selected option for each row.
     */
    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    /**
     * An id of a select field of the table. The value provider return the color of the selected option for each row.
     */
    public function setFieldId(?int $fieldId): self
    {
        $this->initialized['fieldId'] = true;
        $this->fieldId = $fieldId;

        return $this;
    }
}

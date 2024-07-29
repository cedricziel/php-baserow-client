<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class KanbanViewFieldOptions extends \ArrayObject
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
     * An object containing the field id as key and the properties related to view as value.
     *
     * @var array<string, KanbanViewFieldOptions>
     */
    protected $fieldOptions;

    /**
     * An object containing the field id as key and the properties related to view as value.
     *
     * @return array<string, KanbanViewFieldOptions>
     */
    public function getFieldOptions(): iterable
    {
        return $this->fieldOptions;
    }

    /**
     * An object containing the field id as key and the properties related to view as value.
     *
     * @param array<string, KanbanViewFieldOptions> $fieldOptions
     */
    public function setFieldOptions(iterable $fieldOptions): self
    {
        $this->initialized['fieldOptions'] = true;
        $this->fieldOptions = $fieldOptions;

        return $this;
    }
}

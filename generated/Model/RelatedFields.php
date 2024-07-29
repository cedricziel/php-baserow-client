<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class RelatedFields extends \ArrayObject
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
     * A list of related fields which also changed.
     *
     * @var list<Field>
     */
    protected $relatedFields;

    /**
     * A list of related fields which also changed.
     *
     * @return list<Field>
     */
    public function getRelatedFields(): array
    {
        return $this->relatedFields;
    }

    /**
     * A list of related fields which also changed.
     *
     * @param list<Field> $relatedFields
     */
    public function setRelatedFields(array $relatedFields): self
    {
        $this->initialized['relatedFields'] = true;
        $this->relatedFields = $relatedFields;

        return $this;
    }
}

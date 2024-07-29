<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class GeneratedConditionalColorViewDecorationValueProviderConf extends \ArrayObject
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
     * A list of color items. For each row, the value provider try to match the defined colors one by one in the given order. The first matching color is returned to the decorator.
     *
     * @var list<ConditionalColorValueProviderConfColor>
     */
    protected $colors;

    /**
     * A list of color items. For each row, the value provider try to match the defined colors one by one in the given order. The first matching color is returned to the decorator.
     *
     * @return list<ConditionalColorValueProviderConfColor>
     */
    public function getColors(): array
    {
        return $this->colors;
    }

    /**
     * A list of color items. For each row, the value provider try to match the defined colors one by one in the given order. The first matching color is returned to the decorator.
     *
     * @param list<ConditionalColorValueProviderConfColor> $colors
     */
    public function setColors(array $colors): self
    {
        $this->initialized['colors'] = true;
        $this->colors = $colors;

        return $this;
    }
}

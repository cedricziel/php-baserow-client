<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class GeneratedConditionalColorUpdateViewDecoration extends \ArrayObject
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
     * The decorator type. This is then interpreted by the frontend to display the decoration.
     *
     * `left_border_color` - left_border_color
     * `background_color` - background_color
     *
     * @var string
     */
    protected $type;
    /**
     * The value provider type that gives the value to the decorator.
     *
     * `` -
     * `single_select_color` - single_select_color
     * `conditional_color` - conditional_color
     */
    protected $valueProviderType;
    /**
     * The configuration of the value provider.
     *
     * @var GeneratedConditionalColorUpdateViewDecorationValueProviderConf
     */
    protected $valueProviderConf;
    /**
     * The position of the decorator has within the view, lowest first. If there is another decorator with the same order value then the decorator with the lowest id must be shown first.
     *
     * @var int
     */
    protected $order;

    /**
     * The decorator type. This is then interpreted by the frontend to display the decoration.
     *
     * `left_border_color` - left_border_color
     * `background_color` - background_color
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The decorator type. This is then interpreted by the frontend to display the decoration.
     *
     * `left_border_color` - left_border_color
     * `background_color` - background_color
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The value provider type that gives the value to the decorator.
     *
     * `` -
     * `single_select_color` - single_select_color
     * `conditional_color` - conditional_color
     */
    public function getValueProviderType()
    {
        return $this->valueProviderType;
    }

    /**
     * The value provider type that gives the value to the decorator.
     *
     * `` -
     * `single_select_color` - single_select_color
     * `conditional_color` - conditional_color
     */
    public function setValueProviderType($valueProviderType): self
    {
        $this->initialized['valueProviderType'] = true;
        $this->valueProviderType = $valueProviderType;

        return $this;
    }

    /**
     * The configuration of the value provider.
     */
    public function getValueProviderConf(): GeneratedConditionalColorUpdateViewDecorationValueProviderConf
    {
        return $this->valueProviderConf;
    }

    /**
     * The configuration of the value provider.
     */
    public function setValueProviderConf(GeneratedConditionalColorUpdateViewDecorationValueProviderConf $valueProviderConf): self
    {
        $this->initialized['valueProviderConf'] = true;
        $this->valueProviderConf = $valueProviderConf;

        return $this;
    }

    /**
     * The position of the decorator has within the view, lowest first. If there is another decorator with the same order value then the decorator with the lowest id must be shown first.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * The position of the decorator has within the view, lowest first. If there is another decorator with the same order value then the decorator with the lowest id must be shown first.
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }
}

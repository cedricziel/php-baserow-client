<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class ButtonLinkConfigBlock extends \ArrayObject
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
     * Styles overrides for button.
     *
     * @var ButtonLinkConfigBlockButton
     */
    protected $button;
    /**
     * Styles overrides for link.
     *
     * @var ButtonLinkConfigBlockLink
     */
    protected $link;

    /**
     * Styles overrides for button.
     */
    public function getButton(): ButtonLinkConfigBlockButton
    {
        return $this->button;
    }

    /**
     * Styles overrides for button.
     */
    public function setButton(ButtonLinkConfigBlockButton $button): self
    {
        $this->initialized['button'] = true;
        $this->button = $button;

        return $this;
    }

    /**
     * Styles overrides for link.
     */
    public function getLink(): ButtonLinkConfigBlockLink
    {
        return $this->link;
    }

    /**
     * Styles overrides for link.
     */
    public function setLink(ButtonLinkConfigBlockLink $link): self
    {
        $this->initialized['link'] = true;
        $this->link = $link;

        return $this;
    }
}

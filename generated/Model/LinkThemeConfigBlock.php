<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class LinkThemeConfigBlock extends \ArrayObject
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
    protected $linkFontFamily;
    /**
     * @var int
     */
    protected $linkFontSize;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $linkTextAlignment;
    /**
     * The text color of links.
     *
     * @var string
     */
    protected $linkTextColor;
    /**
     * The hover color of links when hovered.
     *
     * @var string
     */
    protected $linkHoverTextColor;

    public function getLinkFontFamily(): string
    {
        return $this->linkFontFamily;
    }

    public function setLinkFontFamily(string $linkFontFamily): self
    {
        $this->initialized['linkFontFamily'] = true;
        $this->linkFontFamily = $linkFontFamily;

        return $this;
    }

    public function getLinkFontSize(): int
    {
        return $this->linkFontSize;
    }

    public function setLinkFontSize(int $linkFontSize): self
    {
        $this->initialized['linkFontSize'] = true;
        $this->linkFontSize = $linkFontSize;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getLinkTextAlignment(): string
    {
        return $this->linkTextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setLinkTextAlignment(string $linkTextAlignment): self
    {
        $this->initialized['linkTextAlignment'] = true;
        $this->linkTextAlignment = $linkTextAlignment;

        return $this;
    }

    /**
     * The text color of links.
     */
    public function getLinkTextColor(): string
    {
        return $this->linkTextColor;
    }

    /**
     * The text color of links.
     */
    public function setLinkTextColor(string $linkTextColor): self
    {
        $this->initialized['linkTextColor'] = true;
        $this->linkTextColor = $linkTextColor;

        return $this;
    }

    /**
     * The hover color of links when hovered.
     */
    public function getLinkHoverTextColor(): string
    {
        return $this->linkHoverTextColor;
    }

    /**
     * The hover color of links when hovered.
     */
    public function setLinkHoverTextColor(string $linkHoverTextColor): self
    {
        $this->initialized['linkHoverTextColor'] = true;
        $this->linkHoverTextColor = $linkHoverTextColor;

        return $this;
    }
}

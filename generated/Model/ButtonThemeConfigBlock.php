<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class ButtonThemeConfigBlock extends \ArrayObject
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
    protected $buttonFontFamily;
    /**
     * @var int
     */
    protected $buttonFontSize;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $buttonAlignment;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $buttonTextAlignment;
    /**
     * * `auto` - Auto
     * `full` - Full.
     *
     * @var string
     */
    protected $buttonWidth;
    /**
     * The background color of buttons.
     *
     * @var string
     */
    protected $buttonBackgroundColor;
    /**
     * The text color of buttons.
     *
     * @var string
     */
    protected $buttonTextColor;
    /**
     * The border color of buttons.
     *
     * @var string
     */
    protected $buttonBorderColor;
    /**
     * Button border size.
     *
     * @var int
     */
    protected $buttonBorderSize;
    /**
     * Button border radius.
     *
     * @var int
     */
    protected $buttonBorderRadius;
    /**
     * Button vertical padding.
     *
     * @var int
     */
    protected $buttonVerticalPadding;
    /**
     * Button horizontal padding.
     *
     * @var int
     */
    protected $buttonHorizontalPadding;
    /**
     * The background color of buttons when hovered.
     *
     * @var string
     */
    protected $buttonHoverBackgroundColor;
    /**
     * The text color of buttons when hovered.
     *
     * @var string
     */
    protected $buttonHoverTextColor;
    /**
     * The border color of buttons when hovered.
     *
     * @var string
     */
    protected $buttonHoverBorderColor;

    public function getButtonFontFamily(): string
    {
        return $this->buttonFontFamily;
    }

    public function setButtonFontFamily(string $buttonFontFamily): self
    {
        $this->initialized['buttonFontFamily'] = true;
        $this->buttonFontFamily = $buttonFontFamily;

        return $this;
    }

    public function getButtonFontSize(): int
    {
        return $this->buttonFontSize;
    }

    public function setButtonFontSize(int $buttonFontSize): self
    {
        $this->initialized['buttonFontSize'] = true;
        $this->buttonFontSize = $buttonFontSize;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getButtonAlignment(): string
    {
        return $this->buttonAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setButtonAlignment(string $buttonAlignment): self
    {
        $this->initialized['buttonAlignment'] = true;
        $this->buttonAlignment = $buttonAlignment;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getButtonTextAlignment(): string
    {
        return $this->buttonTextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setButtonTextAlignment(string $buttonTextAlignment): self
    {
        $this->initialized['buttonTextAlignment'] = true;
        $this->buttonTextAlignment = $buttonTextAlignment;

        return $this;
    }

    /**
     * * `auto` - Auto
     * `full` - Full.
     */
    public function getButtonWidth(): string
    {
        return $this->buttonWidth;
    }

    /**
     * * `auto` - Auto
     * `full` - Full.
     */
    public function setButtonWidth(string $buttonWidth): self
    {
        $this->initialized['buttonWidth'] = true;
        $this->buttonWidth = $buttonWidth;

        return $this;
    }

    /**
     * The background color of buttons.
     */
    public function getButtonBackgroundColor(): string
    {
        return $this->buttonBackgroundColor;
    }

    /**
     * The background color of buttons.
     */
    public function setButtonBackgroundColor(string $buttonBackgroundColor): self
    {
        $this->initialized['buttonBackgroundColor'] = true;
        $this->buttonBackgroundColor = $buttonBackgroundColor;

        return $this;
    }

    /**
     * The text color of buttons.
     */
    public function getButtonTextColor(): string
    {
        return $this->buttonTextColor;
    }

    /**
     * The text color of buttons.
     */
    public function setButtonTextColor(string $buttonTextColor): self
    {
        $this->initialized['buttonTextColor'] = true;
        $this->buttonTextColor = $buttonTextColor;

        return $this;
    }

    /**
     * The border color of buttons.
     */
    public function getButtonBorderColor(): string
    {
        return $this->buttonBorderColor;
    }

    /**
     * The border color of buttons.
     */
    public function setButtonBorderColor(string $buttonBorderColor): self
    {
        $this->initialized['buttonBorderColor'] = true;
        $this->buttonBorderColor = $buttonBorderColor;

        return $this;
    }

    /**
     * Button border size.
     */
    public function getButtonBorderSize(): int
    {
        return $this->buttonBorderSize;
    }

    /**
     * Button border size.
     */
    public function setButtonBorderSize(int $buttonBorderSize): self
    {
        $this->initialized['buttonBorderSize'] = true;
        $this->buttonBorderSize = $buttonBorderSize;

        return $this;
    }

    /**
     * Button border radius.
     */
    public function getButtonBorderRadius(): int
    {
        return $this->buttonBorderRadius;
    }

    /**
     * Button border radius.
     */
    public function setButtonBorderRadius(int $buttonBorderRadius): self
    {
        $this->initialized['buttonBorderRadius'] = true;
        $this->buttonBorderRadius = $buttonBorderRadius;

        return $this;
    }

    /**
     * Button vertical padding.
     */
    public function getButtonVerticalPadding(): int
    {
        return $this->buttonVerticalPadding;
    }

    /**
     * Button vertical padding.
     */
    public function setButtonVerticalPadding(int $buttonVerticalPadding): self
    {
        $this->initialized['buttonVerticalPadding'] = true;
        $this->buttonVerticalPadding = $buttonVerticalPadding;

        return $this;
    }

    /**
     * Button horizontal padding.
     */
    public function getButtonHorizontalPadding(): int
    {
        return $this->buttonHorizontalPadding;
    }

    /**
     * Button horizontal padding.
     */
    public function setButtonHorizontalPadding(int $buttonHorizontalPadding): self
    {
        $this->initialized['buttonHorizontalPadding'] = true;
        $this->buttonHorizontalPadding = $buttonHorizontalPadding;

        return $this;
    }

    /**
     * The background color of buttons when hovered.
     */
    public function getButtonHoverBackgroundColor(): string
    {
        return $this->buttonHoverBackgroundColor;
    }

    /**
     * The background color of buttons when hovered.
     */
    public function setButtonHoverBackgroundColor(string $buttonHoverBackgroundColor): self
    {
        $this->initialized['buttonHoverBackgroundColor'] = true;
        $this->buttonHoverBackgroundColor = $buttonHoverBackgroundColor;

        return $this;
    }

    /**
     * The text color of buttons when hovered.
     */
    public function getButtonHoverTextColor(): string
    {
        return $this->buttonHoverTextColor;
    }

    /**
     * The text color of buttons when hovered.
     */
    public function setButtonHoverTextColor(string $buttonHoverTextColor): self
    {
        $this->initialized['buttonHoverTextColor'] = true;
        $this->buttonHoverTextColor = $buttonHoverTextColor;

        return $this;
    }

    /**
     * The border color of buttons when hovered.
     */
    public function getButtonHoverBorderColor(): string
    {
        return $this->buttonHoverBorderColor;
    }

    /**
     * The border color of buttons when hovered.
     */
    public function setButtonHoverBorderColor(string $buttonHoverBorderColor): self
    {
        $this->initialized['buttonHoverBorderColor'] = true;
        $this->buttonHoverBorderColor = $buttonHoverBorderColor;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class TextElementUpdateElement extends \ArrayObject
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
     * * `all` - All
     * `logged-in` - Logged In
     * `not-logged` - Not Logged.
     *
     * @var string
     */
    protected $visibility;
    /**
     * Style overrides for this element.
     *
     * @var TypographyConfigBlock
     */
    protected $styles;
    /**
     * Top border color.
     *
     * @var string
     */
    protected $styleBorderTopColor;
    /**
     * Pixel height of the top border.
     *
     * @var int
     */
    protected $styleBorderTopSize;
    /**
     * Padding size of the top border.
     *
     * @var int
     */
    protected $stylePaddingTop;
    /**
     * Margin size of the top border.
     *
     * @var int|null
     */
    protected $styleMarginTop;
    /**
     * Bottom border color.
     *
     * @var string
     */
    protected $styleBorderBottomColor;
    /**
     * Pixel height of the bottom border.
     *
     * @var int
     */
    protected $styleBorderBottomSize;
    /**
     * Padding size of the bottom border.
     *
     * @var int
     */
    protected $stylePaddingBottom;
    /**
     * Margin size of the bottom border.
     *
     * @var int|null
     */
    protected $styleMarginBottom;
    /**
     * Left border color.
     *
     * @var string
     */
    protected $styleBorderLeftColor;
    /**
     * Pixel height of the left border.
     *
     * @var int
     */
    protected $styleBorderLeftSize;
    /**
     * Padding size of the left border.
     *
     * @var int
     */
    protected $stylePaddingLeft;
    /**
     * Margin size of the left border.
     *
     * @var int|null
     */
    protected $styleMarginLeft;
    /**
     * Right border color.
     *
     * @var string
     */
    protected $styleBorderRightColor;
    /**
     * Pixel height of the right border.
     *
     * @var int
     */
    protected $styleBorderRightSize;
    /**
     * Padding size of the right border.
     *
     * @var int
     */
    protected $stylePaddingRight;
    /**
     * Margin size of the right border.
     *
     * @var int|null
     */
    protected $styleMarginRight;
    /**
     * What type of background the element should have.
     *
     * `none` - None
     * `color` - Color
     * `image` - Image
     *
     * @var string
     */
    protected $styleBackground;
    /**
     * The background color if `style_background` is color.
     *
     * @var string
     */
    protected $styleBackgroundColor;
    /**
     * The background image file.
     *
     * @var TextElementUpdateElementStyleBackgroundFile|null
     */
    protected $styleBackgroundFile;
    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     *
     * @var mixed|null
     */
    protected $styleBackgroundMode;
    /**
     * Indicates the width of the element.
     *
     * `full` - Full
     * `full-width` - Full Width
     * `normal` - Normal
     * `medium` - Medium
     * `small` - Small
     *
     * @var string
     */
    protected $styleWidth;
    /**
     * @var mixed|null
     */
    protected $roleType;
    /**
     * User roles associated with this element, used in conjunction with role_type.
     *
     * @var mixed|null
     */
    protected $roles;
    /**
     * The value of the element. Must be a formula.
     *
     * @var string
     */
    protected $value = '';
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $alignment;
    /**
     * The format of the text.
     *
     * `plain` - Plain
     * `markdown` - Markdown
     *
     * @var string
     */
    protected $format = 'plain';

    /**
     * * `all` - All
     * `logged-in` - Logged In
     * `not-logged` - Not Logged.
     */
    public function getVisibility(): string
    {
        return $this->visibility;
    }

    /**
     * * `all` - All
     * `logged-in` - Logged In
     * `not-logged` - Not Logged.
     */
    public function setVisibility(string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Style overrides for this element.
     */
    public function getStyles(): TypographyConfigBlock
    {
        return $this->styles;
    }

    /**
     * Style overrides for this element.
     */
    public function setStyles(TypographyConfigBlock $styles): self
    {
        $this->initialized['styles'] = true;
        $this->styles = $styles;

        return $this;
    }

    /**
     * Top border color.
     */
    public function getStyleBorderTopColor(): string
    {
        return $this->styleBorderTopColor;
    }

    /**
     * Top border color.
     */
    public function setStyleBorderTopColor(string $styleBorderTopColor): self
    {
        $this->initialized['styleBorderTopColor'] = true;
        $this->styleBorderTopColor = $styleBorderTopColor;

        return $this;
    }

    /**
     * Pixel height of the top border.
     */
    public function getStyleBorderTopSize(): int
    {
        return $this->styleBorderTopSize;
    }

    /**
     * Pixel height of the top border.
     */
    public function setStyleBorderTopSize(int $styleBorderTopSize): self
    {
        $this->initialized['styleBorderTopSize'] = true;
        $this->styleBorderTopSize = $styleBorderTopSize;

        return $this;
    }

    /**
     * Padding size of the top border.
     */
    public function getStylePaddingTop(): int
    {
        return $this->stylePaddingTop;
    }

    /**
     * Padding size of the top border.
     */
    public function setStylePaddingTop(int $stylePaddingTop): self
    {
        $this->initialized['stylePaddingTop'] = true;
        $this->stylePaddingTop = $stylePaddingTop;

        return $this;
    }

    /**
     * Margin size of the top border.
     */
    public function getStyleMarginTop(): ?int
    {
        return $this->styleMarginTop;
    }

    /**
     * Margin size of the top border.
     */
    public function setStyleMarginTop(?int $styleMarginTop): self
    {
        $this->initialized['styleMarginTop'] = true;
        $this->styleMarginTop = $styleMarginTop;

        return $this;
    }

    /**
     * Bottom border color.
     */
    public function getStyleBorderBottomColor(): string
    {
        return $this->styleBorderBottomColor;
    }

    /**
     * Bottom border color.
     */
    public function setStyleBorderBottomColor(string $styleBorderBottomColor): self
    {
        $this->initialized['styleBorderBottomColor'] = true;
        $this->styleBorderBottomColor = $styleBorderBottomColor;

        return $this;
    }

    /**
     * Pixel height of the bottom border.
     */
    public function getStyleBorderBottomSize(): int
    {
        return $this->styleBorderBottomSize;
    }

    /**
     * Pixel height of the bottom border.
     */
    public function setStyleBorderBottomSize(int $styleBorderBottomSize): self
    {
        $this->initialized['styleBorderBottomSize'] = true;
        $this->styleBorderBottomSize = $styleBorderBottomSize;

        return $this;
    }

    /**
     * Padding size of the bottom border.
     */
    public function getStylePaddingBottom(): int
    {
        return $this->stylePaddingBottom;
    }

    /**
     * Padding size of the bottom border.
     */
    public function setStylePaddingBottom(int $stylePaddingBottom): self
    {
        $this->initialized['stylePaddingBottom'] = true;
        $this->stylePaddingBottom = $stylePaddingBottom;

        return $this;
    }

    /**
     * Margin size of the bottom border.
     */
    public function getStyleMarginBottom(): ?int
    {
        return $this->styleMarginBottom;
    }

    /**
     * Margin size of the bottom border.
     */
    public function setStyleMarginBottom(?int $styleMarginBottom): self
    {
        $this->initialized['styleMarginBottom'] = true;
        $this->styleMarginBottom = $styleMarginBottom;

        return $this;
    }

    /**
     * Left border color.
     */
    public function getStyleBorderLeftColor(): string
    {
        return $this->styleBorderLeftColor;
    }

    /**
     * Left border color.
     */
    public function setStyleBorderLeftColor(string $styleBorderLeftColor): self
    {
        $this->initialized['styleBorderLeftColor'] = true;
        $this->styleBorderLeftColor = $styleBorderLeftColor;

        return $this;
    }

    /**
     * Pixel height of the left border.
     */
    public function getStyleBorderLeftSize(): int
    {
        return $this->styleBorderLeftSize;
    }

    /**
     * Pixel height of the left border.
     */
    public function setStyleBorderLeftSize(int $styleBorderLeftSize): self
    {
        $this->initialized['styleBorderLeftSize'] = true;
        $this->styleBorderLeftSize = $styleBorderLeftSize;

        return $this;
    }

    /**
     * Padding size of the left border.
     */
    public function getStylePaddingLeft(): int
    {
        return $this->stylePaddingLeft;
    }

    /**
     * Padding size of the left border.
     */
    public function setStylePaddingLeft(int $stylePaddingLeft): self
    {
        $this->initialized['stylePaddingLeft'] = true;
        $this->stylePaddingLeft = $stylePaddingLeft;

        return $this;
    }

    /**
     * Margin size of the left border.
     */
    public function getStyleMarginLeft(): ?int
    {
        return $this->styleMarginLeft;
    }

    /**
     * Margin size of the left border.
     */
    public function setStyleMarginLeft(?int $styleMarginLeft): self
    {
        $this->initialized['styleMarginLeft'] = true;
        $this->styleMarginLeft = $styleMarginLeft;

        return $this;
    }

    /**
     * Right border color.
     */
    public function getStyleBorderRightColor(): string
    {
        return $this->styleBorderRightColor;
    }

    /**
     * Right border color.
     */
    public function setStyleBorderRightColor(string $styleBorderRightColor): self
    {
        $this->initialized['styleBorderRightColor'] = true;
        $this->styleBorderRightColor = $styleBorderRightColor;

        return $this;
    }

    /**
     * Pixel height of the right border.
     */
    public function getStyleBorderRightSize(): int
    {
        return $this->styleBorderRightSize;
    }

    /**
     * Pixel height of the right border.
     */
    public function setStyleBorderRightSize(int $styleBorderRightSize): self
    {
        $this->initialized['styleBorderRightSize'] = true;
        $this->styleBorderRightSize = $styleBorderRightSize;

        return $this;
    }

    /**
     * Padding size of the right border.
     */
    public function getStylePaddingRight(): int
    {
        return $this->stylePaddingRight;
    }

    /**
     * Padding size of the right border.
     */
    public function setStylePaddingRight(int $stylePaddingRight): self
    {
        $this->initialized['stylePaddingRight'] = true;
        $this->stylePaddingRight = $stylePaddingRight;

        return $this;
    }

    /**
     * Margin size of the right border.
     */
    public function getStyleMarginRight(): ?int
    {
        return $this->styleMarginRight;
    }

    /**
     * Margin size of the right border.
     */
    public function setStyleMarginRight(?int $styleMarginRight): self
    {
        $this->initialized['styleMarginRight'] = true;
        $this->styleMarginRight = $styleMarginRight;

        return $this;
    }

    /**
     * What type of background the element should have.
     *
     * `none` - None
     * `color` - Color
     * `image` - Image
     */
    public function getStyleBackground(): string
    {
        return $this->styleBackground;
    }

    /**
     * What type of background the element should have.
     *
     * `none` - None
     * `color` - Color
     * `image` - Image
     */
    public function setStyleBackground(string $styleBackground): self
    {
        $this->initialized['styleBackground'] = true;
        $this->styleBackground = $styleBackground;

        return $this;
    }

    /**
     * The background color if `style_background` is color.
     */
    public function getStyleBackgroundColor(): string
    {
        return $this->styleBackgroundColor;
    }

    /**
     * The background color if `style_background` is color.
     */
    public function setStyleBackgroundColor(string $styleBackgroundColor): self
    {
        $this->initialized['styleBackgroundColor'] = true;
        $this->styleBackgroundColor = $styleBackgroundColor;

        return $this;
    }

    /**
     * The background image file.
     */
    public function getStyleBackgroundFile(): ?TextElementUpdateElementStyleBackgroundFile
    {
        return $this->styleBackgroundFile;
    }

    /**
     * The background image file.
     */
    public function setStyleBackgroundFile(?TextElementUpdateElementStyleBackgroundFile $styleBackgroundFile): self
    {
        $this->initialized['styleBackgroundFile'] = true;
        $this->styleBackgroundFile = $styleBackgroundFile;

        return $this;
    }

    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     */
    public function getStyleBackgroundMode()
    {
        return $this->styleBackgroundMode;
    }

    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     */
    public function setStyleBackgroundMode($styleBackgroundMode): self
    {
        $this->initialized['styleBackgroundMode'] = true;
        $this->styleBackgroundMode = $styleBackgroundMode;

        return $this;
    }

    /**
     * Indicates the width of the element.
     *
     * `full` - Full
     * `full-width` - Full Width
     * `normal` - Normal
     * `medium` - Medium
     * `small` - Small
     */
    public function getStyleWidth(): string
    {
        return $this->styleWidth;
    }

    /**
     * Indicates the width of the element.
     *
     * `full` - Full
     * `full-width` - Full Width
     * `normal` - Normal
     * `medium` - Medium
     * `small` - Small
     */
    public function setStyleWidth(string $styleWidth): self
    {
        $this->initialized['styleWidth'] = true;
        $this->styleWidth = $styleWidth;

        return $this;
    }

    public function getRoleType()
    {
        return $this->roleType;
    }

    public function setRoleType($roleType): self
    {
        $this->initialized['roleType'] = true;
        $this->roleType = $roleType;

        return $this;
    }

    /**
     * User roles associated with this element, used in conjunction with role_type.
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * User roles associated with this element, used in conjunction with role_type.
     */
    public function setRoles($roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    /**
     * The value of the element. Must be a formula.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * The value of the element. Must be a formula.
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getAlignment(): string
    {
        return $this->alignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setAlignment(string $alignment): self
    {
        $this->initialized['alignment'] = true;
        $this->alignment = $alignment;

        return $this;
    }

    /**
     * The format of the text.
     *
     * `plain` - Plain
     * `markdown` - Markdown
     */
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * The format of the text.
     *
     * `plain` - Plain
     * `markdown` - Markdown
     */
    public function setFormat(string $format): self
    {
        $this->initialized['format'] = true;
        $this->format = $format;

        return $this;
    }
}

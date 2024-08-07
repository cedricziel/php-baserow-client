<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class ChoiceElementCreateElement extends \ArrayObject
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
     * Lowest first.
     *
     * @var string
     */
    protected $order;
    /**
     * If provided, creates the element before the element with the given id.
     *
     * @var int
     */
    protected $beforeId;
    /**
     * The type of the element.
     *
     * `heading` - heading
     * `text` - text
     * `link` - link
     * `image` - image
     * `input_text` - input_text
     * `column` - column
     * `button` - button
     * `table` - table
     * `repeat` - repeat
     * `form_container` - form_container
     * `choice` - choice
     * `checkbox` - checkbox
     * `iframe` - iframe
     * `auth_form` - auth_form
     *
     * @var string
     */
    protected $type;
    /**
     * If provided, creates the element as a child of the element with the given id.
     *
     * @var int|null
     */
    protected $parentElementId;
    /**
     * The place in the container.
     *
     * @var string|null
     */
    protected $placeInContainer;
    /**
     * @var string
     */
    protected $visibility = 'all';
    /**
     * The theme overrides for this element.
     *
     * @var mixed|null
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
     * @var ChoiceElementCreateElementStyleBackgroundFile|null
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
     * The text label for this choice.
     *
     * @var string
     */
    protected $label = '';
    /**
     * This choice's input default value.
     *
     * @var string
     */
    protected $defaultValue = '';
    /**
     * Whether this form element is a required field.
     *
     * @var bool
     */
    protected $required = false;
    /**
     * The placeholder text which should be applied to the element.
     *
     * @var string
     */
    protected $placeholder = '';
    /**
     * @var list<ChoiceOption>
     */
    protected $options;
    /**
     * Whether this choice allows users to choose multiple values.
     *
     * @var bool
     */
    protected $multiple = false;
    /**
     * Whether to show the choices as a dropdown.
     *
     * @var bool
     */
    protected $showAsDropdown = true;
    /**
     * @var string
     */
    protected $optionType = 'manual';
    /**
     * The value of the option if it is a formula.
     *
     * @var string
     */
    protected $formulaValue = '';
    /**
     * The display name of the option if it is a formula.
     *
     * @var string
     */
    protected $formulaName = '';

    /**
     * Lowest first.
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Lowest first.
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * If provided, creates the element before the element with the given id.
     */
    public function getBeforeId(): int
    {
        return $this->beforeId;
    }

    /**
     * If provided, creates the element before the element with the given id.
     */
    public function setBeforeId(int $beforeId): self
    {
        $this->initialized['beforeId'] = true;
        $this->beforeId = $beforeId;

        return $this;
    }

    /**
     * The type of the element.
     *
     * `heading` - heading
     * `text` - text
     * `link` - link
     * `image` - image
     * `input_text` - input_text
     * `column` - column
     * `button` - button
     * `table` - table
     * `repeat` - repeat
     * `form_container` - form_container
     * `choice` - choice
     * `checkbox` - checkbox
     * `iframe` - iframe
     * `auth_form` - auth_form
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the element.
     *
     * `heading` - heading
     * `text` - text
     * `link` - link
     * `image` - image
     * `input_text` - input_text
     * `column` - column
     * `button` - button
     * `table` - table
     * `repeat` - repeat
     * `form_container` - form_container
     * `choice` - choice
     * `checkbox` - checkbox
     * `iframe` - iframe
     * `auth_form` - auth_form
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * If provided, creates the element as a child of the element with the given id.
     */
    public function getParentElementId(): ?int
    {
        return $this->parentElementId;
    }

    /**
     * If provided, creates the element as a child of the element with the given id.
     */
    public function setParentElementId(?int $parentElementId): self
    {
        $this->initialized['parentElementId'] = true;
        $this->parentElementId = $parentElementId;

        return $this;
    }

    /**
     * The place in the container.
     */
    public function getPlaceInContainer(): ?string
    {
        return $this->placeInContainer;
    }

    /**
     * The place in the container.
     */
    public function setPlaceInContainer(?string $placeInContainer): self
    {
        $this->initialized['placeInContainer'] = true;
        $this->placeInContainer = $placeInContainer;

        return $this;
    }

    public function getVisibility(): string
    {
        return $this->visibility;
    }

    public function setVisibility(string $visibility): self
    {
        $this->initialized['visibility'] = true;
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * The theme overrides for this element.
     */
    public function getStyles()
    {
        return $this->styles;
    }

    /**
     * The theme overrides for this element.
     */
    public function setStyles($styles): self
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
    public function getStyleBackgroundFile(): ?ChoiceElementCreateElementStyleBackgroundFile
    {
        return $this->styleBackgroundFile;
    }

    /**
     * The background image file.
     */
    public function setStyleBackgroundFile(?ChoiceElementCreateElementStyleBackgroundFile $styleBackgroundFile): self
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

    /**
     * The text label for this choice.
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * The text label for this choice.
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;

        return $this;
    }

    /**
     * This choice's input default value.
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }

    /**
     * This choice's input default value.
     */
    public function setDefaultValue(string $defaultValue): self
    {
        $this->initialized['defaultValue'] = true;
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Whether this form element is a required field.
     */
    public function getRequired(): bool
    {
        return $this->required;
    }

    /**
     * Whether this form element is a required field.
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }

    /**
     * The placeholder text which should be applied to the element.
     */
    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    /**
     * The placeholder text which should be applied to the element.
     */
    public function setPlaceholder(string $placeholder): self
    {
        $this->initialized['placeholder'] = true;
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * @return list<ChoiceOption>
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param list<ChoiceOption> $options
     */
    public function setOptions(array $options): self
    {
        $this->initialized['options'] = true;
        $this->options = $options;

        return $this;
    }

    /**
     * Whether this choice allows users to choose multiple values.
     */
    public function getMultiple(): bool
    {
        return $this->multiple;
    }

    /**
     * Whether this choice allows users to choose multiple values.
     */
    public function setMultiple(bool $multiple): self
    {
        $this->initialized['multiple'] = true;
        $this->multiple = $multiple;

        return $this;
    }

    /**
     * Whether to show the choices as a dropdown.
     */
    public function getShowAsDropdown(): bool
    {
        return $this->showAsDropdown;
    }

    /**
     * Whether to show the choices as a dropdown.
     */
    public function setShowAsDropdown(bool $showAsDropdown): self
    {
        $this->initialized['showAsDropdown'] = true;
        $this->showAsDropdown = $showAsDropdown;

        return $this;
    }

    public function getOptionType(): string
    {
        return $this->optionType;
    }

    public function setOptionType(string $optionType): self
    {
        $this->initialized['optionType'] = true;
        $this->optionType = $optionType;

        return $this;
    }

    /**
     * The value of the option if it is a formula.
     */
    public function getFormulaValue(): string
    {
        return $this->formulaValue;
    }

    /**
     * The value of the option if it is a formula.
     */
    public function setFormulaValue(string $formulaValue): self
    {
        $this->initialized['formulaValue'] = true;
        $this->formulaValue = $formulaValue;

        return $this;
    }

    /**
     * The display name of the option if it is a formula.
     */
    public function getFormulaName(): string
    {
        return $this->formulaName;
    }

    /**
     * The display name of the option if it is a formula.
     */
    public function setFormulaName(string $formulaName): self
    {
        $this->initialized['formulaName'] = true;
        $this->formulaName = $formulaName;

        return $this;
    }
}

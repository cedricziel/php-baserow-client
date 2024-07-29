<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PublicBuilderTheme extends \ArrayObject
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
    protected $primaryColor;
    /**
     * @var string
     */
    protected $secondaryColor;
    /**
     * @var string
     */
    protected $borderColor;
    /**
     * @var string
     */
    protected $mainSuccessColor;
    /**
     * @var string
     */
    protected $mainWarningColor;
    /**
     * @var string
     */
    protected $mainErrorColor;
    /**
     * @var string
     */
    protected $bodyFontFamily;
    /**
     * @var int
     */
    protected $bodyFontSize;
    /**
     * @var string
     */
    protected $bodyTextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $bodyTextAlignment;
    /**
     * @var string
     */
    protected $heading1FontFamily;
    /**
     * @var int
     */
    protected $heading1FontSize;
    /**
     * @var string
     */
    protected $heading1TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading1TextAlignment;
    /**
     * @var string
     */
    protected $heading2FontFamily;
    /**
     * @var int
     */
    protected $heading2FontSize;
    /**
     * @var string
     */
    protected $heading2TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading2TextAlignment;
    /**
     * @var string
     */
    protected $heading3FontFamily;
    /**
     * @var int
     */
    protected $heading3FontSize;
    /**
     * @var string
     */
    protected $heading3TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading3TextAlignment;
    /**
     * @var string
     */
    protected $heading4FontFamily;
    /**
     * @var int
     */
    protected $heading4FontSize;
    /**
     * @var string
     */
    protected $heading4TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading4TextAlignment;
    /**
     * @var string
     */
    protected $heading5FontFamily;
    /**
     * @var int
     */
    protected $heading5FontSize;
    /**
     * @var string
     */
    protected $heading5TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading5TextAlignment;
    /**
     * @var string
     */
    protected $heading6FontFamily;
    /**
     * @var int
     */
    protected $heading6FontSize;
    /**
     * @var string
     */
    protected $heading6TextColor;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $heading6TextAlignment;
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
    /**
     * The image max height.
     *
     * @var int
     */
    protected $imageMaxHeight;
    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     *
     * @var string
     */
    protected $imageAlignment;
    /**
     * The max-width for this image element.
     *
     * @var int
     */
    protected $imageMaxWidth;
    /**
     * The image constraint to apply to this image.
     *
     * `cover` - Cover
     * `contain` - Contain
     * `full-width` - Full Width
     *
     * @var string
     */
    protected $imageConstraint;
    /**
     * The image file.
     *
     * @var CombinedThemeConfigBlocksPageBackgroundFile|null
     */
    protected $pageBackgroundFile;
    /**
     * The background color of the page.
     *
     * @var string
     */
    protected $pageBackgroundColor;
    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     *
     * @var string
     */
    protected $pageBackgroundMode;

    public function getPrimaryColor(): string
    {
        return $this->primaryColor;
    }

    public function setPrimaryColor(string $primaryColor): self
    {
        $this->initialized['primaryColor'] = true;
        $this->primaryColor = $primaryColor;

        return $this;
    }

    public function getSecondaryColor(): string
    {
        return $this->secondaryColor;
    }

    public function setSecondaryColor(string $secondaryColor): self
    {
        $this->initialized['secondaryColor'] = true;
        $this->secondaryColor = $secondaryColor;

        return $this;
    }

    public function getBorderColor(): string
    {
        return $this->borderColor;
    }

    public function setBorderColor(string $borderColor): self
    {
        $this->initialized['borderColor'] = true;
        $this->borderColor = $borderColor;

        return $this;
    }

    public function getMainSuccessColor(): string
    {
        return $this->mainSuccessColor;
    }

    public function setMainSuccessColor(string $mainSuccessColor): self
    {
        $this->initialized['mainSuccessColor'] = true;
        $this->mainSuccessColor = $mainSuccessColor;

        return $this;
    }

    public function getMainWarningColor(): string
    {
        return $this->mainWarningColor;
    }

    public function setMainWarningColor(string $mainWarningColor): self
    {
        $this->initialized['mainWarningColor'] = true;
        $this->mainWarningColor = $mainWarningColor;

        return $this;
    }

    public function getMainErrorColor(): string
    {
        return $this->mainErrorColor;
    }

    public function setMainErrorColor(string $mainErrorColor): self
    {
        $this->initialized['mainErrorColor'] = true;
        $this->mainErrorColor = $mainErrorColor;

        return $this;
    }

    public function getBodyFontFamily(): string
    {
        return $this->bodyFontFamily;
    }

    public function setBodyFontFamily(string $bodyFontFamily): self
    {
        $this->initialized['bodyFontFamily'] = true;
        $this->bodyFontFamily = $bodyFontFamily;

        return $this;
    }

    public function getBodyFontSize(): int
    {
        return $this->bodyFontSize;
    }

    public function setBodyFontSize(int $bodyFontSize): self
    {
        $this->initialized['bodyFontSize'] = true;
        $this->bodyFontSize = $bodyFontSize;

        return $this;
    }

    public function getBodyTextColor(): string
    {
        return $this->bodyTextColor;
    }

    public function setBodyTextColor(string $bodyTextColor): self
    {
        $this->initialized['bodyTextColor'] = true;
        $this->bodyTextColor = $bodyTextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getBodyTextAlignment(): string
    {
        return $this->bodyTextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setBodyTextAlignment(string $bodyTextAlignment): self
    {
        $this->initialized['bodyTextAlignment'] = true;
        $this->bodyTextAlignment = $bodyTextAlignment;

        return $this;
    }

    public function getHeading1FontFamily(): string
    {
        return $this->heading1FontFamily;
    }

    public function setHeading1FontFamily(string $heading1FontFamily): self
    {
        $this->initialized['heading1FontFamily'] = true;
        $this->heading1FontFamily = $heading1FontFamily;

        return $this;
    }

    public function getHeading1FontSize(): int
    {
        return $this->heading1FontSize;
    }

    public function setHeading1FontSize(int $heading1FontSize): self
    {
        $this->initialized['heading1FontSize'] = true;
        $this->heading1FontSize = $heading1FontSize;

        return $this;
    }

    public function getHeading1TextColor(): string
    {
        return $this->heading1TextColor;
    }

    public function setHeading1TextColor(string $heading1TextColor): self
    {
        $this->initialized['heading1TextColor'] = true;
        $this->heading1TextColor = $heading1TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading1TextAlignment(): string
    {
        return $this->heading1TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading1TextAlignment(string $heading1TextAlignment): self
    {
        $this->initialized['heading1TextAlignment'] = true;
        $this->heading1TextAlignment = $heading1TextAlignment;

        return $this;
    }

    public function getHeading2FontFamily(): string
    {
        return $this->heading2FontFamily;
    }

    public function setHeading2FontFamily(string $heading2FontFamily): self
    {
        $this->initialized['heading2FontFamily'] = true;
        $this->heading2FontFamily = $heading2FontFamily;

        return $this;
    }

    public function getHeading2FontSize(): int
    {
        return $this->heading2FontSize;
    }

    public function setHeading2FontSize(int $heading2FontSize): self
    {
        $this->initialized['heading2FontSize'] = true;
        $this->heading2FontSize = $heading2FontSize;

        return $this;
    }

    public function getHeading2TextColor(): string
    {
        return $this->heading2TextColor;
    }

    public function setHeading2TextColor(string $heading2TextColor): self
    {
        $this->initialized['heading2TextColor'] = true;
        $this->heading2TextColor = $heading2TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading2TextAlignment(): string
    {
        return $this->heading2TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading2TextAlignment(string $heading2TextAlignment): self
    {
        $this->initialized['heading2TextAlignment'] = true;
        $this->heading2TextAlignment = $heading2TextAlignment;

        return $this;
    }

    public function getHeading3FontFamily(): string
    {
        return $this->heading3FontFamily;
    }

    public function setHeading3FontFamily(string $heading3FontFamily): self
    {
        $this->initialized['heading3FontFamily'] = true;
        $this->heading3FontFamily = $heading3FontFamily;

        return $this;
    }

    public function getHeading3FontSize(): int
    {
        return $this->heading3FontSize;
    }

    public function setHeading3FontSize(int $heading3FontSize): self
    {
        $this->initialized['heading3FontSize'] = true;
        $this->heading3FontSize = $heading3FontSize;

        return $this;
    }

    public function getHeading3TextColor(): string
    {
        return $this->heading3TextColor;
    }

    public function setHeading3TextColor(string $heading3TextColor): self
    {
        $this->initialized['heading3TextColor'] = true;
        $this->heading3TextColor = $heading3TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading3TextAlignment(): string
    {
        return $this->heading3TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading3TextAlignment(string $heading3TextAlignment): self
    {
        $this->initialized['heading3TextAlignment'] = true;
        $this->heading3TextAlignment = $heading3TextAlignment;

        return $this;
    }

    public function getHeading4FontFamily(): string
    {
        return $this->heading4FontFamily;
    }

    public function setHeading4FontFamily(string $heading4FontFamily): self
    {
        $this->initialized['heading4FontFamily'] = true;
        $this->heading4FontFamily = $heading4FontFamily;

        return $this;
    }

    public function getHeading4FontSize(): int
    {
        return $this->heading4FontSize;
    }

    public function setHeading4FontSize(int $heading4FontSize): self
    {
        $this->initialized['heading4FontSize'] = true;
        $this->heading4FontSize = $heading4FontSize;

        return $this;
    }

    public function getHeading4TextColor(): string
    {
        return $this->heading4TextColor;
    }

    public function setHeading4TextColor(string $heading4TextColor): self
    {
        $this->initialized['heading4TextColor'] = true;
        $this->heading4TextColor = $heading4TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading4TextAlignment(): string
    {
        return $this->heading4TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading4TextAlignment(string $heading4TextAlignment): self
    {
        $this->initialized['heading4TextAlignment'] = true;
        $this->heading4TextAlignment = $heading4TextAlignment;

        return $this;
    }

    public function getHeading5FontFamily(): string
    {
        return $this->heading5FontFamily;
    }

    public function setHeading5FontFamily(string $heading5FontFamily): self
    {
        $this->initialized['heading5FontFamily'] = true;
        $this->heading5FontFamily = $heading5FontFamily;

        return $this;
    }

    public function getHeading5FontSize(): int
    {
        return $this->heading5FontSize;
    }

    public function setHeading5FontSize(int $heading5FontSize): self
    {
        $this->initialized['heading5FontSize'] = true;
        $this->heading5FontSize = $heading5FontSize;

        return $this;
    }

    public function getHeading5TextColor(): string
    {
        return $this->heading5TextColor;
    }

    public function setHeading5TextColor(string $heading5TextColor): self
    {
        $this->initialized['heading5TextColor'] = true;
        $this->heading5TextColor = $heading5TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading5TextAlignment(): string
    {
        return $this->heading5TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading5TextAlignment(string $heading5TextAlignment): self
    {
        $this->initialized['heading5TextAlignment'] = true;
        $this->heading5TextAlignment = $heading5TextAlignment;

        return $this;
    }

    public function getHeading6FontFamily(): string
    {
        return $this->heading6FontFamily;
    }

    public function setHeading6FontFamily(string $heading6FontFamily): self
    {
        $this->initialized['heading6FontFamily'] = true;
        $this->heading6FontFamily = $heading6FontFamily;

        return $this;
    }

    public function getHeading6FontSize(): int
    {
        return $this->heading6FontSize;
    }

    public function setHeading6FontSize(int $heading6FontSize): self
    {
        $this->initialized['heading6FontSize'] = true;
        $this->heading6FontSize = $heading6FontSize;

        return $this;
    }

    public function getHeading6TextColor(): string
    {
        return $this->heading6TextColor;
    }

    public function setHeading6TextColor(string $heading6TextColor): self
    {
        $this->initialized['heading6TextColor'] = true;
        $this->heading6TextColor = $heading6TextColor;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getHeading6TextAlignment(): string
    {
        return $this->heading6TextAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setHeading6TextAlignment(string $heading6TextAlignment): self
    {
        $this->initialized['heading6TextAlignment'] = true;
        $this->heading6TextAlignment = $heading6TextAlignment;

        return $this;
    }

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

    /**
     * The image max height.
     */
    public function getImageMaxHeight(): int
    {
        return $this->imageMaxHeight;
    }

    /**
     * The image max height.
     */
    public function setImageMaxHeight(int $imageMaxHeight): self
    {
        $this->initialized['imageMaxHeight'] = true;
        $this->imageMaxHeight = $imageMaxHeight;

        return $this;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function getImageAlignment(): string
    {
        return $this->imageAlignment;
    }

    /**
     * * `left` - Left
     * `center` - Center
     * `right` - Right.
     */
    public function setImageAlignment(string $imageAlignment): self
    {
        $this->initialized['imageAlignment'] = true;
        $this->imageAlignment = $imageAlignment;

        return $this;
    }

    /**
     * The max-width for this image element.
     */
    public function getImageMaxWidth(): int
    {
        return $this->imageMaxWidth;
    }

    /**
     * The max-width for this image element.
     */
    public function setImageMaxWidth(int $imageMaxWidth): self
    {
        $this->initialized['imageMaxWidth'] = true;
        $this->imageMaxWidth = $imageMaxWidth;

        return $this;
    }

    /**
     * The image constraint to apply to this image.
     *
     * `cover` - Cover
     * `contain` - Contain
     * `full-width` - Full Width
     */
    public function getImageConstraint(): string
    {
        return $this->imageConstraint;
    }

    /**
     * The image constraint to apply to this image.
     *
     * `cover` - Cover
     * `contain` - Contain
     * `full-width` - Full Width
     */
    public function setImageConstraint(string $imageConstraint): self
    {
        $this->initialized['imageConstraint'] = true;
        $this->imageConstraint = $imageConstraint;

        return $this;
    }

    /**
     * The image file.
     */
    public function getPageBackgroundFile(): ?CombinedThemeConfigBlocksPageBackgroundFile
    {
        return $this->pageBackgroundFile;
    }

    /**
     * The image file.
     */
    public function setPageBackgroundFile(?CombinedThemeConfigBlocksPageBackgroundFile $pageBackgroundFile): self
    {
        $this->initialized['pageBackgroundFile'] = true;
        $this->pageBackgroundFile = $pageBackgroundFile;

        return $this;
    }

    /**
     * The background color of the page.
     */
    public function getPageBackgroundColor(): string
    {
        return $this->pageBackgroundColor;
    }

    /**
     * The background color of the page.
     */
    public function setPageBackgroundColor(string $pageBackgroundColor): self
    {
        $this->initialized['pageBackgroundColor'] = true;
        $this->pageBackgroundColor = $pageBackgroundColor;

        return $this;
    }

    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     */
    public function getPageBackgroundMode(): string
    {
        return $this->pageBackgroundMode;
    }

    /**
     * The mode of the background image.
     *
     * `tile` - Tile
     * `fill` - Fill
     * `fit` - Fit
     */
    public function setPageBackgroundMode(string $pageBackgroundMode): self
    {
        $this->initialized['pageBackgroundMode'] = true;
        $this->pageBackgroundMode = $pageBackgroundMode;

        return $this;
    }
}

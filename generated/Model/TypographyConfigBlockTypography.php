<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class TypographyConfigBlockTypography extends \ArrayObject
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
}

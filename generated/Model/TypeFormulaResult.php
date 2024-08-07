<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class TypeFormulaResult extends \ArrayObject
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
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     *
     * @var mixed|null
     */
    protected $dateFormat;
    /**
     * Indicates if the field also includes a time.
     *
     * @var bool|null
     */
    protected $dateIncludeTime;
    /**
     * Indicates if the time zone should be shown.
     *
     * @var bool|null
     */
    protected $dateShowTzinfo;
    /**
     * @var mixed|null
     */
    protected $arrayFormulaType;
    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     *
     * @var mixed|null
     */
    protected $dateTimeFormat;
    /**
     * @var bool
     */
    protected $nullable;
    /**
     * Force a timezone for the field overriding user profile settings.
     *
     * @var string|null
     */
    protected $dateForceTimezone;
    /**
     * @var string|null
     */
    protected $error;
    /**
     * The amount of digits allowed after the point.
     *
     * `0` - 1
     * `1` - 1.0
     * `2` - 1.00
     * `3` - 1.000
     * `4` - 1.0000
     * `5` - 1.00000
     * `6` - 1.000000
     * `7` - 1.0000000
     * `8` - 1.00000000
     * `9` - 1.000000000
     * `10` - 1.0000000000
     *
     * @var mixed|null
     */
    protected $numberDecimalPlaces;
    /**
     * The format of the duration.
     *
     * `h:mm` - hours:minutes
     * `h:mm:ss` - hours:minutes:seconds
     * `h:mm:ss.s` - hours:minutes:seconds:deciseconds
     * `h:mm:ss.ss` - hours:minutes:seconds:centiseconds
     * `h:mm:ss.sss` - hours:minutes:seconds:milliseconds
     * `d h` - days:hours
     * `d h:mm` - days:hours:minutes
     * `d h:mm:ss` - days:hours:minutes:seconds
     * `d h mm` - days:hours:minutes:with_spaces
     * `d h mm ss` - days:hours:minutes:seconds:with_spaces
     *
     * @var mixed|null
     */
    protected $durationFormat;
    /**
     * @var string
     */
    protected $formula;
    /**
     * * `invalid` - invalid
     * `text` - text
     * `char` - char
     * `button` - button
     * `link` - link
     * `date_interval` - date_interval
     * `duration` - duration
     * `date` - date
     * `boolean` - boolean
     * `number` - number
     * `array` - array
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `single_file` - single_file.
     *
     * @var string
     */
    protected $formulaType;

    /**
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * EU (20/02/2020), US (02/20/2020) or ISO (2020-02-20).
     *
     * `EU` - European (D/M/Y)
     * `US` - US (M/D/Y)
     * `ISO` - ISO (Y-M-D)
     */
    public function setDateFormat($dateFormat): self
    {
        $this->initialized['dateFormat'] = true;
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * Indicates if the field also includes a time.
     */
    public function getDateIncludeTime(): ?bool
    {
        return $this->dateIncludeTime;
    }

    /**
     * Indicates if the field also includes a time.
     */
    public function setDateIncludeTime(?bool $dateIncludeTime): self
    {
        $this->initialized['dateIncludeTime'] = true;
        $this->dateIncludeTime = $dateIncludeTime;

        return $this;
    }

    /**
     * Indicates if the time zone should be shown.
     */
    public function getDateShowTzinfo(): ?bool
    {
        return $this->dateShowTzinfo;
    }

    /**
     * Indicates if the time zone should be shown.
     */
    public function setDateShowTzinfo(?bool $dateShowTzinfo): self
    {
        $this->initialized['dateShowTzinfo'] = true;
        $this->dateShowTzinfo = $dateShowTzinfo;

        return $this;
    }

    public function getArrayFormulaType()
    {
        return $this->arrayFormulaType;
    }

    public function setArrayFormulaType($arrayFormulaType): self
    {
        $this->initialized['arrayFormulaType'] = true;
        $this->arrayFormulaType = $arrayFormulaType;

        return $this;
    }

    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     */
    public function getDateTimeFormat()
    {
        return $this->dateTimeFormat;
    }

    /**
     * 24 (14:30) or 12 (02:30 PM).
     *
     * `24` - 24 hour
     * `12` - 12 hour
     */
    public function setDateTimeFormat($dateTimeFormat): self
    {
        $this->initialized['dateTimeFormat'] = true;
        $this->dateTimeFormat = $dateTimeFormat;

        return $this;
    }

    public function getNullable(): bool
    {
        return $this->nullable;
    }

    public function setNullable(bool $nullable): self
    {
        $this->initialized['nullable'] = true;
        $this->nullable = $nullable;

        return $this;
    }

    /**
     * Force a timezone for the field overriding user profile settings.
     */
    public function getDateForceTimezone(): ?string
    {
        return $this->dateForceTimezone;
    }

    /**
     * Force a timezone for the field overriding user profile settings.
     */
    public function setDateForceTimezone(?string $dateForceTimezone): self
    {
        $this->initialized['dateForceTimezone'] = true;
        $this->dateForceTimezone = $dateForceTimezone;

        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }

    /**
     * The amount of digits allowed after the point.
     *
     * `0` - 1
     * `1` - 1.0
     * `2` - 1.00
     * `3` - 1.000
     * `4` - 1.0000
     * `5` - 1.00000
     * `6` - 1.000000
     * `7` - 1.0000000
     * `8` - 1.00000000
     * `9` - 1.000000000
     * `10` - 1.0000000000
     */
    public function getNumberDecimalPlaces()
    {
        return $this->numberDecimalPlaces;
    }

    /**
     * The amount of digits allowed after the point.
     *
     * `0` - 1
     * `1` - 1.0
     * `2` - 1.00
     * `3` - 1.000
     * `4` - 1.0000
     * `5` - 1.00000
     * `6` - 1.000000
     * `7` - 1.0000000
     * `8` - 1.00000000
     * `9` - 1.000000000
     * `10` - 1.0000000000
     */
    public function setNumberDecimalPlaces($numberDecimalPlaces): self
    {
        $this->initialized['numberDecimalPlaces'] = true;
        $this->numberDecimalPlaces = $numberDecimalPlaces;

        return $this;
    }

    /**
     * The format of the duration.
     *
     * `h:mm` - hours:minutes
     * `h:mm:ss` - hours:minutes:seconds
     * `h:mm:ss.s` - hours:minutes:seconds:deciseconds
     * `h:mm:ss.ss` - hours:minutes:seconds:centiseconds
     * `h:mm:ss.sss` - hours:minutes:seconds:milliseconds
     * `d h` - days:hours
     * `d h:mm` - days:hours:minutes
     * `d h:mm:ss` - days:hours:minutes:seconds
     * `d h mm` - days:hours:minutes:with_spaces
     * `d h mm ss` - days:hours:minutes:seconds:with_spaces
     */
    public function getDurationFormat()
    {
        return $this->durationFormat;
    }

    /**
     * The format of the duration.
     *
     * `h:mm` - hours:minutes
     * `h:mm:ss` - hours:minutes:seconds
     * `h:mm:ss.s` - hours:minutes:seconds:deciseconds
     * `h:mm:ss.ss` - hours:minutes:seconds:centiseconds
     * `h:mm:ss.sss` - hours:minutes:seconds:milliseconds
     * `d h` - days:hours
     * `d h:mm` - days:hours:minutes
     * `d h:mm:ss` - days:hours:minutes:seconds
     * `d h mm` - days:hours:minutes:with_spaces
     * `d h mm ss` - days:hours:minutes:seconds:with_spaces
     */
    public function setDurationFormat($durationFormat): self
    {
        $this->initialized['durationFormat'] = true;
        $this->durationFormat = $durationFormat;

        return $this;
    }

    public function getFormula(): string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): self
    {
        $this->initialized['formula'] = true;
        $this->formula = $formula;

        return $this;
    }

    /**
     * * `invalid` - invalid
     * `text` - text
     * `char` - char
     * `button` - button
     * `link` - link
     * `date_interval` - date_interval
     * `duration` - duration
     * `date` - date
     * `boolean` - boolean
     * `number` - number
     * `array` - array
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `single_file` - single_file.
     */
    public function getFormulaType(): string
    {
        return $this->formulaType;
    }

    /**
     * * `invalid` - invalid
     * `text` - text
     * `char` - char
     * `button` - button
     * `link` - link
     * `date_interval` - date_interval
     * `duration` - duration
     * `date` - date
     * `boolean` - boolean
     * `number` - number
     * `array` - array
     * `single_select` - single_select
     * `multiple_select` - multiple_select
     * `single_file` - single_file.
     */
    public function setFormulaType(string $formulaType): self
    {
        $this->initialized['formulaType'] = true;
        $this->formulaType = $formulaType;

        return $this;
    }
}

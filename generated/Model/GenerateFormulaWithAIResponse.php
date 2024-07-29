<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class GenerateFormulaWithAIResponse extends \ArrayObject
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
     * The formula generated by the AI.
     *
     * @var string
     */
    protected $formula;

    /**
     * The formula generated by the AI.
     */
    public function getFormula(): string
    {
        return $this->formula;
    }

    /**
     * The formula generated by the AI.
     */
    public function setFormula(string $formula): self
    {
        $this->initialized['formula'] = true;
        $this->formula = $formula;

        return $this;
    }
}

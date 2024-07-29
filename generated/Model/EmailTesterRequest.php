<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class EmailTesterRequest extends \ArrayObject
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
    protected $targetEmail;

    public function getTargetEmail(): string
    {
        return $this->targetEmail;
    }

    public function setTargetEmail(string $targetEmail): self
    {
        $this->initialized['targetEmail'] = true;
        $this->targetEmail = $targetEmail;

        return $this;
    }
}

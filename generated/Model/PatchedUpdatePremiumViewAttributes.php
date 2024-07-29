<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PatchedUpdatePremiumViewAttributes extends \ArrayObject
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
     * @var bool
     */
    protected $showLogo;

    public function getShowLogo(): bool
    {
        return $this->showLogo;
    }

    public function setShowLogo(bool $showLogo): self
    {
        $this->initialized['showLogo'] = true;
        $this->showLogo = $showLogo;

        return $this;
    }
}

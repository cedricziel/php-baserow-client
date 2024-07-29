<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PatchedAccount extends \ArrayObject
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
    protected $firstName;
    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     *
     * @var string
     */
    protected $language;
    /**
     * The maximum frequency at which the user wants to receive email notifications.
     *
     * `instant` - instant
     * `daily` - daily
     * `weekly` - weekly
     * `never` - never
     *
     * @var string
     */
    protected $emailNotificationFrequency;
    /**
     * Indicates whether the user has completed the onboarding.
     *
     * @var bool
     */
    protected $completedOnboarding;

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * An ISO 639 language code (with optional variant) selected by the user. Ex: en-GB.
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The maximum frequency at which the user wants to receive email notifications.
     *
     * `instant` - instant
     * `daily` - daily
     * `weekly` - weekly
     * `never` - never
     */
    public function getEmailNotificationFrequency(): string
    {
        return $this->emailNotificationFrequency;
    }

    /**
     * The maximum frequency at which the user wants to receive email notifications.
     *
     * `instant` - instant
     * `daily` - daily
     * `weekly` - weekly
     * `never` - never
     */
    public function setEmailNotificationFrequency(string $emailNotificationFrequency): self
    {
        $this->initialized['emailNotificationFrequency'] = true;
        $this->emailNotificationFrequency = $emailNotificationFrequency;

        return $this;
    }

    /**
     * Indicates whether the user has completed the onboarding.
     */
    public function getCompletedOnboarding(): bool
    {
        return $this->completedOnboarding;
    }

    /**
     * Indicates whether the user has completed the onboarding.
     */
    public function setCompletedOnboarding(bool $completedOnboarding): self
    {
        $this->initialized['completedOnboarding'] = true;
        $this->completedOnboarding = $completedOnboarding;

        return $this;
    }
}

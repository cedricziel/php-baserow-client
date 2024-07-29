<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class EmailTesterResponse extends \ArrayObject
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
     * Whether or not the test email was sent successfully.
     *
     * @var bool
     */
    protected $succeeded;
    /**
     * The full stack trace and error message if the test email failed.
     *
     * @var string|null
     */
    protected $errorStack;
    /**
     * The type of error that occurred if the test email failed.
     *
     * @var string|null
     */
    protected $errorType;
    /**
     * A short message describing the error that occured if the test email failed.
     *
     * @var string|null
     */
    protected $error;

    /**
     * Whether or not the test email was sent successfully.
     */
    public function getSucceeded(): bool
    {
        return $this->succeeded;
    }

    /**
     * Whether or not the test email was sent successfully.
     */
    public function setSucceeded(bool $succeeded): self
    {
        $this->initialized['succeeded'] = true;
        $this->succeeded = $succeeded;

        return $this;
    }

    /**
     * The full stack trace and error message if the test email failed.
     */
    public function getErrorStack(): ?string
    {
        return $this->errorStack;
    }

    /**
     * The full stack trace and error message if the test email failed.
     */
    public function setErrorStack(?string $errorStack): self
    {
        $this->initialized['errorStack'] = true;
        $this->errorStack = $errorStack;

        return $this;
    }

    /**
     * The type of error that occurred if the test email failed.
     */
    public function getErrorType(): ?string
    {
        return $this->errorType;
    }

    /**
     * The type of error that occurred if the test email failed.
     */
    public function setErrorType(?string $errorType): self
    {
        $this->initialized['errorType'] = true;
        $this->errorType = $errorType;

        return $this;
    }

    /**
     * A short message describing the error that occured if the test email failed.
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * A short message describing the error that occured if the test email failed.
     */
    public function setError(?string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;

        return $this;
    }
}

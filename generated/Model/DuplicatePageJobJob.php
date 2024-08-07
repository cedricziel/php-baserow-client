<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class DuplicatePageJobJob extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * The type of the job.
     *
     * @var string
     */
    protected $type;
    /**
     * A percentage indicating how far along the job is. 100 means that it's finished.
     *
     * @var int
     */
    protected $progressPercentage;
    /**
     * Indicates the state of the import job.
     *
     * @var string
     */
    protected $state;
    /**
     * A human readable error message indicating what went wrong.
     *
     * @var string
     */
    protected $humanReadableError;
    /**
     * @var DuplicatePageJobJobOriginalPage
     */
    protected $originalPage;
    /**
     * @var DuplicatePageJobJobDuplicatedPage
     */
    protected $duplicatedPage;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * The type of the job.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the job.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * A percentage indicating how far along the job is. 100 means that it's finished.
     */
    public function getProgressPercentage(): int
    {
        return $this->progressPercentage;
    }

    /**
     * A percentage indicating how far along the job is. 100 means that it's finished.
     */
    public function setProgressPercentage(int $progressPercentage): self
    {
        $this->initialized['progressPercentage'] = true;
        $this->progressPercentage = $progressPercentage;

        return $this;
    }

    /**
     * Indicates the state of the import job.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * Indicates the state of the import job.
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;

        return $this;
    }

    /**
     * A human readable error message indicating what went wrong.
     */
    public function getHumanReadableError(): string
    {
        return $this->humanReadableError;
    }

    /**
     * A human readable error message indicating what went wrong.
     */
    public function setHumanReadableError(string $humanReadableError): self
    {
        $this->initialized['humanReadableError'] = true;
        $this->humanReadableError = $humanReadableError;

        return $this;
    }

    public function getOriginalPage(): DuplicatePageJobJobOriginalPage
    {
        return $this->originalPage;
    }

    public function setOriginalPage(DuplicatePageJobJobOriginalPage $originalPage): self
    {
        $this->initialized['originalPage'] = true;
        $this->originalPage = $originalPage;

        return $this;
    }

    public function getDuplicatedPage(): DuplicatePageJobJobDuplicatedPage
    {
        return $this->duplicatedPage;
    }

    public function setDuplicatedPage(DuplicatePageJobJobDuplicatedPage $duplicatedPage): self
    {
        $this->initialized['duplicatedPage'] = true;
        $this->duplicatedPage = $duplicatedPage;

        return $this;
    }
}

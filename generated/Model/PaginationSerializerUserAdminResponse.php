<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PaginationSerializerUserAdminResponse extends \ArrayObject
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
     * The total amount of results.
     *
     * @var int
     */
    protected $count;
    /**
     * URL to the next page.
     *
     * @var string|null
     */
    protected $next;
    /**
     * URL to the previous page.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * @var list<UserAdminResponse>
     */
    protected $results;

    /**
     * The total amount of results.
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * The total amount of results.
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;

        return $this;
    }

    /**
     * URL to the next page.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * URL to the next page.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * URL to the previous page.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * URL to the previous page.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * @return list<UserAdminResponse>
     */
    public function getResults(): array
    {
        return $this->results;
    }

    /**
     * @param list<UserAdminResponse> $results
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;

        return $this;
    }
}

<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PatchedTableWebhookUpdateRequest extends \ArrayObject
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
     * The URL that must be called when the webhook is triggered.
     *
     * @var string
     */
    protected $url;
    /**
     * Indicates whether this webhook should listen to all events.
     *
     * @var bool
     */
    protected $includeAllEvents;
    /**
     * A list containing the events that will trigger this webhook.
     *
     * @var list<string>
     */
    protected $events;
    /**
     * The request method that be used when the event occurs.
     *
     * `POST` - Post
     * `GET` - Get
     * `PUT` - Put
     * `PATCH` - Patch
     * `DELETE` - Delete
     *
     * @var string
     */
    protected $requestMethod;
    /**
     * The additional headers as an object where the key is the name and the value the value.
     *
     * @var array<string, mixed>
     */
    protected $headers;
    /**
     * An internal name of the webhook.
     *
     * @var string
     */
    protected $name;
    /**
     * Indicates whether the web hook is active. When a webhook has failed multiple times, it will automatically be deactivated.
     *
     * @var bool
     */
    protected $active;
    /**
     * Indicates whether the field names must be used as payload key instead of the id.
     *
     * @var bool
     */
    protected $useUserFieldNames;

    /**
     * The URL that must be called when the webhook is triggered.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * The URL that must be called when the webhook is triggered.
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * Indicates whether this webhook should listen to all events.
     */
    public function getIncludeAllEvents(): bool
    {
        return $this->includeAllEvents;
    }

    /**
     * Indicates whether this webhook should listen to all events.
     */
    public function setIncludeAllEvents(bool $includeAllEvents): self
    {
        $this->initialized['includeAllEvents'] = true;
        $this->includeAllEvents = $includeAllEvents;

        return $this;
    }

    /**
     * A list containing the events that will trigger this webhook.
     *
     * @return list<string>
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * A list containing the events that will trigger this webhook.
     *
     * @param list<string> $events
     */
    public function setEvents(array $events): self
    {
        $this->initialized['events'] = true;
        $this->events = $events;

        return $this;
    }

    /**
     * The request method that be used when the event occurs.
     *
     * `POST` - Post
     * `GET` - Get
     * `PUT` - Put
     * `PATCH` - Patch
     * `DELETE` - Delete
     */
    public function getRequestMethod(): string
    {
        return $this->requestMethod;
    }

    /**
     * The request method that be used when the event occurs.
     *
     * `POST` - Post
     * `GET` - Get
     * `PUT` - Put
     * `PATCH` - Patch
     * `DELETE` - Delete
     */
    public function setRequestMethod(string $requestMethod): self
    {
        $this->initialized['requestMethod'] = true;
        $this->requestMethod = $requestMethod;

        return $this;
    }

    /**
     * The additional headers as an object where the key is the name and the value the value.
     *
     * @return array<string, mixed>
     */
    public function getHeaders(): iterable
    {
        return $this->headers;
    }

    /**
     * The additional headers as an object where the key is the name and the value the value.
     *
     * @param array<string, mixed> $headers
     */
    public function setHeaders(iterable $headers): self
    {
        $this->initialized['headers'] = true;
        $this->headers = $headers;

        return $this;
    }

    /**
     * An internal name of the webhook.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * An internal name of the webhook.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Indicates whether the web hook is active. When a webhook has failed multiple times, it will automatically be deactivated.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Indicates whether the web hook is active. When a webhook has failed multiple times, it will automatically be deactivated.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * Indicates whether the field names must be used as payload key instead of the id.
     */
    public function getUseUserFieldNames(): bool
    {
        return $this->useUserFieldNames;
    }

    /**
     * Indicates whether the field names must be used as payload key instead of the id.
     */
    public function setUseUserFieldNames(bool $useUserFieldNames): self
    {
        $this->initialized['useUserFieldNames'] = true;
        $this->useUserFieldNames = $useUserFieldNames;

        return $this;
    }
}

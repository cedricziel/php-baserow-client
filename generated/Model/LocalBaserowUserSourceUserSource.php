<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class LocalBaserowUserSourceUserSource extends \ArrayObject
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
     * @var int
     */
    protected $applicationId;
    /**
     * The Integration used to establish the connection with the service.
     *
     * @var int|null
     */
    protected $integrationId;
    /**
     * The type of the user_source.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $name;
    /**
     * Lowest first.
     *
     * @var string
     */
    protected $order;
    /**
     * Auth providers related to this user source.
     *
     * @var list<mixed>
     */
    protected $authProviders;
    /**
     * The id of the Baserow table we want the data for.
     *
     * @var int|null
     */
    protected $tableId;
    /**
     * The id of the field to use as email for the user account.
     *
     * @var int|null
     */
    protected $emailFieldId;
    /**
     * The id of the field that contains the user name.
     *
     * @var int|null
     */
    protected $nameFieldId;
    /**
     * The id of the field that contains the user role.
     *
     * @var int|null
     */
    protected $roleFieldId;

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

    public function getApplicationId(): int
    {
        return $this->applicationId;
    }

    public function setApplicationId(int $applicationId): self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * The Integration used to establish the connection with the service.
     */
    public function getIntegrationId(): ?int
    {
        return $this->integrationId;
    }

    /**
     * The Integration used to establish the connection with the service.
     */
    public function setIntegrationId(?int $integrationId): self
    {
        $this->initialized['integrationId'] = true;
        $this->integrationId = $integrationId;

        return $this;
    }

    /**
     * The type of the user_source.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the user_source.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Lowest first.
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Lowest first.
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * Auth providers related to this user source.
     *
     * @return list<mixed>
     */
    public function getAuthProviders(): array
    {
        return $this->authProviders;
    }

    /**
     * Auth providers related to this user source.
     *
     * @param list<mixed> $authProviders
     */
    public function setAuthProviders(array $authProviders): self
    {
        $this->initialized['authProviders'] = true;
        $this->authProviders = $authProviders;

        return $this;
    }

    /**
     * The id of the Baserow table we want the data for.
     */
    public function getTableId(): ?int
    {
        return $this->tableId;
    }

    /**
     * The id of the Baserow table we want the data for.
     */
    public function setTableId(?int $tableId): self
    {
        $this->initialized['tableId'] = true;
        $this->tableId = $tableId;

        return $this;
    }

    /**
     * The id of the field to use as email for the user account.
     */
    public function getEmailFieldId(): ?int
    {
        return $this->emailFieldId;
    }

    /**
     * The id of the field to use as email for the user account.
     */
    public function setEmailFieldId(?int $emailFieldId): self
    {
        $this->initialized['emailFieldId'] = true;
        $this->emailFieldId = $emailFieldId;

        return $this;
    }

    /**
     * The id of the field that contains the user name.
     */
    public function getNameFieldId(): ?int
    {
        return $this->nameFieldId;
    }

    /**
     * The id of the field that contains the user name.
     */
    public function setNameFieldId(?int $nameFieldId): self
    {
        $this->initialized['nameFieldId'] = true;
        $this->nameFieldId = $nameFieldId;

        return $this;
    }

    /**
     * The id of the field that contains the user role.
     */
    public function getRoleFieldId(): ?int
    {
        return $this->roleFieldId;
    }

    /**
     * The id of the field that contains the user role.
     */
    public function setRoleFieldId(?int $roleFieldId): self
    {
        $this->initialized['roleFieldId'] = true;
        $this->roleFieldId = $roleFieldId;

        return $this;
    }
}

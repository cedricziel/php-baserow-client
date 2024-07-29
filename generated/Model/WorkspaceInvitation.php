<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class WorkspaceInvitation extends \ArrayObject
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
     * DEPRECATED: Please use the functionally identical `workspace` instead as this field is being removed in the future.
     *
     * @var int
     */
    protected $group;
    /**
     * The workspace that the user will get access to once the invitation is accepted.
     *
     * @var int
     */
    protected $workspace;
    /**
     * The email address of the user that the invitation is meant for. Only a user with that email address can accept it.
     *
     * @var string
     */
    protected $email;
    /**
     * The permissions that the user is going to get within the workspace after accepting the invitation.
     *
     * @var string
     */
    protected $permissions;
    /**
     * An optional message that the invitor can provide. This will be visible to the receiver of the invitation.
     *
     * @var string
     */
    protected $message;
    /**
     * @var \DateTime
     */
    protected $createdOn;

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
     * DEPRECATED: Please use the functionally identical `workspace` instead as this field is being removed in the future.
     */
    public function getGroup(): int
    {
        return $this->group;
    }

    /**
     * DEPRECATED: Please use the functionally identical `workspace` instead as this field is being removed in the future.
     */
    public function setGroup(int $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    /**
     * The workspace that the user will get access to once the invitation is accepted.
     */
    public function getWorkspace(): int
    {
        return $this->workspace;
    }

    /**
     * The workspace that the user will get access to once the invitation is accepted.
     */
    public function setWorkspace(int $workspace): self
    {
        $this->initialized['workspace'] = true;
        $this->workspace = $workspace;

        return $this;
    }

    /**
     * The email address of the user that the invitation is meant for. Only a user with that email address can accept it.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * The email address of the user that the invitation is meant for. Only a user with that email address can accept it.
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * The permissions that the user is going to get within the workspace after accepting the invitation.
     */
    public function getPermissions(): string
    {
        return $this->permissions;
    }

    /**
     * The permissions that the user is going to get within the workspace after accepting the invitation.
     */
    public function setPermissions(string $permissions): self
    {
        $this->initialized['permissions'] = true;
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * An optional message that the invitor can provide. This will be visible to the receiver of the invitation.
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * An optional message that the invitor can provide. This will be visible to the receiver of the invitation.
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    public function setCreatedOn(\DateTime $createdOn): self
    {
        $this->initialized['createdOn'] = true;
        $this->createdOn = $createdOn;

        return $this;
    }
}

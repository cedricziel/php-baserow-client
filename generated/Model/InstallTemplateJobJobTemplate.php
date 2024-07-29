<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class InstallTemplateJobJobTemplate extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * The icon class name that can be used for displaying purposes.
     *
     * @var string
     */
    protected $icon;
    /**
     * Keywords related to the template that can be used for search.
     *
     * @var string
     */
    protected $keywords;
    /**
     * @var string
     */
    protected $groupId;
    /**
     * The group containing the applications related to the template. The read endpoints related to that group are publicly accessible for preview purposes.
     *
     * @var int|null
     */
    protected $workspaceId;
    /**
     * Indicates if the template must be selected by default. The web-frontend automatically selects the first `is_default` template that it can find.
     *
     * @var string
     */
    protected $isDefault;

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
     * The icon class name that can be used for displaying purposes.
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    /**
     * The icon class name that can be used for displaying purposes.
     */
    public function setIcon(string $icon): self
    {
        $this->initialized['icon'] = true;
        $this->icon = $icon;

        return $this;
    }

    /**
     * Keywords related to the template that can be used for search.
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * Keywords related to the template that can be used for search.
     */
    public function setKeywords(string $keywords): self
    {
        $this->initialized['keywords'] = true;
        $this->keywords = $keywords;

        return $this;
    }

    public function getGroupId(): string
    {
        return $this->groupId;
    }

    public function setGroupId(string $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * The group containing the applications related to the template. The read endpoints related to that group are publicly accessible for preview purposes.
     */
    public function getWorkspaceId(): ?int
    {
        return $this->workspaceId;
    }

    /**
     * The group containing the applications related to the template. The read endpoints related to that group are publicly accessible for preview purposes.
     */
    public function setWorkspaceId(?int $workspaceId): self
    {
        $this->initialized['workspaceId'] = true;
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * Indicates if the template must be selected by default. The web-frontend automatically selects the first `is_default` template that it can find.
     */
    public function getIsDefault(): string
    {
        return $this->isDefault;
    }

    /**
     * Indicates if the template must be selected by default. The web-frontend automatically selects the first `is_default` template that it can find.
     */
    public function setIsDefault(string $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;

        return $this;
    }
}

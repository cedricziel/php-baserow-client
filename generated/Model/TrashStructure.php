<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class TrashStructure extends \ArrayObject
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
     * An array of group trash structure records. Deprecated, please use `workspaces`.
     *
     * @var list<TrashStructureGroup>
     */
    protected $groups;
    /**
     * An array of workspace trash structure records.
     *
     * @var list<TrashStructureGroup>
     */
    protected $workspaces;

    /**
     * An array of group trash structure records. Deprecated, please use `workspaces`.
     *
     * @return list<TrashStructureGroup>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * An array of group trash structure records. Deprecated, please use `workspaces`.
     *
     * @param list<TrashStructureGroup> $groups
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;

        return $this;
    }

    /**
     * An array of workspace trash structure records.
     *
     * @return list<TrashStructureGroup>
     */
    public function getWorkspaces(): array
    {
        return $this->workspaces;
    }

    /**
     * An array of workspace trash structure records.
     *
     * @param list<TrashStructureGroup> $workspaces
     */
    public function setWorkspaces(array $workspaces): self
    {
        $this->initialized['workspaces'] = true;
        $this->workspaces = $workspaces;

        return $this;
    }
}

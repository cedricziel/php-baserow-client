<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PatchedUndoRedoRequestScopes extends \ArrayObject
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
     * If set to true then actions registered in the root scope will be included when undoing or redoing.
     *
     * @var bool|null
     */
    protected $root;
    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $workspace;
    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $group;
    /**
     * If set to an applications id then any actions directly related to that application will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $application;
    /**
     * If set to a table id then any actions directly related to that table will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $table;
    /**
     * If set to an view id then any actions directly related to that view will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $view;
    /**
     * If set to a workspace id then any actions directly related to that workspace will be be included when undoing or redoing.
     *
     * @var int|null
     */
    protected $teamsInWorkspace;

    /**
     * If set to true then actions registered in the root scope will be included when undoing or redoing.
     */
    public function getRoot(): ?bool
    {
        return $this->root;
    }

    /**
     * If set to true then actions registered in the root scope will be included when undoing or redoing.
     */
    public function setRoot(?bool $root): self
    {
        $this->initialized['root'] = true;
        $this->root = $root;

        return $this;
    }

    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function getWorkspace(): ?int
    {
        return $this->workspace;
    }

    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function setWorkspace(?int $workspace): self
    {
        $this->initialized['workspace'] = true;
        $this->workspace = $workspace;

        return $this;
    }

    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function getGroup(): ?int
    {
        return $this->group;
    }

    /**
     * If set to a workspaces id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function setGroup(?int $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;

        return $this;
    }

    /**
     * If set to an applications id then any actions directly related to that application will be be included when undoing or redoing.
     */
    public function getApplication(): ?int
    {
        return $this->application;
    }

    /**
     * If set to an applications id then any actions directly related to that application will be be included when undoing or redoing.
     */
    public function setApplication(?int $application): self
    {
        $this->initialized['application'] = true;
        $this->application = $application;

        return $this;
    }

    /**
     * If set to a table id then any actions directly related to that table will be be included when undoing or redoing.
     */
    public function getTable(): ?int
    {
        return $this->table;
    }

    /**
     * If set to a table id then any actions directly related to that table will be be included when undoing or redoing.
     */
    public function setTable(?int $table): self
    {
        $this->initialized['table'] = true;
        $this->table = $table;

        return $this;
    }

    /**
     * If set to an view id then any actions directly related to that view will be be included when undoing or redoing.
     */
    public function getView(): ?int
    {
        return $this->view;
    }

    /**
     * If set to an view id then any actions directly related to that view will be be included when undoing or redoing.
     */
    public function setView(?int $view): self
    {
        $this->initialized['view'] = true;
        $this->view = $view;

        return $this;
    }

    /**
     * If set to a workspace id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function getTeamsInWorkspace(): ?int
    {
        return $this->teamsInWorkspace;
    }

    /**
     * If set to a workspace id then any actions directly related to that workspace will be be included when undoing or redoing.
     */
    public function setTeamsInWorkspace(?int $teamsInWorkspace): self
    {
        $this->initialized['teamsInWorkspace'] = true;
        $this->teamsInWorkspace = $teamsInWorkspace;

        return $this;
    }
}

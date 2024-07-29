<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class InstallTemplateJobCreateJob extends \ArrayObject
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
     * The type of the job.
     *
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_snapshot` - create_snapshot
     * `restore_snapshot` - restore_snapshot
     * `airtable` - airtable
     * `file_import` - file_import
     * `duplicate_table` - duplicate_table
     * `duplicate_field` - duplicate_field
     * `duplicate_page` - duplicate_page
     * `publish_domain` - publish_domain
     * `audit_log_export` - audit_log_export
     *
     * @var string
     */
    protected $type;
    /**
     * The ID of the group where the template will be installed.
     *
     * @var int
     */
    protected $groupId;
    /**
     * The ID of the workspace where the template will be installed.
     *
     * @var int
     */
    protected $workspaceId;
    /**
     * The template ID that will be installed.
     *
     * @var int
     */
    protected $templateId;

    /**
     * The type of the job.
     *
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_snapshot` - create_snapshot
     * `restore_snapshot` - restore_snapshot
     * `airtable` - airtable
     * `file_import` - file_import
     * `duplicate_table` - duplicate_table
     * `duplicate_field` - duplicate_field
     * `duplicate_page` - duplicate_page
     * `publish_domain` - publish_domain
     * `audit_log_export` - audit_log_export
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the job.
     *
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_snapshot` - create_snapshot
     * `restore_snapshot` - restore_snapshot
     * `airtable` - airtable
     * `file_import` - file_import
     * `duplicate_table` - duplicate_table
     * `duplicate_field` - duplicate_field
     * `duplicate_page` - duplicate_page
     * `publish_domain` - publish_domain
     * `audit_log_export` - audit_log_export
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The ID of the group where the template will be installed.
     */
    public function getGroupId(): int
    {
        return $this->groupId;
    }

    /**
     * The ID of the group where the template will be installed.
     */
    public function setGroupId(int $groupId): self
    {
        $this->initialized['groupId'] = true;
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * The ID of the workspace where the template will be installed.
     */
    public function getWorkspaceId(): int
    {
        return $this->workspaceId;
    }

    /**
     * The ID of the workspace where the template will be installed.
     */
    public function setWorkspaceId(int $workspaceId): self
    {
        $this->initialized['workspaceId'] = true;
        $this->workspaceId = $workspaceId;

        return $this;
    }

    /**
     * The template ID that will be installed.
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }

    /**
     * The template ID that will be installed.
     */
    public function setTemplateId(int $templateId): self
    {
        $this->initialized['templateId'] = true;
        $this->templateId = $templateId;

        return $this;
    }
}

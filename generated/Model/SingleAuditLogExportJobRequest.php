<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class SingleAuditLogExportJobRequest extends \ArrayObject
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
     * @var string
     */
    protected $url;
    /**
     * The character set to use when creating the export file.
     *
     * `utf-8` - utf-8
     * `iso-8859-6` - iso-8859-6
     * `windows-1256` - windows-1256
     * `iso-8859-4` - iso-8859-4
     * `windows-1257` - windows-1257
     * `iso-8859-14` - iso-8859-14
     * `iso-8859-2` - iso-8859-2
     * `windows-1250` - windows-1250
     * `gbk` - gbk
     * `gb18030` - gb18030
     * `big5` - big5
     * `koi8-r` - koi8-r
     * `koi8-u` - koi8-u
     * `iso-8859-5` - iso-8859-5
     * `windows-1251` - windows-1251
     * `x-mac-cyrillic` - mac-cyrillic
     * `iso-8859-7` - iso-8859-7
     * `windows-1253` - windows-1253
     * `iso-8859-8` - iso-8859-8
     * `windows-1255` - windows-1255
     * `euc-jp` - euc-jp
     * `iso-2022-jp` - iso-2022-jp
     * `shift-jis` - shift-jis
     * `euc-kr` - euc-kr
     * `macintosh` - macintosh
     * `iso-8859-10` - iso-8859-10
     * `iso-8859-16` - iso-8859-16
     * `windows-874` - cp874
     * `windows-1254` - windows-1254
     * `windows-1258` - windows-1258
     * `iso-8859-1` - iso-8859-1
     * `windows-1252` - windows-1252
     * `iso-8859-3` - iso-8859-3
     *
     * @var string
     */
    protected $exportCharset = 'utf-8';
    /**
     * The value used to separate columns in the resulting csv file.
     *
     * `,` - ,
     * `;` - ;
     * `|` - |
     * `tab` -
     * `record_separator` - 
     * `unit_separator` - 
     *
     * @var string
     */
    protected $csvColumnSeparator = ',';
    /**
     * Whether or not to generate a header row at the top of the csv file.
     *
     * @var bool
     */
    protected $csvFirstRowHeader = true;
    /**
     * Optional: The user to filter the audit log by.
     *
     * @var int
     */
    protected $filterUserId;
    /**
     * Optional: The workspace to filter the audit log by.
     *
     * @var int
     */
    protected $filterWorkspaceId;
    /**
     * Optional: The action type to filter the audit log by.
     *
     * `create_group` - create_group
     * `delete_group` - delete_group
     * `update_group` - update_group
     * `order_groups` - order_groups
     * `create_application` - create_application
     * `update_application` - update_application
     * `delete_application` - delete_application
     * `order_applications` - order_applications
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_group_invitation` - create_group_invitation
     * `delete_group_invitation` - delete_group_invitation
     * `accept_group_invitation` - accept_group_invitation
     * `reject_group_invitation` - reject_group_invitation
     * `update_group_invitation_permissions` - update_group_invitation_permissions
     * `leave_group` - leave_group
     * `create_initial_workspace` - create_initial_workspace
     * `create_snapshot` - create_snapshot
     * `delete_snapshot` - delete_snapshot
     * `restore_snapshot` - restore_snapshot
     * `empty_trash` - empty_trash
     * `restore_from_trash` - restore_from_trash
     * `create_user` - create_user
     * `update_user` - update_user
     * `schedule_user_deletion` - schedule_user_deletion
     * `cancel_user_deletion` - cancel_user_deletion
     * `sign_in_user` - sign_in_user
     * `change_user_password` - change_user_password
     * `send_reset_user_password` - send_reset_user_password
     * `reset_user_password` - reset_user_password
     * `send_verify_email` - send_verify_email
     * `verify_email` - verify_email
     * `create_db_token` - create_db_token
     * `update_db_token_name` - update_db_token_name
     * `update_db_token_permissions` - update_db_token_permissions
     * `rotate_db_token_key` - rotate_db_token_key
     * `delete_db_token_key` - delete_db_token_key
     * `create_webhook` - create_webhook
     * `delete_webhook` - delete_webhook
     * `update_webhook` - update_webhook
     * `export_table` - export_table
     * `import_database_from_airtable` - import_database_from_airtable
     * `create_table` - create_table
     * `delete_table` - delete_table
     * `order_tables` - order_tables
     * `update_table` - update_table
     * `duplicate_table` - duplicate_table
     * `create_row` - create_row
     * `create_rows` - create_rows
     * `import_rows` - import_rows
     * `delete_row` - delete_row
     * `delete_rows` - delete_rows
     * `move_row` - move_row
     * `update_row` - update_row
     * `update_rows` - update_rows
     * `create_view` - create_view
     * `duplicate_view` - duplicate_view
     * `delete_view` - delete_view
     * `order_views` - order_views
     * `update_view` - update_view
     * `create_view_filter` - create_view_filter
     * `update_view_filter` - update_view_filter
     * `delete_view_filter` - delete_view_filter
     * `create_view_sort` - create_view_sort
     * `update_view_sort` - update_view_sort
     * `delete_view_sort` - delete_view_sort
     * `create_view_group` - create_view_group
     * `update_view_group` - update_view_group
     * `delete_view_group` - delete_view_group
     * `rotate_view_slug` - rotate_view_slug
     * `update_view_field_options` - update_view_field_options
     * `create_decoration` - create_decoration
     * `update_decoration` - update_decoration
     * `delete_decoration` - delete_decoration
     * `create_view_filter_group` - create_view_filter_group
     * `update_view_filter_group` - update_view_filter_group
     * `delete_view_filter_group` - delete_view_filter_group
     * `create_field` - create_field
     * `delete_field` - delete_field
     * `update_field` - update_field
     * `duplicate_field` - duplicate_field
     * `generate_formula_with_ai` - generate_formula_with_ai
     * `create_row_comment` - create_row_comment
     * `delete_row_comment` - delete_row_comment
     * `update_row_comment` - update_row_comment
     * `create_team` - create_team
     * `update_team` - update_team
     * `delete_team` - delete_team
     * `create_team_subject` - create_team_subject
     * `delete_team_subject` - delete_team_subject
     * `batch_assign_role` - batch_assign_role
     *
     * @var string
     */
    protected $filterActionType;
    /**
     * Optional: The start date to filter the audit log by.
     *
     * @var \DateTime
     */
    protected $filterFromTimestamp;
    /**
     * Optional: The end date to filter the audit log by.
     *
     * @var \DateTime
     */
    protected $filterToTimestamp;
    /**
     * Optional: A comma separated list of column names to exclude from the export. Available options are `user_email, user_id, workspace_name, workspace_id, type, description, timestamp, ip_address`.
     *
     * @var string
     */
    protected $excludeColumns;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;

        return $this;
    }

    /**
     * The character set to use when creating the export file.
     *
     * `utf-8` - utf-8
     * `iso-8859-6` - iso-8859-6
     * `windows-1256` - windows-1256
     * `iso-8859-4` - iso-8859-4
     * `windows-1257` - windows-1257
     * `iso-8859-14` - iso-8859-14
     * `iso-8859-2` - iso-8859-2
     * `windows-1250` - windows-1250
     * `gbk` - gbk
     * `gb18030` - gb18030
     * `big5` - big5
     * `koi8-r` - koi8-r
     * `koi8-u` - koi8-u
     * `iso-8859-5` - iso-8859-5
     * `windows-1251` - windows-1251
     * `x-mac-cyrillic` - mac-cyrillic
     * `iso-8859-7` - iso-8859-7
     * `windows-1253` - windows-1253
     * `iso-8859-8` - iso-8859-8
     * `windows-1255` - windows-1255
     * `euc-jp` - euc-jp
     * `iso-2022-jp` - iso-2022-jp
     * `shift-jis` - shift-jis
     * `euc-kr` - euc-kr
     * `macintosh` - macintosh
     * `iso-8859-10` - iso-8859-10
     * `iso-8859-16` - iso-8859-16
     * `windows-874` - cp874
     * `windows-1254` - windows-1254
     * `windows-1258` - windows-1258
     * `iso-8859-1` - iso-8859-1
     * `windows-1252` - windows-1252
     * `iso-8859-3` - iso-8859-3
     */
    public function getExportCharset(): string
    {
        return $this->exportCharset;
    }

    /**
     * The character set to use when creating the export file.
     *
     * `utf-8` - utf-8
     * `iso-8859-6` - iso-8859-6
     * `windows-1256` - windows-1256
     * `iso-8859-4` - iso-8859-4
     * `windows-1257` - windows-1257
     * `iso-8859-14` - iso-8859-14
     * `iso-8859-2` - iso-8859-2
     * `windows-1250` - windows-1250
     * `gbk` - gbk
     * `gb18030` - gb18030
     * `big5` - big5
     * `koi8-r` - koi8-r
     * `koi8-u` - koi8-u
     * `iso-8859-5` - iso-8859-5
     * `windows-1251` - windows-1251
     * `x-mac-cyrillic` - mac-cyrillic
     * `iso-8859-7` - iso-8859-7
     * `windows-1253` - windows-1253
     * `iso-8859-8` - iso-8859-8
     * `windows-1255` - windows-1255
     * `euc-jp` - euc-jp
     * `iso-2022-jp` - iso-2022-jp
     * `shift-jis` - shift-jis
     * `euc-kr` - euc-kr
     * `macintosh` - macintosh
     * `iso-8859-10` - iso-8859-10
     * `iso-8859-16` - iso-8859-16
     * `windows-874` - cp874
     * `windows-1254` - windows-1254
     * `windows-1258` - windows-1258
     * `iso-8859-1` - iso-8859-1
     * `windows-1252` - windows-1252
     * `iso-8859-3` - iso-8859-3
     */
    public function setExportCharset(string $exportCharset): self
    {
        $this->initialized['exportCharset'] = true;
        $this->exportCharset = $exportCharset;

        return $this;
    }

    /**
     * The value used to separate columns in the resulting csv file.
     *
     * `,` - ,
     * `;` - ;
     * `|` - |
     * `tab` -
     * `record_separator` - 
     * `unit_separator` - 
     */
    public function getCsvColumnSeparator(): string
    {
        return $this->csvColumnSeparator;
    }

    /**
     * The value used to separate columns in the resulting csv file.
     *
     * `,` - ,
     * `;` - ;
     * `|` - |
     * `tab` -
     * `record_separator` - 
     * `unit_separator` - 
     */
    public function setCsvColumnSeparator(string $csvColumnSeparator): self
    {
        $this->initialized['csvColumnSeparator'] = true;
        $this->csvColumnSeparator = $csvColumnSeparator;

        return $this;
    }

    /**
     * Whether or not to generate a header row at the top of the csv file.
     */
    public function getCsvFirstRowHeader(): bool
    {
        return $this->csvFirstRowHeader;
    }

    /**
     * Whether or not to generate a header row at the top of the csv file.
     */
    public function setCsvFirstRowHeader(bool $csvFirstRowHeader): self
    {
        $this->initialized['csvFirstRowHeader'] = true;
        $this->csvFirstRowHeader = $csvFirstRowHeader;

        return $this;
    }

    /**
     * Optional: The user to filter the audit log by.
     */
    public function getFilterUserId(): int
    {
        return $this->filterUserId;
    }

    /**
     * Optional: The user to filter the audit log by.
     */
    public function setFilterUserId(int $filterUserId): self
    {
        $this->initialized['filterUserId'] = true;
        $this->filterUserId = $filterUserId;

        return $this;
    }

    /**
     * Optional: The workspace to filter the audit log by.
     */
    public function getFilterWorkspaceId(): int
    {
        return $this->filterWorkspaceId;
    }

    /**
     * Optional: The workspace to filter the audit log by.
     */
    public function setFilterWorkspaceId(int $filterWorkspaceId): self
    {
        $this->initialized['filterWorkspaceId'] = true;
        $this->filterWorkspaceId = $filterWorkspaceId;

        return $this;
    }

    /**
     * Optional: The action type to filter the audit log by.
     *
     * `create_group` - create_group
     * `delete_group` - delete_group
     * `update_group` - update_group
     * `order_groups` - order_groups
     * `create_application` - create_application
     * `update_application` - update_application
     * `delete_application` - delete_application
     * `order_applications` - order_applications
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_group_invitation` - create_group_invitation
     * `delete_group_invitation` - delete_group_invitation
     * `accept_group_invitation` - accept_group_invitation
     * `reject_group_invitation` - reject_group_invitation
     * `update_group_invitation_permissions` - update_group_invitation_permissions
     * `leave_group` - leave_group
     * `create_initial_workspace` - create_initial_workspace
     * `create_snapshot` - create_snapshot
     * `delete_snapshot` - delete_snapshot
     * `restore_snapshot` - restore_snapshot
     * `empty_trash` - empty_trash
     * `restore_from_trash` - restore_from_trash
     * `create_user` - create_user
     * `update_user` - update_user
     * `schedule_user_deletion` - schedule_user_deletion
     * `cancel_user_deletion` - cancel_user_deletion
     * `sign_in_user` - sign_in_user
     * `change_user_password` - change_user_password
     * `send_reset_user_password` - send_reset_user_password
     * `reset_user_password` - reset_user_password
     * `send_verify_email` - send_verify_email
     * `verify_email` - verify_email
     * `create_db_token` - create_db_token
     * `update_db_token_name` - update_db_token_name
     * `update_db_token_permissions` - update_db_token_permissions
     * `rotate_db_token_key` - rotate_db_token_key
     * `delete_db_token_key` - delete_db_token_key
     * `create_webhook` - create_webhook
     * `delete_webhook` - delete_webhook
     * `update_webhook` - update_webhook
     * `export_table` - export_table
     * `import_database_from_airtable` - import_database_from_airtable
     * `create_table` - create_table
     * `delete_table` - delete_table
     * `order_tables` - order_tables
     * `update_table` - update_table
     * `duplicate_table` - duplicate_table
     * `create_row` - create_row
     * `create_rows` - create_rows
     * `import_rows` - import_rows
     * `delete_row` - delete_row
     * `delete_rows` - delete_rows
     * `move_row` - move_row
     * `update_row` - update_row
     * `update_rows` - update_rows
     * `create_view` - create_view
     * `duplicate_view` - duplicate_view
     * `delete_view` - delete_view
     * `order_views` - order_views
     * `update_view` - update_view
     * `create_view_filter` - create_view_filter
     * `update_view_filter` - update_view_filter
     * `delete_view_filter` - delete_view_filter
     * `create_view_sort` - create_view_sort
     * `update_view_sort` - update_view_sort
     * `delete_view_sort` - delete_view_sort
     * `create_view_group` - create_view_group
     * `update_view_group` - update_view_group
     * `delete_view_group` - delete_view_group
     * `rotate_view_slug` - rotate_view_slug
     * `update_view_field_options` - update_view_field_options
     * `create_decoration` - create_decoration
     * `update_decoration` - update_decoration
     * `delete_decoration` - delete_decoration
     * `create_view_filter_group` - create_view_filter_group
     * `update_view_filter_group` - update_view_filter_group
     * `delete_view_filter_group` - delete_view_filter_group
     * `create_field` - create_field
     * `delete_field` - delete_field
     * `update_field` - update_field
     * `duplicate_field` - duplicate_field
     * `generate_formula_with_ai` - generate_formula_with_ai
     * `create_row_comment` - create_row_comment
     * `delete_row_comment` - delete_row_comment
     * `update_row_comment` - update_row_comment
     * `create_team` - create_team
     * `update_team` - update_team
     * `delete_team` - delete_team
     * `create_team_subject` - create_team_subject
     * `delete_team_subject` - delete_team_subject
     * `batch_assign_role` - batch_assign_role
     */
    public function getFilterActionType(): string
    {
        return $this->filterActionType;
    }

    /**
     * Optional: The action type to filter the audit log by.
     *
     * `create_group` - create_group
     * `delete_group` - delete_group
     * `update_group` - update_group
     * `order_groups` - order_groups
     * `create_application` - create_application
     * `update_application` - update_application
     * `delete_application` - delete_application
     * `order_applications` - order_applications
     * `duplicate_application` - duplicate_application
     * `install_template` - install_template
     * `create_group_invitation` - create_group_invitation
     * `delete_group_invitation` - delete_group_invitation
     * `accept_group_invitation` - accept_group_invitation
     * `reject_group_invitation` - reject_group_invitation
     * `update_group_invitation_permissions` - update_group_invitation_permissions
     * `leave_group` - leave_group
     * `create_initial_workspace` - create_initial_workspace
     * `create_snapshot` - create_snapshot
     * `delete_snapshot` - delete_snapshot
     * `restore_snapshot` - restore_snapshot
     * `empty_trash` - empty_trash
     * `restore_from_trash` - restore_from_trash
     * `create_user` - create_user
     * `update_user` - update_user
     * `schedule_user_deletion` - schedule_user_deletion
     * `cancel_user_deletion` - cancel_user_deletion
     * `sign_in_user` - sign_in_user
     * `change_user_password` - change_user_password
     * `send_reset_user_password` - send_reset_user_password
     * `reset_user_password` - reset_user_password
     * `send_verify_email` - send_verify_email
     * `verify_email` - verify_email
     * `create_db_token` - create_db_token
     * `update_db_token_name` - update_db_token_name
     * `update_db_token_permissions` - update_db_token_permissions
     * `rotate_db_token_key` - rotate_db_token_key
     * `delete_db_token_key` - delete_db_token_key
     * `create_webhook` - create_webhook
     * `delete_webhook` - delete_webhook
     * `update_webhook` - update_webhook
     * `export_table` - export_table
     * `import_database_from_airtable` - import_database_from_airtable
     * `create_table` - create_table
     * `delete_table` - delete_table
     * `order_tables` - order_tables
     * `update_table` - update_table
     * `duplicate_table` - duplicate_table
     * `create_row` - create_row
     * `create_rows` - create_rows
     * `import_rows` - import_rows
     * `delete_row` - delete_row
     * `delete_rows` - delete_rows
     * `move_row` - move_row
     * `update_row` - update_row
     * `update_rows` - update_rows
     * `create_view` - create_view
     * `duplicate_view` - duplicate_view
     * `delete_view` - delete_view
     * `order_views` - order_views
     * `update_view` - update_view
     * `create_view_filter` - create_view_filter
     * `update_view_filter` - update_view_filter
     * `delete_view_filter` - delete_view_filter
     * `create_view_sort` - create_view_sort
     * `update_view_sort` - update_view_sort
     * `delete_view_sort` - delete_view_sort
     * `create_view_group` - create_view_group
     * `update_view_group` - update_view_group
     * `delete_view_group` - delete_view_group
     * `rotate_view_slug` - rotate_view_slug
     * `update_view_field_options` - update_view_field_options
     * `create_decoration` - create_decoration
     * `update_decoration` - update_decoration
     * `delete_decoration` - delete_decoration
     * `create_view_filter_group` - create_view_filter_group
     * `update_view_filter_group` - update_view_filter_group
     * `delete_view_filter_group` - delete_view_filter_group
     * `create_field` - create_field
     * `delete_field` - delete_field
     * `update_field` - update_field
     * `duplicate_field` - duplicate_field
     * `generate_formula_with_ai` - generate_formula_with_ai
     * `create_row_comment` - create_row_comment
     * `delete_row_comment` - delete_row_comment
     * `update_row_comment` - update_row_comment
     * `create_team` - create_team
     * `update_team` - update_team
     * `delete_team` - delete_team
     * `create_team_subject` - create_team_subject
     * `delete_team_subject` - delete_team_subject
     * `batch_assign_role` - batch_assign_role
     */
    public function setFilterActionType(string $filterActionType): self
    {
        $this->initialized['filterActionType'] = true;
        $this->filterActionType = $filterActionType;

        return $this;
    }

    /**
     * Optional: The start date to filter the audit log by.
     */
    public function getFilterFromTimestamp(): \DateTime
    {
        return $this->filterFromTimestamp;
    }

    /**
     * Optional: The start date to filter the audit log by.
     */
    public function setFilterFromTimestamp(\DateTime $filterFromTimestamp): self
    {
        $this->initialized['filterFromTimestamp'] = true;
        $this->filterFromTimestamp = $filterFromTimestamp;

        return $this;
    }

    /**
     * Optional: The end date to filter the audit log by.
     */
    public function getFilterToTimestamp(): \DateTime
    {
        return $this->filterToTimestamp;
    }

    /**
     * Optional: The end date to filter the audit log by.
     */
    public function setFilterToTimestamp(\DateTime $filterToTimestamp): self
    {
        $this->initialized['filterToTimestamp'] = true;
        $this->filterToTimestamp = $filterToTimestamp;

        return $this;
    }

    /**
     * Optional: A comma separated list of column names to exclude from the export. Available options are `user_email, user_id, workspace_name, workspace_id, type, description, timestamp, ip_address`.
     */
    public function getExcludeColumns(): string
    {
        return $this->excludeColumns;
    }

    /**
     * Optional: A comma separated list of column names to exclude from the export. Available options are `user_email, user_id, workspace_name, workspace_id, type, description, timestamp, ip_address`.
     */
    public function setExcludeColumns(string $excludeColumns): self
    {
        $this->initialized['excludeColumns'] = true;
        $this->excludeColumns = $excludeColumns;

        return $this;
    }
}

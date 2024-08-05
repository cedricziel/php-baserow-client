# php-baserow-client

An API client for baserow.io

```shell
composer require cedricziel/baserow
```

## Docs

```php
use CedricZiel\Baserow\Client;

$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);

// list all rows in table id 42
$client->listDatabaseTableRows(42);
```

### email_tester - post /api/_health/email/


Sends a test email to the provided email address. Useful for testing Baserow's email configuration as errors are clearly returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->emailTester();
```

### full_health_check - get /api/_health/full/


Runs a full health check testing as many services and systems as possible. These health checks can be expensive operations such as writing files to storage etc.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->fullHealthCheck();
```

### audit_log_list - get /api/admin/audit-log/


Lists all audit log entries for the given workspace id.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogList();
```

### audit_log_action_types - get /api/admin/audit-log/action-types/


List all distinct action types related to an audit log entry.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogActionTypes();
```

### async_audit_log_export - post /api/admin/audit-log/export/


Creates a job to export the filtered audit log to a CSV file.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->asyncAuditLogExport();
```

### audit_log_users - get /api/admin/audit-log/users/


List all users that have performed an action in the audit log.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogUsers();
```

### audit_log_workspaces - get /api/admin/audit-log/workspaces/


List all distinct workspace names related to an audit log entry.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogWorkspaces();
```

### list_auth_providers - get /api/admin/auth-provider/


List all the available authentication providers.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listAuthProviders();
```

### create_auth_provider - post /api/admin/auth-provider/


Creates a new authentication provider. This can be used to enable authentication with a third party service like Google or Facebook.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createAuthProvider();
```

### get_auth_provider - get /api/admin/auth-provider/{auth_provider_id}/


Get an authentication provider.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getAuthProvider();
```

### update_auth_provider - patch /api/admin/auth-provider/{auth_provider_id}/


Updates a new authentication provider. This can be used to enable authentication with a third party service like Google or Facebook.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateAuthProvider();
```

### delete_auth_provider - delete /api/admin/auth-provider/{auth_provider_id}/


Delete an authentication provider.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteAuthProvider();
```

### admin_dashboard - get /api/admin/dashboard/


Returns the new and active users for the last 24 hours, 7 days and 30 days. The `previous_` values are the values of the period before, so for example `previous_new_users_last_24_hours` are the new users that signed up from 48 to 24 hours ago. It can be used to calculate an increase or decrease in the amount of signups. A list of the new and active users for every day for the last 30 days is also included.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminDashboard();
```

### admin_list_groups - get /api/admin/groups/


**This endpoint has been deprecated and replaced with a new endpoint, [admin_list_workspaces](#tag/Admin/operation/admin_list_workspaces).**

**Support for this endpoint will end in 2024.**

 Returns all groups with detailed information on each group, if the requesting user is staff.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminListGroups();
```

### admin_delete_group - delete /api/admin/groups/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [admin_delete_workspace](#tag/Admin/operation/admin_delete_workspace).**

**Support for this endpoint will end in 2024.**

 Deletes the specified group and the applications inside that group, if the requesting user is staff. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminDeleteGroup();
```

### admin_list_users - get /api/admin/users/


Returns all users with detailed information on each user, if the requesting user is staff. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminListUsers();
```

### admin_create_user - post /api/admin/users/


Creates and returns a new user if the requesting user is staff. This works even if new signups are disabled. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminCreateUser();
```

### admin_edit_user - patch /api/admin/users/{user_id}/


Updates specified user attributes and returns the updated user if the requesting user is staff. You cannot update yourself to no longer be an admin or active. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminEditUser();
```

### admin_delete_user - delete /api/admin/users/{user_id}/


Deletes the specified user, if the requesting user has admin permissions. You cannot delete yourself. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminDeleteUser();
```

### admin_impersonate_user - post /api/admin/users/impersonate/


This endpoint allows staff to impersonate another user by requesting a JWT token and user object. The requesting user must have staff access in order to do this. It's not possible to impersonate a superuser or staff.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminImpersonateUser();
```

### admin_list_workspaces - get /api/admin/workspaces/


Returns all workspaces with detailed information on each workspace, if the requesting user is staff.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminListWorkspaces();
```

### admin_delete_workspace - delete /api/admin/workspaces/{workspace_id}/


Deletes the specified workspace and the applications inside that workspace, if the requesting user is staff. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminDeleteWorkspace();
```

### list_application_integrations - get /api/application/{application_id}/integrations/


Lists all the integrations of the application related to the provided parameter if the user has access to the related application's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listApplicationIntegrations();
```

### create_application_integration - post /api/application/{application_id}/integrations/


Creates a new integration

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createApplicationIntegration();
```

### list_application_user_source_users - get /api/application/{application_id}/list-user-source-users/


List per user sources the first 5 users available.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listApplicationUserSourceUsers();
```

### list_application_user_sources - get /api/application/{application_id}/user-sources/


Lists all the user_sources of the application related to the provided parameter if the user has access to the related application's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listApplicationUserSources();
```

### create_application_user_source - post /api/application/{application_id}/user-sources/


Creates a new user_source

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createApplicationUserSource();
```

### list_application_user_source_roles - get /api/application/{application_id}/user-sources/roles/


Lists all the roles of the application related to the provided parameter if the user has access to the related application's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listApplicationUserSourceRoles();
```

### list_all_applications - get /api/applications/


Lists all the applications that the authorized user has access to. The properties that belong to the application can differ per type. An application always belongs to a single workspace. All the applications of the workspaces that the user has access to are going to be listed here.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listAllApplications();
```

### workspace_get_application - get /api/applications/{application_id}/


Returns the requested application if the authorized user is in the application's workspace. The properties that belong to the application can differ per type.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceGetApplication();
```

### update_application - patch /api/applications/{application_id}/


Updates the existing application related to the provided `application_id` param if the authorized user is in the application's workspace. It is not possible to change the type, but properties like the name can be changed.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateApplication();
```

### delete_application - delete /api/applications/{application_id}/


Deletes an application if the authorized user is in the application's workspace. All the related children are also going to be deleted. For example in case of a database application all the underlying tables, fields, views and rows are going to be deleted.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteApplication();
```

### duplicate_application_async - post /api/applications/{application_id}/duplicate/async/


Duplicate an application if the authorized user is in the application's workspace. All the related children are also going to be duplicated. For example in case of a database application all the underlying tables, fields, views and rows are going to be duplicated.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateApplicationAsync();
```

### group_list_applications - get /api/applications/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_list_applications](#tag/Applications/operation/workspace_list_applications).**

**Support for this endpoint will end in 2024.**

 Lists all the applications of the group related to the provided `group_id` parameter if the authorized user is in that group. If the group is related to a template, then this endpoint will be publicly accessible. The properties that belong to the application can differ per type. An application always belongs to a single group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupListApplications();
```

### group_create_application - post /api/applications/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_create_application](#tag/Applications/operation/workspace_create_application).**

**Support for this endpoint will end in 2024.**

 Creates a new application based on the provided type. The newly created application is going to be added to the group related to the provided `group_id` parameter. If the authorized user does not belong to the group an error will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupCreateApplication();
```

### group_order_applications - post /api/applications/group/{group_id}/order/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_order_applications](#tag/Applications/operation/workspace_order_applications).**

**Support for this endpoint will end in 2024.**

 Changes the order of the provided application ids to the matching position that the id has in the list. If the authorized user does not belong to the group it will be ignored. The order of the not provided tables will be set to `0`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupOrderApplications();
```

### workspace_list_applications - get /api/applications/workspace/{workspace_id}/


Lists all the applications of the workspace related to the provided `workspace_id` parameter if the authorized user is in that workspace. If theworkspace is related to a template, then this endpoint will be publicly accessible. The properties that belong to the application can differ per type. An application always belongs to a single workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceListApplications();
```

### workspace_create_application - post /api/applications/workspace/{workspace_id}/


Creates a new application based on the provided type. The newly created application is going to be added to the workspace related to the provided `workspace_id` parameter. If the authorized user does not belong to the workspace an error will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceCreateApplication();
```

### workspace_order_applications - post /api/applications/workspace/{workspace_id}/order/


Changes the order of the provided application ids to the matching position that the id has in the list. If the authorized user does not belong to the workspace it will be ignored. The order of the not provided tables will be set to `0`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceOrderApplications();
```

### audit_log_list_2 - get /api/audit-log/


Lists all audit log entries for the given workspace id.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogList2();
```

### audit_log_action_types_2 - get /api/audit-log/action-types/


List all distinct action types related to an audit log entry.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogActionTypes2();
```

### async_audit_log_export_2 - post /api/audit-log/export/


Creates a job to export the filtered audit log to a CSV file.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->asyncAuditLogExport2();
```

### audit_log_users_2 - get /api/audit-log/users/


List all users that have performed an action in the audit log.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogUsers2();
```

### audit_log_workspaces_2 - get /api/audit-log/workspaces/


List all distinct workspace names related to an audit log entry.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->auditLogWorkspaces2();
```

### list_auth_providers_login_options - get /api/auth-provider/login-options/


Lists the available login options for the configured authentication providers.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listAuthProvidersLoginOptions();
```

### get_builder_domains - get /api/builder/{builder_id}/domains/


Gets all the domains of a builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getBuilderDomains();
```

### create_builder_domain - post /api/builder/{builder_id}/domains/


Creates a new domain for an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createBuilderDomain();
```

### order_builder_domains - post /api/builder/{builder_id}/domains/order/


Apply a new order to the domains of a builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderBuilderDomains();
```

### create_builder_page - post /api/builder/{builder_id}/pages/


Creates a new page for an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createBuilderPage();
```

### order_builder_pages - post /api/builder/{builder_id}/pages/order/


Apply a new order to the pages of a builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderBuilderPages();
```

### update_builder_theme - patch /api/builder/{builder_id}/theme/


Updates the theme properties for the provided id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderTheme();
```

### update_builder_page_data_source - patch /api/builder/data-source/{data_source_id}/


Updates an existing builder data_source.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderPageDataSource();
```

### delete_builder_page_data_source - delete /api/builder/data-source/{data_source_id}/


Deletes the data_source related by the given id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteBuilderPageDataSource();
```

### dispatch_builder_page_data_source - post /api/builder/data-source/{data_source_id}/dispatch/


Dispatches the service of the related data_source and returns the result.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->dispatchBuilderPageDataSource();
```

### move_builder_page_data_source - patch /api/builder/data_source/{data_source_id}/move/


Moves the data_source in the page before another data_source or at the end of the page if no before data_source is given. The data_sources must belong to the same page.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->moveBuilderPageDataSource();
```

### update_builder_domain - patch /api/builder/domains/{domain_id}/


Updates an existing domain of an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderDomain();
```

### delete_builder_domain - delete /api/builder/domains/{domain_id}/


Deletes an existing domain of an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteBuilderDomain();
```

### publish_builder_domain - post /api/builder/domains/{domain_id}/publish/async/


This endpoint starts an asynchronous job to publish the builder. The job clones the current version of the given builder and publish it for the given domain.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publishBuilderDomain();
```

### ask_public_builder_domain_exists - get /api/builder/domains/ask-public-domain-exists/


This endpoint can be used to check whether a domain exists for SSL certificate purposes. It's compatible with the Caddy on_demand TLS as described here: https://caddyserver.com/docs/json/apps/tls/automation/on_demand/ask/. It will respond with a 200 status code if it exists or a 404 if it doesn't exist.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->askPublicBuilderDomainExists();
```

### get_public_builder_by_id - get /api/builder/domains/published/by_id/{builder_id}/


Returns the public serialized version of the builder and its pages for the given builder id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getPublicBuilderById();
```

### get_public_builder_by_domain_name - get /api/builder/domains/published/by_name/{domain_name}/


Returns the public serialized version of the builder for the given domain name and its pages .

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getPublicBuilderByDomainName();
```

### list_public_builder_page_data_sources - get /api/builder/domains/published/page/{page_id}/data_sources/


Lists all the data_sources of the page related to the provided parameter if the builder is public.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listPublicBuilderPageDataSources();
```

### list_public_builder_page_elements - get /api/builder/domains/published/page/{page_id}/elements/


Lists all the elements of the page related to the provided parameter. If the user is Anonymous, the page must belong to a published builder instance to being accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listPublicBuilderPageElements();
```

### list_public_builder_page_workflow_actions - get /api/builder/domains/published/page/{page_id}/workflow_actions/


Lists all the workflow actions with their public accessible data. Some configuration might be omitted for security reasons such as passwords or PII.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listPublicBuilderPageWorkflowActions();
```

### update_builder_page_element - patch /api/builder/element/{element_id}/


Updates an existing builder element.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderPageElement();
```

### delete_builder_page_element - delete /api/builder/element/{element_id}/


Deletes the element related by the given id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteBuilderPageElement();
```

### duplicate_builder_page_element - post /api/builder/element/{element_id}/duplicate/


Duplicates an element and all of the elements children and the associated workflow actions as well.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateBuilderPageElement();
```

### move_builder_page_element - patch /api/builder/element/{element_id}/move/


Moves the element in the page before another element or at the end of the page if no before element is given. The elements must belong to the same page.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->moveBuilderPageElement();
```

### list_builder_page_data_sources - get /api/builder/page/{page_id}/data-sources/


Lists all the data_sources of the page related to the provided parameter if the user has access to the related builder's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listBuilderPageDataSources();
```

### create_builder_page_data_source - post /api/builder/page/{page_id}/data-sources/


Creates a new builder data_source

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createBuilderPageDataSource();
```

### dispatch_builder_page_data_sources - post /api/builder/page/{page_id}/dispatch-data-sources/


Dispatches the service of the related page data_sources

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->dispatchBuilderPageDataSources();
```

### list_builder_page_elements - get /api/builder/page/{page_id}/elements/


Lists all the elements of the page related to the provided parameter if the user has access to the related builder's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listBuilderPageElements();
```

### create_builder_page_element - post /api/builder/page/{page_id}/elements/


Creates a new builder element

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createBuilderPageElement();
```

### list_builder_page_workflow_actions - get /api/builder/page/{page_id}/workflow_actions/


Lists all the workflow actions of the page related to the provided parameter if the user has access to the related builder's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listBuilderPageWorkflowActions();
```

### create_builder_page_workflow_action - post /api/builder/page/{page_id}/workflow_actions/


Creates a new builder workflow action

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createBuilderPageWorkflowAction();
```

### order_builder_workflow_actions - post /api/builder/page/{page_id}/workflow_actions/order/


Apply a new order to the workflow actions of a page

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderBuilderWorkflowActions();
```

### update_builder_page - patch /api/builder/pages/{page_id}/


Updates an existing page of an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderPage();
```

### delete_builder_page - delete /api/builder/pages/{page_id}/


Deletes an existing page of an application builder

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteBuilderPage();
```

### duplicate_builder_page_async - post /api/builder/pages/{page_id}/duplicate/async/


Start a job to duplicate the page with the provided `page_id` parameter if the authorized user has access to the builder's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateBuilderPageAsync();
```

### update_builder_page_workflow_action - patch /api/builder/workflow_action/{workflow_action_id}/


Updates an existing builder workflow action.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateBuilderPageWorkflowAction();
```

### delete_builder_page_workflow_action - delete /api/builder/workflow_action/{workflow_action_id}/


Deletes the workflow action related by the given id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteBuilderPageWorkflowAction();
```

### dispatch_builder_page_workflow_action - post /api/builder/workflow_action/{workflow_action_id}/dispatch/


Dispatches the service of the related workflow_action and returns the result.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->dispatchBuilderPageWorkflowAction();
```

### get_export_job - get /api/database/export/{job_id}/


Returns information such as export progress and state or the url of the exported file for the specified export job, only if the requesting user has access.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getExportJob();
```

### export_table - post /api/database/export/table/{table_id}/


Creates and starts a new export job for a table given some exporter options. Returns an error if the requesting user does not have permissionsto view the table.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->exportTable();
```

### get_database_table_field - get /api/database/fields/{field_id}/


Returns the existing field if the authorized user has access to the related database's workspace. Depending on the type different properties could be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableField();
```

### update_database_table_field - patch /api/database/fields/{field_id}/


Updates the existing field if the authorized user has access to the related database's workspace. The type can also be changed and depending on that type, different additional properties can optionally be set. If you change the field type it could happen that the data conversion fails, in that case the `ERROR_CANNOT_CHANGE_FIELD_TYPE` is returned, but this rarely happens. If a data value cannot be converted it is set to `null` so data might go lost.If updated the field causes other fields to change then the specificinstances of those fields will be included in the related fields response key.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableField();
```

### delete_database_table_field - delete /api/database/fields/{field_id}/


Deletes the existing field if the authorized user has access to the related database's workspace. Note that all the related data to that field is also deleted. Primary fields cannot be deleted because their value represents the row. If deleting the field causes other fields to change then the specificinstances of those fields will be included in the related fields response key.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableField();
```

### duplicate_table_field - post /api/database/fields/{field_id}/duplicate/async/


Duplicates the table with the provided `table_id` parameter if the authorized user has access to the database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateTableField();
```

### generate_table_ai_field_value - post /api/database/fields/{field_id}/generate-ai-field-values/


Endpoint that's used by the AI field to start an sync task that will update the cell value of the provided row IDs based on the dynamically constructed prompt configured in the field settings. 
This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->generateTableAiFieldValue();
```

### get_database_field_unique_row_values - get /api/database/fields/{field_id}/unique_row_values/


Returns a list of all the unique row values for an existing field, sorted in order of frequency.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseFieldUniqueRowValues();
```

### list_database_table_fields - get /api/database/fields/table/{table_id}/


Lists all the fields of the table related to the provided parameter if the user has access to the related database's workspace. If the workspace is related to a template, then this endpoint will be publicly accessible. A table consists of fields and each field can have a different type. Each type can have different properties. A field is comparable with a regular table's column.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableFields();
```

### create_database_table_field - post /api/database/fields/table/{table_id}/


Creates a new field for the table related to the provided `table_id` parameter if the authorized user has access to the related database's workspace. Depending on the type, different properties can optionally be set.If creating the field causes other fields to change then the specificinstances of those fields will be included in the related fields response key.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableField();
```

### generate_formula_with_ai - post /api/database/fields/table/{table_id}/generate-ai-formula/


This endpoint generates a Baserow formula for the table related to the provided id, based on the human readable input provided in the request body.
This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->generateFormulaWithAi();
```

### type_formula_field - post /api/database/formula/{table_id}/type/


Calculates and returns the type of the specified formula value. Does not change the state of the field in any way.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->typeFormulaField();
```

### list_database_table_row_names - get /api/database/rows/names/


Returns the names of the given row of the given tables. The nameof a row is the primary field value for this row. The result can be usedfor example, when you want to display the name of a linked row from another table.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableRowNames();
```

### list_database_table_rows - get /api/database/rows/table/{table_id}/


Lists all the rows of the table related to the provided parameter if the user has access to the related database's workspace. The response is paginated by a page/size style. It is also possible to provide an optional search query, only rows where the data matches the search query are going to be returned then. The properties of the returned rows depends on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field. Or if the GET parameter `user_field_names` is provided then the keys will be the name of the field. The value is what the user has provided and the format of it depends on the fields type.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableRows();
```

### create_database_table_row - post /api/database/rows/table/{table_id}/


Creates a new row in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** to list them all. None of the fields are required, if they are not provided the value is going to be `null` or `false` or some default value is that is set. If you want to add a value for the field with for example id `10`, the key must be named `field_10`. Or instead if the `user_field_names` GET param is provided the key must be the name of the field. Of course multiple fields can be provided in one request. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableRow();
```

### get_database_table_row - get /api/database/rows/table/{table_id}/{row_id}/


Fetches an existing row from the table if the user has access to the related table's workspace. The properties of the returned row depend on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field of the field. Or if the GET parameter `user_field_names` is provided then the keys will be the name of the field. The value is what the user has provided and the format of it depends on the fields type.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableRow();
```

### update_database_table_row - patch /api/database/rows/table/{table_id}/{row_id}/


Updates an existing row in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. None of the fields are required, if they are not provided the value is not going to be updated. When you want to update a value for the field with id `10`, the key must be named `field_10`. Or if the GET parameter `user_field_names` is provided the key of the field to update must be the name of the field. Multiple different fields to update can be provided in one request. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableRow();
```

### delete_database_table_row - delete /api/database/rows/table/{table_id}/{row_id}/


Deletes an existing row in the table if the user has access to the table's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableRow();
```

### get_adjacent_database_table_row - get /api/database/rows/table/{table_id}/{row_id}/adjacent/


Fetches the adjacent row to a given row_id in the table with the given table_id. If the previous flag is set it will return the previous row, otherwise it will return the next row. You can specifya view_id and it will apply the filters and sorts of the provided view.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getAdjacentDatabaseTableRow();
```

### get_database_table_row_history - get /api/database/rows/table/{table_id}/{row_id}/history/


Fetches the row change history of a given row_id in the table with the given table_id. The row change history is paginated and can be limited with the limit and offset query parameters.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableRowHistory();
```

### move_database_table_row - patch /api/database/rows/table/{table_id}/{row_id}/move/


Moves the row related to given `row_id` parameter to another position. It is only possible to move the row before another existing row or to the end. If the `before_id` is provided then the row related to the `row_id` parameter is moved before that row. If the `before_id` parameter is not provided, then the row will be moved to the end.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->moveDatabaseTableRow();
```

### batch_create_database_table_rows - post /api/database/rows/table/{table_id}/batch/


Creates new rows in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** to list them all. None of the fields are required, if they are not provided the value is going to be `null` or `false` or some default value is that is set. If you want to add a value for the field with for example id `10`, the key must be named `field_10`. Or instead if the `user_field_names` GET param is provided the key must be the name of the field. Of course multiple fields can be provided in one request. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.

 **WARNING:** This endpoint doesn't yet work with row created webhooks.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->batchCreateDatabaseTableRows();
```

### batch_update_database_table_rows - patch /api/database/rows/table/{table_id}/batch/


Updates existing rows in the table if the user has access to the related table's workspace. The accepted body fields are depending on the fields that the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. None of the fields are required, if they are not provided the value is not going to be updated. When you want to update a value for the field with id `10`, the key must be named `field_10`. Or if the GET parameter `user_field_names` is provided the key of the field to update must be the name of the field. Multiple different fields to update can be provided for each row. In the examples below you will find all the different field types, the numbers/ids in the example are just there for example purposes, the field_ID must be replaced with the actual id of the field or the name of the field if `user_field_names` is provided.

 **WARNING:** This endpoint doesn't yet work with row updated webhooks.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->batchUpdateDatabaseTableRows();
```

### batch_delete_database_table_rows - post /api/database/rows/table/{table_id}/batch-delete/


Deletes existing rows in the table if the user has access to the table's workspace.

 **WARNING:**  This endpoint doesn't yet work with row deleted webhooks.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->batchDeleteDatabaseTableRows();
```

### get_database_table - get /api/database/tables/{table_id}/


Returns the requested table if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTable();
```

### update_database_table - patch /api/database/tables/{table_id}/


Updates the existing table if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTable();
```

### delete_database_table - delete /api/database/tables/{table_id}/


Deletes the existing table if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTable();
```

### duplicate_database_table_async - post /api/database/tables/{table_id}/duplicate/async/


Start a job to duplicate the table with the provided `table_id` parameter if the authorized user has access to the database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateDatabaseTableAsync();
```

### import_data_database_table_async - post /api/database/tables/{table_id}/import/async/


Import data in the specified table if the authorized user has access to the related database's workspace. This endpoint is asynchronous and return the created job to track the progress of the task.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->importDataDatabaseTableAsync();
```

### list_database_tables - get /api/database/tables/database/{database_id}/


Lists all the tables that are in the database related to the `database_id` parameter if the user has access to the database's workspace. A table is exactly as the name suggests. It can hold multiple fields, each having their own type and multiple rows. They can be added via the **create_database_table_field** and **create_database_table_row** endpoints.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTables();
```

### create_database_table - post /api/database/tables/database/{database_id}/


Creates synchronously a new table for the database related to the provided `database_id` parameter if the authorized user has access to the database's workspace.

As an alternative you can use the `create_async_database_table` for better performances and importing bigger files.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTable();
```

### create_database_table_async - post /api/database/tables/database/{database_id}/async/


Creates a job that creates a new table for the database related to the provided `database_id` parameter if the authorized user has access to the database's workspace. This endpoint is asynchronous and return the created job to track the progress of the task.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableAsync();
```

### order_database_tables - post /api/database/tables/database/{database_id}/order/


Changes the order of the provided table ids to the matching position that the id has in the list. If the authorized user does not belong to the workspace it will be ignored. The order of the not provided tables will be set to `0`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderDatabaseTables();
```

### list_database_tokens - get /api/database/tokens/


Lists all the database tokens that belong to the authorized user. A token can be used to create, read, update and delete rows in the tables of the token's workspace. It only works on the tables if the token has the correct permissions. The **Database table rows** endpoints can be used for these operations.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTokens();
```

### create_database_token - post /api/database/tokens/


Creates a new database token for a given workspace and for the authorized user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseToken();
```

### get_database_token - get /api/database/tokens/{token_id}/


Returns the requested database token if it is owned by the authorized user andif the user has access to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseToken();
```

### update_database_token - patch /api/database/tokens/{token_id}/


Updates the existing database token if it is owned by the authorized user and ifthe user has access to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseToken();
```

### delete_database_token - delete /api/database/tokens/{token_id}/


Deletes the existing database token if it is owned by the authorized user and ifthe user has access to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseToken();
```

### check_database_token - get /api/database/tokens/check/


This endpoint check be used to check if the provided personal API token is valid. If returns a `200` response if so and a `403` is not. This can be used by integrations like Zapier or n8n to test if a token is valid.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->checkDatabaseToken();
```

### premium_view_attributes_update - patch /api/database/view/{view_id}/premium


Sets view attributes only available for premium users.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->premiumViewAttributesUpdate();
```

### database_table_public_view_link_row_field_lookup - get /api/database/views/{slug}/link-row-field-lookup/{field_id}/


If the view is publicly shared or if an authenticated user has access to the related workspace, then this endpoint can be used to do a value lookup of the link row fields that are included in the view. Normally it is not possible for a not authenticated visitor to fetch the rows of a table. This endpoint makes it possible to fetch the id and primary field value of the related table of a link row included in the view.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->databaseTablePublicViewLinkRowFieldLookup();
```

### public_view_token_auth - post /api/database/views/{slug}/public/auth/


Returns a valid never-expiring JWT token for this public shared view if the password provided matches with the one saved by the view's owner.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publicViewTokenAuth();
```

### get_public_view_info - get /api/database/views/{slug}/public/info/


Returns the required public information to display a single shared view.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getPublicViewInfo();
```

### get_database_table_view - get /api/database/views/{view_id}/


Returns the existing view. Depending on the type different propertiescould be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableView();
```

### update_database_table_view - patch /api/database/views/{view_id}/


Updates the existing view. The type cannot be changed. It depends on the existing type which properties can be changed.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableView();
```

### delete_database_table_view - delete /api/database/views/{view_id}/


Deletes the existing view. Note that all the related settings of the view are going to be deleted also. The data stays intact after deleting the view because this is related to the table and not the view.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableView();
```

### list_database_table_view_decorations - get /api/database/views/{view_id}/decorations/


Lists all decorations of the view related to the provided `view_id` if the user has access to the related database's workspace. A view can have multiple decorations. View decorators can be used to decorate rows. This can, for example, be used to change the border or background color of a row if it matches certain conditions.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableViewDecorations();
```

### create_database_table_view_decoration - post /api/database/views/{view_id}/decorations/


Creates a new decoration for the view related to the provided `view_id` parameter if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableViewDecoration();
```

### duplicate_database_table_view - post /api/database/views/{view_id}/duplicate/


Duplicates an existing view if the user has access to it. When a view is duplicated everything is copied except:
- The name is appended with the copy number. Ex: `ViewName`->`ViewName(2)` and `View(2)`->`View(3)`
- If the original view is publicly shared, the new view will not be shared anymore

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->duplicateDatabaseTableView();
```

### get_database_table_view_field_options - get /api/database/views/{view_id}/field-options/


Responds with the fields options of the provided view if the authenticated user has access to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewFieldOptions();
```

### update_database_table_view_field_options - patch /api/database/views/{view_id}/field-options/


Updates the field options of a view. The field options differ per field type  This could for example be used to update the field width of a `grid` view if the user changes it.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewFieldOptions();
```

### create_database_table_view_filter_group - post /api/database/views/{view_id}/filter-groups/


Creates a new filter group for the view related to the provided `view_id` parameter.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableViewFilterGroup();
```

### list_database_table_view_filters - get /api/database/views/{view_id}/filters/


Lists all filters of the view related to the provided `view_id`. A view can have multiple filters. When all the rows are requested for the view only those that apply to the filters are returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableViewFilters();
```

### create_database_table_view_filter - post /api/database/views/{view_id}/filters/


Creates a new filter for the view related to the provided `view_id` parameter. When the rows of a view are requested, for example via the `list_database_table_grid_view_rows` endpoint, then only the rows that apply to all the filters are going to be returned. A filter compares the value of a field to the value of a filter. It depends on the type how values are going to be compared.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableViewFilter();
```

### list_database_table_view_groupings - get /api/database/views/{view_id}/group_bys/


Lists all groupings of the view related to the provided `view_id` if the user has access to the related database's workspace. A view can have multiple groupings.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableViewGroupings();
```

### create_database_table_view_group - post /api/database/views/{view_id}/group_bys/


Creates a new group by for the view related to the provided `view_id` parameter if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableViewGroup();
```

### rotate_database_view_slug - post /api/database/views/{view_id}/rotate-slug/


Rotates the unique slug of the view by replacing it with a new value. This would mean that the publicly shared URL of the view will change. Anyone with the old URL won't be able to access the viewanymore. Only view types which are sharable can have their slugs rotated.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->rotateDatabaseViewSlug();
```

### list_database_table_view_sortings - get /api/database/views/{view_id}/sortings/


Lists all sortings of the view related to the provided `view_id` if the user has access to the related database's workspace. A view can have multiple sortings. When all the rows are requested they will be in the desired order.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableViewSortings();
```

### create_database_table_view_sort - post /api/database/views/{view_id}/sortings/


Creates a new sort for the view related to the provided `view_id` parameter if the authorized user has access to the related database's workspace. When the rows of a view are requested, for example via the `list_database_table_grid_view_rows` endpoint, they will be returned in the respected order defined by all the sortings.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableViewSort();
```

### public_list_database_table_calendar_view_rows - get /api/database/views/calendar/{slug}/public/rows/


Responds with serialized rows grouped by the view's date field options related to the `slug` if the calendar view is publicly shared. Additional query parameters can be provided to control the `limit` and `offset` per select option. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publicListDatabaseTableCalendarViewRows();
```

### list_database_table_calendar_view_rows - get /api/database/views/calendar/{view_id}/


Responds with serialized rows grouped by date regarding view's date fieldif the user is authenticated and has access to the related workspace.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableCalendarViewRows();
```

### get_database_table_view_decoration - get /api/database/views/decoration/{view_decoration_id}/


Returns the existing view decoration if the current user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewDecoration();
```

### update_database_table_view_decoration - patch /api/database/views/decoration/{view_decoration_id}/


Updates the existing decoration if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewDecoration();
```

### delete_database_table_view_decoration - delete /api/database/views/decoration/{view_decoration_id}/


Deletes the existing decoration if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableViewDecoration();
```

### get_database_table_view_filter_group - get /api/database/views/filter-group/{filter_group_id}/


Returns the existing view filter group with the given `view_filter_group_id`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewFilterGroup();
```

### update_database_table_view_filter_group - patch /api/database/views/filter-group/{filter_group_id}/


Updates the existing filter group with the given `view_filter_group_id`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewFilterGroup();
```

### delete_database_table_view_filter_group - delete /api/database/views/filter-group/{filter_group_id}/


Deletes the existing filter group with the given `view_filter_group_id`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableViewFilterGroup();
```

### get_database_table_view_filter - get /api/database/views/filter/{view_filter_id}/


Returns the existing view filter.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewFilter();
```

### update_database_table_view_filter - patch /api/database/views/filter/{view_filter_id}/


Updates the existing filter.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewFilter();
```

### delete_database_table_view_filter - delete /api/database/views/filter/{view_filter_id}/


Deletes the existing filter if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableViewFilter();
```

### get_meta_database_table_form_view - get /api/database/views/form/{slug}/submit/


Returns the metadata related to the form view if the form is publicly shared or if the user has access to the related workspace. This data can be used to construct a form with the right fields.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getMetaDatabaseTableFormView();
```

### submit_database_table_form_view - post /api/database/views/form/{slug}/submit/


Submits the form if the form is publicly shared or if the user has access to the related workspace. The provided data will be validated based on the fields that are in the form and the rules per field. If valid, a new row will be created in the table.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->submitDatabaseTableFormView();
```

### upload_file_form_view - post /api/database/views/form/{slug}/upload-file/


Uploads a file anonymously to Baserow by uploading the file contents directly. A `file` multipart is expected containing the file contents.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->uploadFileFormView();
```

### public_list_database_table_gallery_view_rows - get /api/database/views/gallery/{slug}/public/rows/


Lists the requested rows of the view's table related to the provided `slug` if the gallery view is public.The response is paginated either by a limit/offset or page/size style. The style depends on the provided GET parameters. The properties of the returned rows depends on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field. The value is what the user has provided and the format of it depends on the fields type.



```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publicListDatabaseTableGalleryViewRows();
```

### list_database_table_gallery_view_rows - get /api/database/views/gallery/{view_id}/


Lists the requested rows of the view's table related to the provided `view_id` if the authorized user has access to the database's workspace. The response is paginated by a limit/offset style.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableGalleryViewRows();
```

### get_database_table_public_grid_view_field_aggregations - get /api/database/views/grid/{slug}/public/aggregations/


Returns all field aggregations values previously defined for this grid view. If filters exist for this view, the aggregations are computed only on filtered rows.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTablePublicGridViewFieldAggregations();
```

### public_list_database_table_grid_view_rows - get /api/database/views/grid/{slug}/public/rows/


Lists the requested rows of the view's table related to the provided `slug` if the grid view is public.The response is paginated either by a limit/offset or page/size style. The style depends on the provided GET parameters. The properties of the returned rows depends on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field. The value is what the user has provided and the format of it depends on the fields type.



```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publicListDatabaseTableGridViewRows();
```

### list_database_table_grid_view_rows - get /api/database/views/grid/{view_id}/


Lists the requested rows of the view's table related to the provided `view_id` if the authorized user has access to the database's workspace. The response is paginated either by a limit/offset or page/size style. The style depends on the provided GET parameters. The properties of the returned rows depends on which fields the table has. For a complete overview of fields use the **list_database_table_fields** endpoint to list them all. In the example all field types are listed, but normally the number in field_{id} key is going to be the id of the field. The value is what the user has provided and the format of it depends on the fields type.

The filters and sortings are automatically applied. To get a full overview of the applied filters and sortings you can use the `list_database_table_view_filters` and `list_database_table_view_sortings` endpoints.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableGridViewRows();
```

### filter_database_table_grid_view_rows - post /api/database/views/grid/{view_id}/


Lists only the rows and fields that match the request. Only the rows with the ids that are in the `row_ids` list are going to be returned. Same goes for the fields, only the fields with the ids in the `field_ids` are going to be returned. This endpoint could be used to refresh data after changes something. For example in the web frontend after changing a field type, the data of the related cells will be refreshed using this endpoint. In the example all field types are listed, but normally  the number in field_{id} key is going to be the id of the field. The value is what the user has provided and the format of it depends on the fields type.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->filterDatabaseTableGridViewRows();
```

### get_database_table_grid_view_field_aggregation - get /api/database/views/grid/{view_id}/aggregation/{field_id}/


Computes the aggregation of all the values for a specified field from the selected grid view. You must select the aggregation type by setting the `type` GET parameter. If filters are configured for the selected view, the aggregation is calculated only on filtered rows. You need to have read permissions on the view to request an aggregation.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableGridViewFieldAggregation();
```

### get_database_table_grid_view_field_aggregations - get /api/database/views/grid/{view_id}/aggregations/


Returns all field aggregations values previously defined for this grid view. If filters exist for this view, the aggregations are computed only on filtered rows.You need to have read permissions on the view to request aggregations.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableGridViewFieldAggregations();
```

### get_database_table_view_group - get /api/database/views/group_by/{view_group_by_id}/


Returns the existing view group by if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewGroup();
```

### update_database_table_view_group - patch /api/database/views/group_by/{view_group_by_id}/


Updates the existing group by if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewGroup();
```

### delete_database_table_view_group - delete /api/database/views/group_by/{view_group_by_id}/


Deletes the existing group by if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableViewGroup();
```

### public_list_database_table_kanban_view_rows - get /api/database/views/kanban/{slug}/public/rows/


Responds with serialized rows grouped by the view's single select field options related to the `slug` if the kanban view is publicly shared. Additional query parameters can be provided to control the `limit` and `offset` per select option. 

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->publicListDatabaseTableKanbanViewRows();
```

### list_database_table_kanban_view_rows - get /api/database/views/kanban/{view_id}/


Responds with serialized rows grouped by the view's single select field options if the user is authenticated and has access to the related workspace. Additional query parameters can be provided to control the `limit` and `offset` per select option.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableKanbanViewRows();
```

### get_database_table_view_sort - get /api/database/views/sort/{view_sort_id}/


Returns the existing view sort if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableViewSort();
```

### update_database_table_view_sort - patch /api/database/views/sort/{view_sort_id}/


Updates the existing sort if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableViewSort();
```

### delete_database_table_view_sort - delete /api/database/views/sort/{view_sort_id}/


Deletes the existing sort if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableViewSort();
```

### list_database_table_views - get /api/database/views/table/{table_id}/


Lists all views of the table related to the provided `table_id`. If the workspace is related to a template, then this endpoint will be publicly accessible. A table can have multiple views. Each view can display the data in a different way. For example the `grid` view shows the in a spreadsheet like way. That type has custom endpoints for data retrieval and manipulation. In the future other views types like a calendar or Kanban are going to be added. Each type can have different properties.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableViews();
```

### create_database_table_view - post /api/database/views/table/{table_id}/


Creates a new view for the table related to the provided `table_id` parameter. Depending on the type, different properties can optionally be set.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableView();
```

### order_database_table_views - post /api/database/views/table/{table_id}/order/


Changes the order of the provided view ids to the matching position that the id has in the list. The order of the not provided views will be set to `0`.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderDatabaseTableViews();
```

### get_database_table_webhook - get /api/database/webhooks/{webhook_id}/


Returns the existing webhook if the authorized user has access to the related database workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getDatabaseTableWebhook();
```

### update_database_table_webhook - patch /api/database/webhooks/{webhook_id}/


Updates the existing view if the authorized user has access to the related database workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateDatabaseTableWebhook();
```

### delete_database_table_webhook - delete /api/database/webhooks/{webhook_id}/


Deletes the existing webhook if the authorized user has access to the related database's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteDatabaseTableWebhook();
```

### list_database_table_webhooks - get /api/database/webhooks/table/{table_id}/


Lists all webhooks of the table related to the provided `table_id` if the user has access to the related database workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listDatabaseTableWebhooks();
```

### create_database_table_webhook - post /api/database/webhooks/table/{table_id}/


Creates a new webhook for the table related to the provided `table_id` parameter if the authorized user has access to the related database workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createDatabaseTableWebhook();
```

### test_call_database_table_webhook - post /api/database/webhooks/table/{table_id}/test-call/


This endpoint triggers a test call based on the provided data if the user has access to the workspace related to the table. The test call will be made immediately and a copy of the request, response and status will be included in the response.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->testCallDatabaseTableWebhook();
```

### secure_file_serve_download - get /api/files/{signed_data}


Downloads a file using the backend and the secure file serve feature. The signed data is extracted from the URL and used to verify if the user has access to the file. If the permissions check passes and the file exists, the file is served to the user.

This is a **enterprise** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->secureFileServeDownload();
```

### list_groups - get /api/groups/


**This endpoint has been deprecated and replaced with a new endpoint, [list_workspaces](#tag/Workspaces/operation/list_workspaces).**

**Support for this endpoint will end in 2024.**

 Lists all the groups of the authorized user. A group can contain multiple applications like a database. Multiple users can have access to a group. For example each company could have their own group containing databases related to that company. The order of the groups are custom for each user. The order is configurable via the **order_groups** endpoint.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listGroups();
```

### create_group - post /api/groups/


**This endpoint has been deprecated and replaced with a new endpoint, [create_workspace](#tag/Workspaces/operation/create_workspace).**

**Support for this endpoint will end in 2024.**

 Creates a new group where only the authorized user has access to. No initial data like database applications are added, they have to be created via other endpoints.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createGroup();
```

### update_group - patch /api/groups/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [update_workspace](#tag/Workspaces/operation/update_workspace).**

**Support for this endpoint will end in 2024.**

 Updates the existing group related to the provided `group_id` parameter if the authorized user belongs to the group. It is not yet possible to add additional users to a group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateGroup();
```

### delete_group - delete /api/groups/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [delete_workspace](#tag/Workspaces/operation/delete_workspace).**

**Support for this endpoint will end in 2024.**

 Deletes an existing group if the authorized user belongs to the group. All the applications, databases, tables etc that were in the group are going to be deleted also.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteGroup();
```

### leave_group - post /api/groups/{group_id}/leave/


**This endpoint has been deprecated and replaced with a new endpoint, [leave_workspace](#tag/Workspaces/operation/leave_workspace).**

**Support for this endpoint will end in 2024.**

 Makes the authenticated user leave the group related to the provided `group_id` if the user is in that group. If the user is the last admin in the group, they will not be able to leave it. There must always be one admin in the group, otherwise it will be left without control. If that is the case, they must either delete the group or give another member admin permissions first.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->leaveGroup();
```

### group_permissions - get /api/groups/{group_id}/permissions/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_permissions](#tag/Workspaces/operation/workspace_permissions).**

**Support for this endpoint will end in 2024.**

 Returns a the permission data necessary to determine the permissions of a specific user over a specific group.
 See `core.handler.CoreHandler.get_permissions()` for more details.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupPermissions();
```

### get_group_invitation - get /api/groups/invitations/{group_invitation_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [get_workspace_invitation](#tag/Workspace-invitations/operation/get_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Returns the requested group invitation if the authorized user has admin right to the related group

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getGroupInvitation();
```

### update_group_invitation - patch /api/groups/invitations/{group_invitation_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [update_workspace_invitation](#tag/Workspace-invitations/operation/update_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Updates the existing group invitation related to the provided `group_invitation_id` param if the authorized user has admin rights to the related group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateGroupInvitation();
```

### delete_group_invitation - delete /api/groups/invitations/{group_invitation_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [delete_workspace_invitation](#tag/Workspace-invitations/operation/delete_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Deletes a group invitation if the authorized user has admin rights to the related group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteGroupInvitation();
```

### accept_group_invitation - post /api/groups/invitations/{group_invitation_id}/accept/


**This endpoint has been deprecated and replaced with a new endpoint, [accept_workspace_invitation](#tag/Workspace-invitations/operation/accept_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Accepts a group invitation with the given id if the email address of the user matches that of the invitation.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->acceptGroupInvitation();
```

### reject_group_invitation - post /api/groups/invitations/{group_invitation_id}/reject/


**This endpoint has been deprecated and replaced with a new endpoint, [reject_workspace_invitation](#tag/Workspace-invitations/operation/reject_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Rejects a group invitation with the given id if the email address of the user matches that of the invitation.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->rejectGroupInvitation();
```

### list_group_invitations - get /api/groups/invitations/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [list_workspace_invitations](#tag/Workspace-invitations/operation/list_workspace_invitations).**

**Support for this endpoint will end in 2024.**

 Lists all the group invitations of the group related to the provided `group_id` parameter if the authorized user has admin rights to that group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listGroupInvitations();
```

### create_group_invitation - post /api/groups/invitations/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [create_workspace_invitation](#tag/Workspace-invitations/operation/create_workspace_invitation).**

**Support for this endpoint will end in 2024.**

 Creates a new group invitations for an email address if the authorized user has admin rights to the related group. An email containing a sign up link will be send to the user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createGroupInvitation();
```

### get_group_invitation_by_token - get /api/groups/invitations/token/{token}/


**This endpoint has been deprecated and replaced with a new endpoint, [get_workspace_invitation_by_token](#tag/Workspace-invitations/operation/get_workspace_invitation_by_token).**

**Support for this endpoint will end in 2024.**

 Responds with the serialized group invitation if an invitation with the provided token is found.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getGroupInvitationByToken();
```

### order_groups - post /api/groups/order/


**This endpoint has been deprecated and replaced with a new endpoint, [order_workspaces](#tag/Workspaces/operation/order_workspaces).**

**Support for this endpoint will end in 2024.**

 Changes the order of the provided group ids to the matching position that the id has in the list. If the authorized user does not belong to the group it will be ignored. The order will be custom for each user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderGroups();
```

### update_group_user - patch /api/groups/users/{group_user_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [update_workspace_user](#tag/Workspaces/operation/update_workspace_user).**

 Updates the existing group user related to the provided `group_user_id` param if the authorized user has admin rights to the related group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateGroupUser();
```

### delete_group_user - delete /api/groups/users/{group_user_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [delete_workspace_user](#tag/Workspaces/operation/delete_workspace_user).**

 Deletes a group user if the authorized user has admin rights to the related group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteGroupUser();
```

### list_group_users - get /api/groups/users/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [list_workspace_users](#tag/Workspaces/operation/list_workspace_users).**

 Lists all the users that are in a group if the authorized user has admin permissions to the related group. To add a user to a group an invitation must be sent first.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listGroupUsers();
```

### update_application_integration - patch /api/integration/{integration_id}/


Updates an existing integration.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateApplicationIntegration();
```

### delete_application_integration - delete /api/integration/{integration_id}/


Deletes the integration related by the given id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteApplicationIntegration();
```

### move_application_integration - patch /api/integration/{integration_id}/move/


Moves the integration in the application before another integration or at the end of the application if no before integration is given. The integrations must belong to the same application.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->moveApplicationIntegration();
```

### list_job - get /api/jobs/


List all existing jobs. Jobs are task executed asynchronously in the background. You can use the `get_job` endpoint to read the currentprogress of a the job.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listJob();
```

### create_job - post /api/jobs/


Creates a new job. This job runs asynchronously in the background and execute the task specific to the provided typeparameters. The `get_job` can be used to get the current state of the job.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createJob();
```

### get_job - get /api/jobs/{job_id}/


Returns the information related to the provided job id. This endpoint can for example be polled to get the state and progress of the job in real time.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getJob();
```

### admin_licenses - get /api/licenses/


Lists all the valid licenses that are registered to this instance. A premium license can be used to unlock the premium features for a fixed amount of users. An enterprise license can similarly be used to unlock enterpise features. More information about self hosted licenses can be found on our pricing page https://baserow.io/pricing.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminLicenses();
```

### admin_register_license - post /api/licenses/


Registers a new license. After registering you can assign users to the license that will be able to use the license's features while the license is active. If an existing license with the same `license_id` already exists and the provided license has been issued later than that one, the existing one will be upgraded.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminRegisterLicense();
```

### admin_get_license - get /api/licenses/{id}/


Responds with detailed information about the license related to the provided parameter.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminGetLicense();
```

### admin_remove_license - delete /api/licenses/{id}/


Removes the existing license related to the provided parameter. If the license is active, then all the users that are using the license will lose access to the features granted by that license.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminRemoveLicense();
```

### admin_add_user_to_license - post /api/licenses/{id}/{user_id}/


Adds the user related to the provided parameter and to the license related to the parameter. This only happens if there are enough seats left on the license and if the user is not already on the license.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminAddUserToLicense();
```

### admin_remove_user_from_license - delete /api/licenses/{id}/{user_id}/


Removes the user related to the provided parameter and to the license related to the parameter. This only happens if the user is on the license, otherwise nothing will happen.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminRemoveUserFromLicense();
```

### admin_license_check - get /api/licenses/{id}/check/


This endpoint checks with the authority if the license needs to be updated. It also checks if the license is operating within its limits and might take action on that. It could also happen that the license has been deleted because there is an instance id mismatch or because it's invalid. In that case a `204` status code is returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminLicenseCheck();
```

### admin_fill_remaining_seats_of_license - post /api/licenses/{id}/fill-seats/


Fills the remaining empty seats of the license with the first users that are found.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminFillRemainingSeatsOfLicense();
```

### admin_license_lookup_users - get /api/licenses/{id}/lookup-users/


This endpoint can be used to lookup users that can be added to a  license. Users that are already in the license are not returned here. Optionally a `search` query parameter can be provided to filter the results.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminLicenseLookupUsers();
```

### admin_remove_all_users_from_license - post /api/licenses/{id}/remove-all-users/


Removes all the users that are on the license. This will empty all the seats.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->adminRemoveAllUsersFromLicense();
```

### list_workspace_notifications - get /api/notifications/{workspace_id}/


Lists the notifications for the given workspace and the current user. The response is paginated and the limit and offset parameters can be controlled using the query parameters.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listWorkspaceNotifications();
```

### clear_workspace_notifications - delete /api/notifications/{workspace_id}/


Clear all the notifications for the given workspace and user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->clearWorkspaceNotifications();
```

### mark_notification_as_read - patch /api/notifications/{workspace_id}/{notification_id}/


Marks a notification as read.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->markNotificationAsRead();
```

### mark_all_workspace_notifications_as_read - post /api/notifications/{workspace_id}/mark-all-as-read/


Mark as read all the notifications for the given workspace and user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->markAllWorkspaceNotificationsAsRead();
```

### group_list_role_assignments - get /api/role/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_assign_role](#tag/Role-assignments/operation/workspace_assign_role).**

**Support for this endpoint will end in 2024.**

 You can list the role assignments within a group, optionally filtered down to a specific scope inside of that group. If the scope isn't specified,the group will be considered the scope.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupListRoleAssignments();
```

### group_assign_role - post /api/role/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_assign_role](#tag/Role-assignments/operation/workspace_assign_role).**

**Support for this endpoint will end in 2024.**

 You can assign a role to a subject into the given group for the given scope with this endpoint. If you want to remove the role you can omit the role property.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupAssignRole();
```

### group_batch_assign_role - post /api/role/{group_id}/batch/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_batch_assign_role](#tag/Role-assignments/operation/workspace_batch_assign_role).**

**Support for this endpoint will end in 2024.**

 You can assign a role to a multiple subjects into the given group for the given scope with this endpoint. If you want to remove the role you can omit the role property.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupBatchAssignRole();
```

### list_role_assignments - get /api/role/{workspace_id}/


You can list the role assignments within a workspace, optionally filtered downto a specific scope inside of that workspace. If the scope isn't specified,the workspace will be considered the scope.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listRoleAssignments();
```

### assign_role - post /api/role/{workspace_id}/


You can assign a role to a subject into the given workspace for the given scope with this endpoint. If you want to remove the role you can omit the role property.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->assignRole();
```

### batch_assign_role - post /api/role/{workspace_id}/batch/


You can assign a role to a multiple subjects into the given workspace for the given scopes with this endpoint. If you want to remove the role you can omit the role property.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->batchAssignRole();
```

### get_row_comments - get /api/row_comments/{table_id}/{row_id}/


Returns all row comments for the specified table and row.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getRowComments();
```

### create_row_comment - post /api/row_comments/{table_id}/{row_id}/


Creates a comment on the specified row.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createRowComment();
```

### update_row_comment_notification_mode - put /api/row_comments/{table_id}/{row_id}/notification-mode/


Updates the user's notification preferences for comments made on a specified table row.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateRowCommentNotificationMode();
```

### update_row_comment - patch /api/row_comments/{table_id}/comment/{comment_id}/


Update a row comment.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateRowComment();
```

### delete_row_comment - delete /api/row_comments/{table_id}/comment/{comment_id}/


Delete a row comment.

This is a **premium** feature.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteRowComment();
```

### get_settings - get /api/settings/


Responds with all the admin configured settings.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getSettings();
```

### get_instance_id - get /api/settings/instance-id/


Responds with the self hosted instance id. Only a user with staff permissions can request it.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getInstanceId();
```

### update_settings - patch /api/settings/update/


Updates the admin configured settings if the user has admin permissions.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateSettings();
```

### delete_snapshot - delete /api/snapshots/{snapshot_id}/


Deletes a snapshot. Deleting a snapshot doesn't affect the application that the snapshot is made from and doesn't affect any applications that were created by restoring it. Snapshot deletion is permanent and can't be undone.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteSnapshot();
```

### restore_snapshot - post /api/snapshots/{snapshot_id}/restore/


Restores a snapshot. When an application snapshot is restored, a new application will be created in the same workspace that the original application was placed in with the name of the snapshot and data that were in the original application at the time the snapshot was taken. The original application that the snapshot was taken from is unaffected. Snapshots can be restored multiple times and a number suffix is added to the new application name in the case of a collision.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->restoreSnapshot();
```

### list_snapshots - get /api/snapshots/application/{application_id}/


Lists snapshots that were created for a given application.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listSnapshots();
```

### create_snapshot - post /api/snapshots/application/{application_id}/


Creates a new application snapshot. Snapshots represent a state of an application at a specific point in time and can be restored later, making it easy to create backups of entire applications.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createSnapshot();
```

### oauth_provider_login_callback - get /api/sso/oauth2/callback/{provider_id}/


Processes callback from OAuth2 provider and logs the user in if successful.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->oauthProviderLoginCallback();
```

### oauth_provider_login_redirect - get /api/sso/oauth2/login/{provider_id}/


Redirects to the OAuth2 provider's authentication URL based on the provided auth provider's id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->oauthProviderLoginRedirect();
```

### auth_provider_saml_acs_url - post /api/sso/saml/acs/


Complete the SAML authentication flow by validating the SAML response. Sign in the user if already exists in Baserow or create a new one otherwise. Once authenticated, the user will be redirected to the original URL they were trying to access. If the response is invalid, the user will be redirected to an error page with a specific error message.It accepts the language code and the workspace invitation token as query parameters if provided.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->authProviderSamlAcsUrl();
```

### auth_provider_saml_sp_login - get /api/sso/saml/login/


This is the endpoint that is called when the user wants to initiate a SSO SAML login from Baserow (the service provider). The user will be redirected to the SAML identity provider (IdP) where the user can authenticate. Once logged in in the IdP, the user will be redirected back to the assertion consumer service endpoint (ACS) where the SAML response will be validated and a new JWT session token will be provided to work with Baserow APIs.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->authProviderSamlSpLogin();
```

### auth_provider_login_url - get /api/sso/saml/login-url/


Return the correct redirect_url to initiate the SSO SAML login. It needs an email address if multiple SAML providers are configured otherwise the only configured SAML provider signup URL will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->authProviderLoginUrl();
```

### get_team - get /api/teams/{team_id}/


Returns the information related to the provided team id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getTeam();
```

### update_team - put /api/teams/{team_id}/


Updates an existing team with a new name.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateTeam();
```

### delete_team - delete /api/teams/{team_id}/


Deletes a team if the authorized user is in the team's workspace. All the related children (e.g. subjects) are also going to be deleted.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteTeam();
```

### list_team_subjects - get /api/teams/{team_id}/subjects/


Lists all team subjects in a given team.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listTeamSubjects();
```

### create_subject - post /api/teams/{team_id}/subjects/


Creates a new team subject.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createSubject();
```

### get_subject - get /api/teams/{team_id}/subjects/{subject_id}/


Returns the information related to the provided subject id

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getSubject();
```

### delete_subject - delete /api/teams/{team_id}/subjects/{subject_id}/


Deletes a subject if the authorized user is in the team's workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteSubject();
```

### group_list_teams - get /api/teams/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_list_teams](#tag/Teams/operation/workspace_list_teams).**

**Support for this endpoint will end in 2024.**

 Lists all teams in a given group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupListTeams();
```

### group_create_team - post /api/teams/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_create_team](#tag/Teams/operation/create_workspace).**

**Support for this endpoint will end in 2024.**

 Creates a new team in a given group.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupCreateTeam();
```

### workspace_list_teams - get /api/teams/workspace/{workspace_id}/


Lists all teams in a given workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceListTeams();
```

### workspace_create_team - post /api/teams/workspace/{workspace_id}/


Creates a new team.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceCreateTeam();
```

### list_templates - get /api/templates/


Lists all the template categories and the related templates that are in that category. The template's `workspace_id` can be used for previewing purposes because that workspace contains the applications that are in the template. All the `get` and `list` endpoints related to that workspace are publicly accessible.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listTemplates();
```

### group_install_template - post /api/templates/install/{group_id}/{template_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_install_template](#tag/Templates/operation/workspace_install_template).**

**Support for this endpoint will end in 2024.**

 Installs the applications of the given template into the given group if the user has access to that group. The response contains those newly created applications.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupInstallTemplate();
```

### group_install_template_async - post /api/templates/install/{group_id}/{template_id}/async/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_install_template_async](#tag/Templates/operation/workspace_install_template_async).**

**Support for this endpoint will end in 2024.**

 Start an async job to install the applications of the given template into the given group if the user has access to that group. The response contains those newly created applications.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupInstallTemplateAsync();
```

### install_template - post /api/templates/install/{workspace_id}/{template_id}/


(Deprecated) Installs the applications of the given template into the given workspace if the user has access to that workspace. The response contains those newly created applications.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->installTemplate();
```

### install_template_async - post /api/templates/install/{workspace_id}/{template_id}/async/


Start an async job to install the applications of the given template into the given workspace if the user has access to that workspace. The response contains those newly created applications.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->installTemplateAsync();
```

### get_trash_structure - get /api/trash/


Responds with the workspaces and applications available for the requesting user to inspect the trash contents of.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getTrashStructure();
```

### group_get_contents - get /api/trash/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_get_contents](#tag/Trash/operation/workspace_get_contents).**

**Support for this endpoint will end in 2024.**

 Responds with trash contents for a group optionally filtered to a specific application.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupGetContents();
```

### group_empty_contents - delete /api/trash/group/{group_id}/


**This endpoint has been deprecated and replaced with a new endpoint, [workspace_empty_contents](#tag/Trash/operation/workspace_empty_contents).**

**Support for this endpoint will end in 2024.**

 Empties the specified group and/or application of trash, including the group and application themselves if they are trashed also.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->groupEmptyContents();
```

### restore - patch /api/trash/restore/


Restores the specified trashed item back into baserow.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->restore();
```

### workspace_get_contents - get /api/trash/workspace/{workspace_id}/


Responds with trash contents for a workspace optionally filtered to a specific application.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceGetContents();
```

### workspace_empty_contents - delete /api/trash/workspace/{workspace_id}/


Empties the specified workspace and/or application of trash, including the workspace and application themselves if they are trashed also.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspaceEmptyContents();
```

### create_user - post /api/user/


Creates a new user based on the provided values. If desired an authentication JWT can be generated right away. After creating an account the initial workspace containing a database is created.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createUser();
```

### upload_file - post /api/user-files/upload-file/


Uploads a file to Baserow by uploading the file contents directly. A `file` multipart is expected containing the file contents.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->uploadFile();
```

### upload_via_url - post /api/user-files/upload-via-url/


Uploads a file to Baserow by downloading it from the provided URL.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->uploadViaUrl();
```

### user_source_token_refresh - post /api/user-source-auth-refresh/


Generate a new access_token that can be used to continue operating on Baserow with a user source user starting from a valid refresh token.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->userSourceTokenRefresh();
```

### user_source_token_blacklist - post /api/user-source-token-blacklist/


Blacklists the provided user source token. This can be used the sign the user off.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->userSourceTokenBlacklist();
```

### update_application_user_source - patch /api/user-source/{user_source_id}/


Updates an existing user_source.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateApplicationUserSource();
```

### delete_application_user_source - delete /api/user-source/{user_source_id}/


Deletes the user_source related by the given id.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteApplicationUserSource();
```

### user_source_force_token_auth - post /api/user-source/{user_source_id}/force-token-auth


Force authenticates an existing user based on their ID. If successful, an access token and a refresh token will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->userSourceForceTokenAuth();
```

### move_application_user_source - patch /api/user-source/{user_source_id}/move/


Moves the user_source in the application before another user_source or at the end of the application if no before user_source is given. The user_sources must belong to the same application.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->moveApplicationUserSource();
```

### user_source_token_auth - post /api/user-source/{user_source_id}/token-auth


Authenticates an existing user against a user source based on their credentials. If successful, an access token and a refresh token will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->userSourceTokenAuth();
```

### update_account - patch /api/user/account/


Updates the account information of the authenticated user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateAccount();
```

### change_password - post /api/user/change-password/


Changes the password of an authenticated user, but only if the old password matches.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->changePassword();
```

### dashboard - get /api/user/dashboard/


Lists all the relevant user information that for example could be shown on a dashboard. It will contain all the pending workspace invitations for that user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->dashboard();
```

### redo - patch /api/user/redo/


Redoes the latest redoable action performed by the user making the request. a ClientSessionId header must be provided and only actions which were performed the same user with the same ClientSessionId value set on the api request that performed the action will be redone.Additionally the ClientSessionId header must be between 1 and 256 characters long and must only contain alphanumeric or the - characters.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->redo();
```

### reset_password - post /api/user/reset-password/


Changes the password of a user if the reset token is valid. The **send_password_reset_email** endpoint sends an email to the user containing the token. That token can be used to change the password here without providing the old password.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->resetPassword();
```

### schedule_account_deletion - post /api/user/schedule-account-deletion/


Schedules the account deletion of the authenticated user. The user will be permanently deleted after the grace delay defined by the instance administrator.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->scheduleAccountDeletion();
```

### send_password_reset_email - post /api/user/send-reset-password-email/


Sends an email containing the password reset link to the email address of the user. This will only be done if a user is found with the given email address. The endpoint will not fail if the email address is not found. The link is going to the valid for 48 hours.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->sendPasswordResetEmail();
```

### send_verify_email - post /api/user/send-verify-email/


Sends an email to the user with an email verification link if the user's email is not verified yet.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->sendVerifyEmail();
```

### token_auth - post /api/user/token-auth/


Authenticates an existing user based on their email and their password. If successful, an access token and a refresh token will be returned.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->tokenAuth();
```

### token_blacklist - post /api/user/token-blacklist/


Blacklists the provided token. This can be used the sign the user off.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->tokenBlacklist();
```

### token_refresh - post /api/user/token-refresh/


Generate a new access_token that can be used to continue operating on Baserow starting from a valid refresh token.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->tokenRefresh();
```

### token_verify - post /api/user/token-verify/


Verifies if the refresh token is valid and can be used to generate a new access_token.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->tokenVerify();
```

### undo - patch /api/user/undo/


undoes the latest undoable action performed by the user making the request. a ClientSessionId header must be provided and only actions which were performed the same user with the same ClientSessionId value set on the api request that performed the action will be undone.Additionally the ClientSessionId header must be between 1 and 256 characters long and must only contain alphanumeric or the - characters.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->undo();
```

### verify_email - post /api/user/verify-email/


Passing the correct verification token will confirm that the user's email address belongs to the user. This endpoint also optionally returns user information, access token and the refresh token for automatically signing user in the system if the request is performed by unauthenticated user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->verifyEmail();
```

### list_workspaces - get /api/workspaces/


Lists all the workspaces of the authorized user. A workspace can contain multiple applications like a database. Multiple users can have access to a workspace. For example each company could have their own workspace containing databases related to that company. The order of the workspaces are custom for each user. The order is configurable via the **order_workspaces** endpoint.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listWorkspaces();
```

### create_workspace - post /api/workspaces/


Creates a new workspace where only the authorized user has access to. No initial data like database applications are added, they have to be created via other endpoints.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createWorkspace();
```

### update_workspace - patch /api/workspaces/{workspace_id}/


Updates the existing workspace related to the provided `workspace_id` parameter if the authorized user belongs to the workspace. It is not yet possible to add additional users to a workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateWorkspace();
```

### delete_workspace - delete /api/workspaces/{workspace_id}/


Deletes an existing workspace if the authorized user belongs to the workspace. All the applications, databases, tables etc that were in the workspace are going to be deleted also.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteWorkspace();
```

### leave_workspace - post /api/workspaces/{workspace_id}/leave/


Makes the authenticated user leave the workspace related to the provided `workspace_id` if the user is in that workspace. If the user is the last admin in the workspace, they will not be able to leave it. There must always be one admin in the workspace, otherwise it will be left without control. If that is the case, they must either delete the workspace or give another member admin permissions first.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->leaveWorkspace();
```

### workspace_permissions - get /api/workspaces/{workspace_id}/permissions/


Returns a the permission data necessary to determine the permissions of a specific user over a specific workspace. 
See `core.handler.CoreHandler.get_permissions()` for more details.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->workspacePermissions();
```

### get_workspace_generative_ai_models_settings - get /api/workspaces/{workspace_id}/settings/generative-ai/


Returns the generative AI models settings for the given workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getWorkspaceGenerativeAiModelsSettings();
```

### update_workspace_generative_ai_models_settings - patch /api/workspaces/{workspace_id}/settings/generative-ai/


Updates the generative AI models settings for the given workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateWorkspaceGenerativeAiModelsSettings();
```

### create_initial_workspace - post /api/workspaces/create-initial-workspace/


Creates an initial workspace. This is typically called after the user signs up and skips the onboarding in the frontend. It contains some example data.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createInitialWorkspace();
```

### get_workspace_invitation - get /api/workspaces/invitations/{workspace_invitation_id}/


Returns the requested workspace invitation if the authorized user has admin right to the related workspace

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getWorkspaceInvitation();
```

### update_workspace_invitation - patch /api/workspaces/invitations/{workspace_invitation_id}/


Updates the existing workspace invitation related to the provided `workspace_invitation_id` param if the authorized user has admin rights to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateWorkspaceInvitation();
```

### delete_workspace_invitation - delete /api/workspaces/invitations/{workspace_invitation_id}/


Deletes a workspace invitation if the authorized user has admin rights to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteWorkspaceInvitation();
```

### accept_workspace_invitation - post /api/workspaces/invitations/{workspace_invitation_id}/accept/


Accepts a workspace invitation with the given id if the email address of the user matches that of the invitation.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->acceptWorkspaceInvitation();
```

### reject_workspace_invitation - post /api/workspaces/invitations/{workspace_invitation_id}/reject/


Rejects a workspace invitation with the given id if the email address of the user matches that of the invitation.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->rejectWorkspaceInvitation();
```

### get_workspace_invitation_by_token - get /api/workspaces/invitations/token/{token}/


Responds with the serialized workspace invitation if an invitation with the provided token is found.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->getWorkspaceInvitationByToken();
```

### list_workspace_invitations - get /api/workspaces/invitations/workspace/{workspace_id}/


Lists all the workspace invitations of the workspace related to the provided `workspace_id` parameter if the authorized user has admin rights to that workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listWorkspaceInvitations();
```

### create_workspace_invitation - post /api/workspaces/invitations/workspace/{workspace_id}/


Creates a new workspace invitations for an email address if the authorized user has admin rights to the related workspace. An email containing a sign up link will be send to the user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->createWorkspaceInvitation();
```

### order_workspaces - post /api/workspaces/order/


Changes the order of the provided workspace ids to the matching position that the id has in the list. If the authorized user does not belong to the workspace it will be ignored. The order will be custom for each user.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->orderWorkspaces();
```

### update_workspace_user - patch /api/workspaces/users/{workspace_user_id}/


Updates the existing workspace user related to the provided `workspace_user_id` param if the authorized user has admin rights to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->updateWorkspaceUser();
```

### delete_workspace_user - delete /api/workspaces/users/{workspace_user_id}/


Deletes a workspace user if the authorized user has admin rights to the related workspace.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->deleteWorkspaceUser();
```

### list_workspace_users - get /api/workspaces/users/workspace/{workspace_id}/


Lists all the users that are in a workspace if the authorized user has admin permissions to the related workspace. To add a user to a workspace an invitation must be sent first.

```php
$token = 'my-token';
$authRegistry = new AuthenticationRegistry([
    new DatabaseTokenAuthentication($token),
]);

$client = \CedricZiel\Baserow\Client::create(null, [
    new AddHostPlugin(new Uri('https://baserow.example.com')),
    $authRegistry,
]);
$client->listWorkspaceUsers();
```



## License

Apache 2.0

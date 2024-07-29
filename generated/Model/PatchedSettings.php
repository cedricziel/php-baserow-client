<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PatchedSettings extends \ArrayObject
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
     * Indicates whether new users can create a new account when signing up.
     *
     * @var bool
     */
    protected $allowNewSignups;
    /**
     * Indicates whether invited users can create an account when signing up, even if allow_new_signups is disabled.
     *
     * @var bool
     */
    protected $allowSignupsViaWorkspaceInvitations;
    /**
     * DEPRECATED: Please use the functionally identical `allow_signups_via_workspace_invitations` instead as this attribute is being removed in the future.
     *
     * @var bool
     */
    protected $allowSignupsViaGroupInvitations;
    /**
     * Indicates whether users can request a password reset link.
     *
     * @var bool
     */
    protected $allowResetPassword;
    /**
     * Indicates whether all users can create workspaces, or just staff.
     *
     * @var bool
     */
    protected $allowGlobalWorkspaceCreation;
    /**
     * DEPRECATED: Please use the functionally identical `allow_global_workspace_creation` instead as this attribute is being removed in the future.
     *
     * @var bool
     */
    protected $allowGlobalGroupCreation;
    /**
     * Number of days after the last login for an account pending deletion to be deleted.
     *
     * @var int
     */
    protected $accountDeletionGraceDelay;
    /**
     * Indicates that there are no admin users in the database yet, so in the frontend the signup form will be shown instead of the login page.
     *
     * @var bool
     */
    protected $showAdminSignupPage;
    /**
     * Runs a job once per day which calculates per workspace row counts and file storage usage, displayed on the admin workspace page.
     *
     * @var bool
     */
    protected $trackWorkspaceUsage;
    /**
     * Indicates whether the `We need your help!` message will be shown on the dashboard.
     *
     * @var bool
     */
    protected $showBaserowHelpRequest;
    /**
     * Co-branding logo that's placed next to the Baserow logo (176x29).
     *
     * @var PatchedSettingsCoBrandingLogo|null
     */
    protected $coBrandingLogo;
    /**
     * Controls whether user email addresses have to be verified.
     *
     * `no_verification` - no_verification
     * `recommended` - recommended
     * `enforced` - enforced
     *
     * @var mixed|null
     */
    protected $emailVerification;

    /**
     * Indicates whether new users can create a new account when signing up.
     */
    public function getAllowNewSignups(): bool
    {
        return $this->allowNewSignups;
    }

    /**
     * Indicates whether new users can create a new account when signing up.
     */
    public function setAllowNewSignups(bool $allowNewSignups): self
    {
        $this->initialized['allowNewSignups'] = true;
        $this->allowNewSignups = $allowNewSignups;

        return $this;
    }

    /**
     * Indicates whether invited users can create an account when signing up, even if allow_new_signups is disabled.
     */
    public function getAllowSignupsViaWorkspaceInvitations(): bool
    {
        return $this->allowSignupsViaWorkspaceInvitations;
    }

    /**
     * Indicates whether invited users can create an account when signing up, even if allow_new_signups is disabled.
     */
    public function setAllowSignupsViaWorkspaceInvitations(bool $allowSignupsViaWorkspaceInvitations): self
    {
        $this->initialized['allowSignupsViaWorkspaceInvitations'] = true;
        $this->allowSignupsViaWorkspaceInvitations = $allowSignupsViaWorkspaceInvitations;

        return $this;
    }

    /**
     * DEPRECATED: Please use the functionally identical `allow_signups_via_workspace_invitations` instead as this attribute is being removed in the future.
     */
    public function getAllowSignupsViaGroupInvitations(): bool
    {
        return $this->allowSignupsViaGroupInvitations;
    }

    /**
     * DEPRECATED: Please use the functionally identical `allow_signups_via_workspace_invitations` instead as this attribute is being removed in the future.
     */
    public function setAllowSignupsViaGroupInvitations(bool $allowSignupsViaGroupInvitations): self
    {
        $this->initialized['allowSignupsViaGroupInvitations'] = true;
        $this->allowSignupsViaGroupInvitations = $allowSignupsViaGroupInvitations;

        return $this;
    }

    /**
     * Indicates whether users can request a password reset link.
     */
    public function getAllowResetPassword(): bool
    {
        return $this->allowResetPassword;
    }

    /**
     * Indicates whether users can request a password reset link.
     */
    public function setAllowResetPassword(bool $allowResetPassword): self
    {
        $this->initialized['allowResetPassword'] = true;
        $this->allowResetPassword = $allowResetPassword;

        return $this;
    }

    /**
     * Indicates whether all users can create workspaces, or just staff.
     */
    public function getAllowGlobalWorkspaceCreation(): bool
    {
        return $this->allowGlobalWorkspaceCreation;
    }

    /**
     * Indicates whether all users can create workspaces, or just staff.
     */
    public function setAllowGlobalWorkspaceCreation(bool $allowGlobalWorkspaceCreation): self
    {
        $this->initialized['allowGlobalWorkspaceCreation'] = true;
        $this->allowGlobalWorkspaceCreation = $allowGlobalWorkspaceCreation;

        return $this;
    }

    /**
     * DEPRECATED: Please use the functionally identical `allow_global_workspace_creation` instead as this attribute is being removed in the future.
     */
    public function getAllowGlobalGroupCreation(): bool
    {
        return $this->allowGlobalGroupCreation;
    }

    /**
     * DEPRECATED: Please use the functionally identical `allow_global_workspace_creation` instead as this attribute is being removed in the future.
     */
    public function setAllowGlobalGroupCreation(bool $allowGlobalGroupCreation): self
    {
        $this->initialized['allowGlobalGroupCreation'] = true;
        $this->allowGlobalGroupCreation = $allowGlobalGroupCreation;

        return $this;
    }

    /**
     * Number of days after the last login for an account pending deletion to be deleted.
     */
    public function getAccountDeletionGraceDelay(): int
    {
        return $this->accountDeletionGraceDelay;
    }

    /**
     * Number of days after the last login for an account pending deletion to be deleted.
     */
    public function setAccountDeletionGraceDelay(int $accountDeletionGraceDelay): self
    {
        $this->initialized['accountDeletionGraceDelay'] = true;
        $this->accountDeletionGraceDelay = $accountDeletionGraceDelay;

        return $this;
    }

    /**
     * Indicates that there are no admin users in the database yet, so in the frontend the signup form will be shown instead of the login page.
     */
    public function getShowAdminSignupPage(): bool
    {
        return $this->showAdminSignupPage;
    }

    /**
     * Indicates that there are no admin users in the database yet, so in the frontend the signup form will be shown instead of the login page.
     */
    public function setShowAdminSignupPage(bool $showAdminSignupPage): self
    {
        $this->initialized['showAdminSignupPage'] = true;
        $this->showAdminSignupPage = $showAdminSignupPage;

        return $this;
    }

    /**
     * Runs a job once per day which calculates per workspace row counts and file storage usage, displayed on the admin workspace page.
     */
    public function getTrackWorkspaceUsage(): bool
    {
        return $this->trackWorkspaceUsage;
    }

    /**
     * Runs a job once per day which calculates per workspace row counts and file storage usage, displayed on the admin workspace page.
     */
    public function setTrackWorkspaceUsage(bool $trackWorkspaceUsage): self
    {
        $this->initialized['trackWorkspaceUsage'] = true;
        $this->trackWorkspaceUsage = $trackWorkspaceUsage;

        return $this;
    }

    /**
     * Indicates whether the `We need your help!` message will be shown on the dashboard.
     */
    public function getShowBaserowHelpRequest(): bool
    {
        return $this->showBaserowHelpRequest;
    }

    /**
     * Indicates whether the `We need your help!` message will be shown on the dashboard.
     */
    public function setShowBaserowHelpRequest(bool $showBaserowHelpRequest): self
    {
        $this->initialized['showBaserowHelpRequest'] = true;
        $this->showBaserowHelpRequest = $showBaserowHelpRequest;

        return $this;
    }

    /**
     * Co-branding logo that's placed next to the Baserow logo (176x29).
     */
    public function getCoBrandingLogo(): ?PatchedSettingsCoBrandingLogo
    {
        return $this->coBrandingLogo;
    }

    /**
     * Co-branding logo that's placed next to the Baserow logo (176x29).
     */
    public function setCoBrandingLogo(?PatchedSettingsCoBrandingLogo $coBrandingLogo): self
    {
        $this->initialized['coBrandingLogo'] = true;
        $this->coBrandingLogo = $coBrandingLogo;

        return $this;
    }

    /**
     * Controls whether user email addresses have to be verified.
     *
     * `no_verification` - no_verification
     * `recommended` - recommended
     * `enforced` - enforced
     */
    public function getEmailVerification()
    {
        return $this->emailVerification;
    }

    /**
     * Controls whether user email addresses have to be verified.
     *
     * `no_verification` - no_verification
     * `recommended` - recommended
     * `enforced` - enforced
     */
    public function setEmailVerification($emailVerification): self
    {
        $this->initialized['emailVerification'] = true;
        $this->emailVerification = $emailVerification;

        return $this;
    }
}

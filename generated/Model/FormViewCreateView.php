<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class FormViewCreateView extends \ArrayObject
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
    protected $name;
    /**
     * * `grid` - grid
     * `gallery` - gallery
     * `form` - form
     * `kanban` - kanban
     * `calendar` - calendar.
     *
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $ownershipType = 'collaborative';
    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
     *
     * `AND` - And
     * `OR` - Or
     *
     * @var string
     */
    protected $filterType;
    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     *
     * @var bool
     */
    protected $filtersDisabled;
    /**
     * The title that is displayed at the beginning of the form.
     *
     * @var string
     */
    protected $title;
    /**
     * The description that is displayed at the beginning of the form.
     *
     * @var string
     */
    protected $description;
    /**
     * Configurable mode of the form.
     *
     * `form` - form
     * `survey` - survey
     *
     * @var string
     */
    protected $mode;
    /**
     * The cover image that must be displayed at the top of the form.
     *
     * @var FormViewCreateViewCoverImage|null
     */
    protected $coverImage;
    /**
     * The logo image that must be displayed at the top of the form.
     *
     * @var FormViewCreateViewLogoImage|null
     */
    protected $logoImage;
    /**
     * The text displayed on the submit button.
     *
     * @var string
     */
    protected $submitText;
    /**
     * The action that must be performed after the visitor has filled out the form.
     *
     * `MESSAGE` - Message
     * `REDIRECT` - Redirect
     *
     * @var string
     */
    protected $submitAction;
    /**
     * If the `submit_action` is MESSAGE, then this message will be shown to the visitor after submitting the form.
     *
     * @var string
     */
    protected $submitActionMessage;
    /**
     * If the `submit_action` is REDIRECT,then the visitors will be redirected to the this URL after submitting the form.
     *
     * @var string
     */
    protected $submitActionRedirectUrl;
    /**
     * A boolean indicating if the current user should be notified when the form is submitted.
     *
     * @var bool
     */
    protected $receiveNotificationOnSubmit;
    /**
     * Indicates whether the view is publicly accessible to visitors.
     *
     * @var bool
     */
    protected $public;
    /**
     * The unique slug that can be used to construct a public URL.
     *
     * @var string
     */
    protected $slug;

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
     * * `grid` - grid
     * `gallery` - gallery
     * `form` - form
     * `kanban` - kanban
     * `calendar` - calendar.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * * `grid` - grid
     * `gallery` - gallery
     * `form` - form
     * `kanban` - kanban
     * `calendar` - calendar.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getOwnershipType(): string
    {
        return $this->ownershipType;
    }

    public function setOwnershipType(string $ownershipType): self
    {
        $this->initialized['ownershipType'] = true;
        $this->ownershipType = $ownershipType;

        return $this;
    }

    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
     *
     * `AND` - And
     * `OR` - Or
     */
    public function getFilterType(): string
    {
        return $this->filterType;
    }

    /**
     * Indicates whether all the rows should apply to all filters (AND) or to any filter (OR).
     *
     * `AND` - And
     * `OR` - Or
     */
    public function setFilterType(string $filterType): self
    {
        $this->initialized['filterType'] = true;
        $this->filterType = $filterType;

        return $this;
    }

    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     */
    public function getFiltersDisabled(): bool
    {
        return $this->filtersDisabled;
    }

    /**
     * Allows users to see results unfiltered while still keeping the filters saved for the view.
     */
    public function setFiltersDisabled(bool $filtersDisabled): self
    {
        $this->initialized['filtersDisabled'] = true;
        $this->filtersDisabled = $filtersDisabled;

        return $this;
    }

    /**
     * The title that is displayed at the beginning of the form.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The title that is displayed at the beginning of the form.
     */
    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * The description that is displayed at the beginning of the form.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * The description that is displayed at the beginning of the form.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Configurable mode of the form.
     *
     * `form` - form
     * `survey` - survey
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * Configurable mode of the form.
     *
     * `form` - form
     * `survey` - survey
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

        return $this;
    }

    /**
     * The cover image that must be displayed at the top of the form.
     */
    public function getCoverImage(): ?FormViewCreateViewCoverImage
    {
        return $this->coverImage;
    }

    /**
     * The cover image that must be displayed at the top of the form.
     */
    public function setCoverImage(?FormViewCreateViewCoverImage $coverImage): self
    {
        $this->initialized['coverImage'] = true;
        $this->coverImage = $coverImage;

        return $this;
    }

    /**
     * The logo image that must be displayed at the top of the form.
     */
    public function getLogoImage(): ?FormViewCreateViewLogoImage
    {
        return $this->logoImage;
    }

    /**
     * The logo image that must be displayed at the top of the form.
     */
    public function setLogoImage(?FormViewCreateViewLogoImage $logoImage): self
    {
        $this->initialized['logoImage'] = true;
        $this->logoImage = $logoImage;

        return $this;
    }

    /**
     * The text displayed on the submit button.
     */
    public function getSubmitText(): string
    {
        return $this->submitText;
    }

    /**
     * The text displayed on the submit button.
     */
    public function setSubmitText(string $submitText): self
    {
        $this->initialized['submitText'] = true;
        $this->submitText = $submitText;

        return $this;
    }

    /**
     * The action that must be performed after the visitor has filled out the form.
     *
     * `MESSAGE` - Message
     * `REDIRECT` - Redirect
     */
    public function getSubmitAction(): string
    {
        return $this->submitAction;
    }

    /**
     * The action that must be performed after the visitor has filled out the form.
     *
     * `MESSAGE` - Message
     * `REDIRECT` - Redirect
     */
    public function setSubmitAction(string $submitAction): self
    {
        $this->initialized['submitAction'] = true;
        $this->submitAction = $submitAction;

        return $this;
    }

    /**
     * If the `submit_action` is MESSAGE, then this message will be shown to the visitor after submitting the form.
     */
    public function getSubmitActionMessage(): string
    {
        return $this->submitActionMessage;
    }

    /**
     * If the `submit_action` is MESSAGE, then this message will be shown to the visitor after submitting the form.
     */
    public function setSubmitActionMessage(string $submitActionMessage): self
    {
        $this->initialized['submitActionMessage'] = true;
        $this->submitActionMessage = $submitActionMessage;

        return $this;
    }

    /**
     * If the `submit_action` is REDIRECT,then the visitors will be redirected to the this URL after submitting the form.
     */
    public function getSubmitActionRedirectUrl(): string
    {
        return $this->submitActionRedirectUrl;
    }

    /**
     * If the `submit_action` is REDIRECT,then the visitors will be redirected to the this URL after submitting the form.
     */
    public function setSubmitActionRedirectUrl(string $submitActionRedirectUrl): self
    {
        $this->initialized['submitActionRedirectUrl'] = true;
        $this->submitActionRedirectUrl = $submitActionRedirectUrl;

        return $this;
    }

    /**
     * A boolean indicating if the current user should be notified when the form is submitted.
     */
    public function getReceiveNotificationOnSubmit(): bool
    {
        return $this->receiveNotificationOnSubmit;
    }

    /**
     * A boolean indicating if the current user should be notified when the form is submitted.
     */
    public function setReceiveNotificationOnSubmit(bool $receiveNotificationOnSubmit): self
    {
        $this->initialized['receiveNotificationOnSubmit'] = true;
        $this->receiveNotificationOnSubmit = $receiveNotificationOnSubmit;

        return $this;
    }

    /**
     * Indicates whether the view is publicly accessible to visitors.
     */
    public function getPublic(): bool
    {
        return $this->public;
    }

    /**
     * Indicates whether the view is publicly accessible to visitors.
     */
    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }

    /**
     * The unique slug that can be used to construct a public URL.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The unique slug that can be used to construct a public URL.
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}

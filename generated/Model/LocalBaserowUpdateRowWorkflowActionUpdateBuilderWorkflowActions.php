<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class LocalBaserowUpdateRowWorkflowActionUpdateBuilderWorkflowActions extends \ArrayObject
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
     * The type of the workflow action.
     *
     * `notification` - notification
     * `open_page` - open_page
     * `create_row` - create_row
     * `update_row` - update_row
     * `logout` - logout
     * `refresh_data_source` - refresh_data_source
     *
     * @var string
     */
    protected $type;
    /**
     * The service which this workflow action is associated with.
     */
    protected $service;

    /**
     * The type of the workflow action.
     *
     * `notification` - notification
     * `open_page` - open_page
     * `create_row` - create_row
     * `update_row` - update_row
     * `logout` - logout
     * `refresh_data_source` - refresh_data_source
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the workflow action.
     *
     * `notification` - notification
     * `open_page` - open_page
     * `create_row` - create_row
     * `update_row` - update_row
     * `logout` - logout
     * `refresh_data_source` - refresh_data_source
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * The service which this workflow action is associated with.
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * The service which this workflow action is associated with.
     */
    public function setService($service): self
    {
        $this->initialized['service'] = true;
        $this->service = $service;

        return $this;
    }
}

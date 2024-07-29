<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class UndoRedoResponse extends \ArrayObject
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
     * @var list<UndoRedoAction>
     */
    protected $actions;
    /**
     * Indicates the result of the undo/redo operation. Will be 'SUCCESS' on success, 'NOTHING_TO_DO' when there is no action to undo/redo and 'SKIPPED_DUE_TO_ERROR' when the undo/redo failed due to a conflict or error and was skipped over.
     *
     * @var string
     */
    protected $resultCode;

    /**
     * @return list<UndoRedoAction>
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    /**
     * @param list<UndoRedoAction> $actions
     */
    public function setActions(array $actions): self
    {
        $this->initialized['actions'] = true;
        $this->actions = $actions;

        return $this;
    }

    /**
     * Indicates the result of the undo/redo operation. Will be 'SUCCESS' on success, 'NOTHING_TO_DO' when there is no action to undo/redo and 'SKIPPED_DUE_TO_ERROR' when the undo/redo failed due to a conflict or error and was skipped over.
     */
    public function getResultCode(): string
    {
        return $this->resultCode;
    }

    /**
     * Indicates the result of the undo/redo operation. Will be 'SUCCESS' on success, 'NOTHING_TO_DO' when there is no action to undo/redo and 'SKIPPED_DUE_TO_ERROR' when the undo/redo failed due to a conflict or error and was skipped over.
     */
    public function setResultCode(string $resultCode): self
    {
        $this->initialized['resultCode'] = true;
        $this->resultCode = $resultCode;

        return $this;
    }
}

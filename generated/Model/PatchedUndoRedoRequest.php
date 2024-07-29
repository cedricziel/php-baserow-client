<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Model;

class PatchedUndoRedoRequest extends \ArrayObject
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
     * A JSON object with keys and values representing the various action scopes to include when undoing or redoing. Every action in Baserow will be associated with a action scope, when undoing/redoing only actions which match any of the provided scope key:value pairs will included when this endpoint picks the next action to undo/redo. If no scopes are provided then all actions performed in the client session will be included when undoing/redoing.
     *
     * @var PatchedUndoRedoRequestScopes
     */
    protected $scopes;

    /**
     * A JSON object with keys and values representing the various action scopes to include when undoing or redoing. Every action in Baserow will be associated with a action scope, when undoing/redoing only actions which match any of the provided scope key:value pairs will included when this endpoint picks the next action to undo/redo. If no scopes are provided then all actions performed in the client session will be included when undoing/redoing.
     */
    public function getScopes(): PatchedUndoRedoRequestScopes
    {
        return $this->scopes;
    }

    /**
     * A JSON object with keys and values representing the various action scopes to include when undoing or redoing. Every action in Baserow will be associated with a action scope, when undoing/redoing only actions which match any of the provided scope key:value pairs will included when this endpoint picks the next action to undo/redo. If no scopes are provided then all actions performed in the client session will be included when undoing/redoing.
     */
    public function setScopes(PatchedUndoRedoRequestScopes $scopes): self
    {
        $this->initialized['scopes'] = true;
        $this->scopes = $scopes;

        return $this;
    }
}

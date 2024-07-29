<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class RowCommentCreate extends \ArrayObject
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
     * The rich text comment content.
     */
    protected $message;

    /**
     * The rich text comment content.
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The rich text comment content.
     */
    public function setMessage($message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}

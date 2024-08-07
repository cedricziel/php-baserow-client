<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PatchedGenerativeAISettings extends \ArrayObject
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
     * @var OpenAISettings
     */
    protected $openai;
    /**
     * @var OllamaSettings
     */
    protected $ollama;

    public function getOpenai(): OpenAISettings
    {
        return $this->openai;
    }

    public function setOpenai(OpenAISettings $openai): self
    {
        $this->initialized['openai'] = true;
        $this->openai = $openai;

        return $this;
    }

    public function getOllama(): OllamaSettings
    {
        return $this->ollama;
    }

    public function setOllama(OllamaSettings $ollama): self
    {
        $this->initialized['ollama'] = true;
        $this->ollama = $ollama;

        return $this;
    }
}

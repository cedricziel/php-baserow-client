<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class AIFieldFieldSerializerWithRelatedFields extends \ArrayObject
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
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $tableId;
    /**
     * @var string
     */
    protected $name;
    /**
     * Lowest first.
     *
     * @var int
     */
    protected $order;
    /**
     * The type of the related field.
     *
     * @var string
     */
    protected $type;
    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     *
     * @var bool
     */
    protected $primary;
    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     *
     * @var bool
     */
    protected $readOnly;
    /**
     * Field description.
     *
     * @var string|null
     */
    protected $description;
    /**
     * A list of related fields which also changed.
     *
     * @var list<Field>
     */
    protected $relatedFields;
    /**
     * @var string|null
     */
    protected $aiGenerativeAiType;
    /**
     * @var string|null
     */
    protected $aiGenerativeAiModel;
    /**
     * The prompt that must run for each row. Must be an formula.
     *
     * @var string
     */
    protected $aiPrompt = '';
    /**
     * File field that will be used as a knowledge base for the AI model.
     *
     * @var int|null
     */
    protected $aiFileFieldId;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getTableId(): int
    {
        return $this->tableId;
    }

    public function setTableId(int $tableId): self
    {
        $this->initialized['tableId'] = true;
        $this->tableId = $tableId;

        return $this;
    }

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
     * Lowest first.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * Lowest first.
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * The type of the related field.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the related field.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * Indicates if the field is a primary field. If `true` the field cannot be deleted and the value should represent the whole row.
     */
    public function setPrimary(bool $primary): self
    {
        $this->initialized['primary'] = true;
        $this->primary = $primary;

        return $this;
    }

    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     */
    public function getReadOnly(): bool
    {
        return $this->readOnly;
    }

    /**
     * Indicates whether the field is a read only field. If true, it's not possible to update the cell value.
     */
    public function setReadOnly(bool $readOnly): self
    {
        $this->initialized['readOnly'] = true;
        $this->readOnly = $readOnly;

        return $this;
    }

    /**
     * Field description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Field description.
     */
    public function setDescription(?string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * A list of related fields which also changed.
     *
     * @return list<Field>
     */
    public function getRelatedFields(): array
    {
        return $this->relatedFields;
    }

    /**
     * A list of related fields which also changed.
     *
     * @param list<Field> $relatedFields
     */
    public function setRelatedFields(array $relatedFields): self
    {
        $this->initialized['relatedFields'] = true;
        $this->relatedFields = $relatedFields;

        return $this;
    }

    public function getAiGenerativeAiType(): ?string
    {
        return $this->aiGenerativeAiType;
    }

    public function setAiGenerativeAiType(?string $aiGenerativeAiType): self
    {
        $this->initialized['aiGenerativeAiType'] = true;
        $this->aiGenerativeAiType = $aiGenerativeAiType;

        return $this;
    }

    public function getAiGenerativeAiModel(): ?string
    {
        return $this->aiGenerativeAiModel;
    }

    public function setAiGenerativeAiModel(?string $aiGenerativeAiModel): self
    {
        $this->initialized['aiGenerativeAiModel'] = true;
        $this->aiGenerativeAiModel = $aiGenerativeAiModel;

        return $this;
    }

    /**
     * The prompt that must run for each row. Must be an formula.
     */
    public function getAiPrompt(): string
    {
        return $this->aiPrompt;
    }

    /**
     * The prompt that must run for each row. Must be an formula.
     */
    public function setAiPrompt(string $aiPrompt): self
    {
        $this->initialized['aiPrompt'] = true;
        $this->aiPrompt = $aiPrompt;

        return $this;
    }

    /**
     * File field that will be used as a knowledge base for the AI model.
     */
    public function getAiFileFieldId(): ?int
    {
        return $this->aiFileFieldId;
    }

    /**
     * File field that will be used as a knowledge base for the AI model.
     */
    public function setAiFileFieldId(?int $aiFileFieldId): self
    {
        $this->initialized['aiFileFieldId'] = true;
        $this->aiFileFieldId = $aiFileFieldId;

        return $this;
    }
}

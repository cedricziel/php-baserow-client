<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class PublicFormViewFieldOptions extends \ArrayObject
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
     * If provided, then this value will be visible above the field input.
     *
     * @var string
     */
    protected $name;
    /**
     * If provided, then this value be will be shown under the field name.
     *
     * @var string
     */
    protected $description;
    /**
     * Indicates whether the field is required for the visitor to fill out.
     *
     * @var bool
     */
    protected $required;
    /**
     * The order that the field has in the form. Lower value is first.
     *
     * @var int
     */
    protected $order;
    /**
     * The properties of the related field. These can be used to construct the correct input. Additional properties could be added depending on the field type.
     *
     * @var PublicFormViewFieldOptionsField
     */
    protected $field;
    /**
     * Indicates whether this field is visible when the conditions are met.
     *
     * @var bool
     */
    protected $showWhenMatchingConditions;
    /**
     * Indicates whether all (AND) or any (OR) of the conditions should match before shown.
     *
     * `AND` - And
     * `OR` - Or
     *
     * @var string
     */
    protected $conditionType;
    /**
     * @var list<FormViewFieldOptionsCondition>
     */
    protected $conditions;
    /**
     * @var list<FormViewFieldOptionsConditionGroup>
     */
    protected $conditionGroups;
    /**
     * @var list<FormViewFieldOptionsConditionGroup>
     */
    protected $groups;
    /**
     * Indicates which field input component is used in the form. The value is only used in the frontend, and can differ per field.
     *
     * @var string
     */
    protected $fieldComponent;

    /**
     * If provided, then this value will be visible above the field input.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * If provided, then this value will be visible above the field input.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * If provided, then this value be will be shown under the field name.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * If provided, then this value be will be shown under the field name.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * Indicates whether the field is required for the visitor to fill out.
     */
    public function getRequired(): bool
    {
        return $this->required;
    }

    /**
     * Indicates whether the field is required for the visitor to fill out.
     */
    public function setRequired(bool $required): self
    {
        $this->initialized['required'] = true;
        $this->required = $required;

        return $this;
    }

    /**
     * The order that the field has in the form. Lower value is first.
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * The order that the field has in the form. Lower value is first.
     */
    public function setOrder(int $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * The properties of the related field. These can be used to construct the correct input. Additional properties could be added depending on the field type.
     */
    public function getField(): PublicFormViewFieldOptionsField
    {
        return $this->field;
    }

    /**
     * The properties of the related field. These can be used to construct the correct input. Additional properties could be added depending on the field type.
     */
    public function setField(PublicFormViewFieldOptionsField $field): self
    {
        $this->initialized['field'] = true;
        $this->field = $field;

        return $this;
    }

    /**
     * Indicates whether this field is visible when the conditions are met.
     */
    public function getShowWhenMatchingConditions(): bool
    {
        return $this->showWhenMatchingConditions;
    }

    /**
     * Indicates whether this field is visible when the conditions are met.
     */
    public function setShowWhenMatchingConditions(bool $showWhenMatchingConditions): self
    {
        $this->initialized['showWhenMatchingConditions'] = true;
        $this->showWhenMatchingConditions = $showWhenMatchingConditions;

        return $this;
    }

    /**
     * Indicates whether all (AND) or any (OR) of the conditions should match before shown.
     *
     * `AND` - And
     * `OR` - Or
     */
    public function getConditionType(): string
    {
        return $this->conditionType;
    }

    /**
     * Indicates whether all (AND) or any (OR) of the conditions should match before shown.
     *
     * `AND` - And
     * `OR` - Or
     */
    public function setConditionType(string $conditionType): self
    {
        $this->initialized['conditionType'] = true;
        $this->conditionType = $conditionType;

        return $this;
    }

    /**
     * @return list<FormViewFieldOptionsCondition>
     */
    public function getConditions(): array
    {
        return $this->conditions;
    }

    /**
     * @param list<FormViewFieldOptionsCondition> $conditions
     */
    public function setConditions(array $conditions): self
    {
        $this->initialized['conditions'] = true;
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * @return list<FormViewFieldOptionsConditionGroup>
     */
    public function getConditionGroups(): array
    {
        return $this->conditionGroups;
    }

    /**
     * @param list<FormViewFieldOptionsConditionGroup> $conditionGroups
     */
    public function setConditionGroups(array $conditionGroups): self
    {
        $this->initialized['conditionGroups'] = true;
        $this->conditionGroups = $conditionGroups;

        return $this;
    }

    /**
     * @return list<FormViewFieldOptionsConditionGroup>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param list<FormViewFieldOptionsConditionGroup> $groups
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;

        return $this;
    }

    /**
     * Indicates which field input component is used in the form. The value is only used in the frontend, and can differ per field.
     */
    public function getFieldComponent(): string
    {
        return $this->fieldComponent;
    }

    /**
     * Indicates which field input component is used in the form. The value is only used in the frontend, and can differ per field.
     */
    public function setFieldComponent(string $fieldComponent): self
    {
        $this->initialized['fieldComponent'] = true;
        $this->fieldComponent = $fieldComponent;

        return $this;
    }
}

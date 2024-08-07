<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class ExampleRowResponse extends \ArrayObject
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
     * The unique identifier of the row in the table.
     *
     * @var int
     */
    protected $id;
    /**
     * Indicates the position of the row, lowest first and highest last.
     *
     * @var string
     */
    protected $order;
    /**
     * This field represents the `text` field. The number in field_1 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field1;
    /**
     * This field represents the `long_text` field. The number in field_2 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field2;
    /**
     * This field represents the `url` field. The number in field_3 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field3;
    /**
     * This field represents the `email` field. The number in field_4 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field4;
    /**
     * This field represents the `number` field. The number in field_5 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field5;
    /**
     * This field represents the `rating` field. The number in field_6 is in a normal request or response the id of the field.
     *
     * @var int
     */
    protected $field6 = 0;
    /**
     * This field represents the `boolean` field. The number in field_7 is in a normal request or response the id of the field.
     *
     * @var bool
     */
    protected $field7 = false;
    /**
     * This field represents the `date` field. The number in field_8 is in a normal request or response the id of the field.
     *
     * @var \DateTime|null
     */
    protected $field8;
    /**
     * This field represents the `last_modified` field. The number in field_9 is in a normal request or response the id of the field.
     *
     * @var \DateTime
     */
    protected $field9;
    /**
     * This field represents the `last_modified_by` field. The number in field_10 is in a normal request or response the id of the field.
     *
     * @var ExampleRowResponseField10
     */
    protected $field10;
    /**
     * This field represents the `created_on` field. The number in field_11 is in a normal request or response the id of the field.
     *
     * @var \DateTime
     */
    protected $field11;
    /**
     * This field represents the `created_by` field. The number in field_12 is in a normal request or response the id of the field.
     *
     * @var ExampleRowResponseField12
     */
    protected $field12;
    /**
     * This field represents the `duration` field. The number in field_13 is in a normal request or response the id of the field. The provided value can be a string in one of the available formats or a number representing the duration in seconds. In any case, the value will be rounded to match the field's duration format.
     *
     * @var float|null
     */
    protected $field13;
    /**
     * This field represents the `link_row` field. The number in field_14 is in a normal request or response the id of the field. This field accepts an `array` containing the ids or the names of the related rows. A name is the value of the primary key of the related row. This field also accepts a string with names separated by a comma or an array of row names. You can also provide a unique row Id.The response contains a list of objects containing the `id` and the primary field's `value` as a string for display purposes.
     *
     * @var list<LinkRowValue>
     */
    protected $field14;
    /**
     * This field represents the `file` field. The number in field_15 is in a normal request or response the id of the field. This field accepts an `array` containing objects with the name of the file. The response contains an `array` of more detailed objects related to the files.
     *
     * @var list<FileFieldResponse>
     */
    protected $field15;
    /**
     * This field represents the `single_select` field. The number in field_16 is in a normal request or response the id of the field. This field accepts an `integer` representing the chosen select option id related to the field. Available ids can be found when getting or listing the field. The response represents chosen field, but also the value and color is exposed.
     *
     * @var ExampleRowResponseField16|null
     */
    protected $field16;
    /**
     * This field represents the `multiple_select` field. The number in field_17 is in a normal request or response the id of the field. This field accepts a list of `integer` each of which representing the chosen select option id related to the field. Available ids can be foundwhen getting or listing the field. You can also send a list of option names in which case the option are searched by name. The first one that matches is used. This field also accepts a string with names separated by a comma or an array of file names. The response represents chosen field, but also the value and color is exposed.
     *
     * @var list<SelectOption>|null
     */
    protected $field17;
    /**
     * This field represents the `phone_number` field. The number in field_18 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field18;
    /**
     * This field represents the `formula` field. The number in field_19 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field19;
    /**
     * This field represents the `count` field. The number in field_20 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field20;
    /**
     * This field represents the `rollup` field. The number in field_21 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field21;
    /**
     * This field represents the `lookup` field. The number in field_22 is in a normal request or response the id of the field.
     *
     * @var string|null
     */
    protected $field22;
    /**
     * This field represents the `multiple_collaborators` field. The number in field_23 is in a normal request or response the id of the field. This field accepts a list of objects representing the chosen collaborators through the object's `id` property. The id is Baserow user id. The response objects also contains the collaborator name directly along with its id.
     *
     * @var list<Collaborator>
     */
    protected $field23;
    /**
     * This field represents the `uuid` field. The number in field_24 is in a normal request or response the id of the field. Contains a unique and persistent UUID for every row.
     *
     * @var string
     */
    protected $field24;
    /**
     * This field represents the `autonumber` field. The number in field_25 is in a normal request or response the id of the field. Contains a unique and persistent incremental integer number for every row.
     *
     * @var int
     */
    protected $field25;
    /**
     * This field represents the `password` field. The number in field_26 is in a normal request or response the id of the field. Allows setting a write only password value. Providing a string will set the password, `null` will unset it, `true` will be ignored. The response will respond with `true` is a password is set, but will never expose the password itself.
     *
     * @var bool
     */
    protected $field26;
    /**
     * This field represents the `ai` field. The number in field_27 is in a normal request or response the id of the field. Holds a text value that is generated by a generative AI model using a dynamic prompt.
     *
     * @var string|null
     */
    protected $field27;

    /**
     * The unique identifier of the row in the table.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * The unique identifier of the row in the table.
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates the position of the row, lowest first and highest last.
     */
    public function getOrder(): string
    {
        return $this->order;
    }

    /**
     * Indicates the position of the row, lowest first and highest last.
     */
    public function setOrder(string $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;

        return $this;
    }

    /**
     * This field represents the `text` field. The number in field_1 is in a normal request or response the id of the field.
     */
    public function getField1(): ?string
    {
        return $this->field1;
    }

    /**
     * This field represents the `text` field. The number in field_1 is in a normal request or response the id of the field.
     */
    public function setField1(?string $field1): self
    {
        $this->initialized['field1'] = true;
        $this->field1 = $field1;

        return $this;
    }

    /**
     * This field represents the `long_text` field. The number in field_2 is in a normal request or response the id of the field.
     */
    public function getField2(): ?string
    {
        return $this->field2;
    }

    /**
     * This field represents the `long_text` field. The number in field_2 is in a normal request or response the id of the field.
     */
    public function setField2(?string $field2): self
    {
        $this->initialized['field2'] = true;
        $this->field2 = $field2;

        return $this;
    }

    /**
     * This field represents the `url` field. The number in field_3 is in a normal request or response the id of the field.
     */
    public function getField3(): ?string
    {
        return $this->field3;
    }

    /**
     * This field represents the `url` field. The number in field_3 is in a normal request or response the id of the field.
     */
    public function setField3(?string $field3): self
    {
        $this->initialized['field3'] = true;
        $this->field3 = $field3;

        return $this;
    }

    /**
     * This field represents the `email` field. The number in field_4 is in a normal request or response the id of the field.
     */
    public function getField4(): ?string
    {
        return $this->field4;
    }

    /**
     * This field represents the `email` field. The number in field_4 is in a normal request or response the id of the field.
     */
    public function setField4(?string $field4): self
    {
        $this->initialized['field4'] = true;
        $this->field4 = $field4;

        return $this;
    }

    /**
     * This field represents the `number` field. The number in field_5 is in a normal request or response the id of the field.
     */
    public function getField5(): ?string
    {
        return $this->field5;
    }

    /**
     * This field represents the `number` field. The number in field_5 is in a normal request or response the id of the field.
     */
    public function setField5(?string $field5): self
    {
        $this->initialized['field5'] = true;
        $this->field5 = $field5;

        return $this;
    }

    /**
     * This field represents the `rating` field. The number in field_6 is in a normal request or response the id of the field.
     */
    public function getField6(): int
    {
        return $this->field6;
    }

    /**
     * This field represents the `rating` field. The number in field_6 is in a normal request or response the id of the field.
     */
    public function setField6(int $field6): self
    {
        $this->initialized['field6'] = true;
        $this->field6 = $field6;

        return $this;
    }

    /**
     * This field represents the `boolean` field. The number in field_7 is in a normal request or response the id of the field.
     */
    public function getField7(): bool
    {
        return $this->field7;
    }

    /**
     * This field represents the `boolean` field. The number in field_7 is in a normal request or response the id of the field.
     */
    public function setField7(bool $field7): self
    {
        $this->initialized['field7'] = true;
        $this->field7 = $field7;

        return $this;
    }

    /**
     * This field represents the `date` field. The number in field_8 is in a normal request or response the id of the field.
     */
    public function getField8(): ?\DateTime
    {
        return $this->field8;
    }

    /**
     * This field represents the `date` field. The number in field_8 is in a normal request or response the id of the field.
     */
    public function setField8(?\DateTime $field8): self
    {
        $this->initialized['field8'] = true;
        $this->field8 = $field8;

        return $this;
    }

    /**
     * This field represents the `last_modified` field. The number in field_9 is in a normal request or response the id of the field.
     */
    public function getField9(): \DateTime
    {
        return $this->field9;
    }

    /**
     * This field represents the `last_modified` field. The number in field_9 is in a normal request or response the id of the field.
     */
    public function setField9(\DateTime $field9): self
    {
        $this->initialized['field9'] = true;
        $this->field9 = $field9;

        return $this;
    }

    /**
     * This field represents the `last_modified_by` field. The number in field_10 is in a normal request or response the id of the field.
     */
    public function getField10(): ExampleRowResponseField10
    {
        return $this->field10;
    }

    /**
     * This field represents the `last_modified_by` field. The number in field_10 is in a normal request or response the id of the field.
     */
    public function setField10(ExampleRowResponseField10 $field10): self
    {
        $this->initialized['field10'] = true;
        $this->field10 = $field10;

        return $this;
    }

    /**
     * This field represents the `created_on` field. The number in field_11 is in a normal request or response the id of the field.
     */
    public function getField11(): \DateTime
    {
        return $this->field11;
    }

    /**
     * This field represents the `created_on` field. The number in field_11 is in a normal request or response the id of the field.
     */
    public function setField11(\DateTime $field11): self
    {
        $this->initialized['field11'] = true;
        $this->field11 = $field11;

        return $this;
    }

    /**
     * This field represents the `created_by` field. The number in field_12 is in a normal request or response the id of the field.
     */
    public function getField12(): ExampleRowResponseField12
    {
        return $this->field12;
    }

    /**
     * This field represents the `created_by` field. The number in field_12 is in a normal request or response the id of the field.
     */
    public function setField12(ExampleRowResponseField12 $field12): self
    {
        $this->initialized['field12'] = true;
        $this->field12 = $field12;

        return $this;
    }

    /**
     * This field represents the `duration` field. The number in field_13 is in a normal request or response the id of the field. The provided value can be a string in one of the available formats or a number representing the duration in seconds. In any case, the value will be rounded to match the field's duration format.
     */
    public function getField13(): ?float
    {
        return $this->field13;
    }

    /**
     * This field represents the `duration` field. The number in field_13 is in a normal request or response the id of the field. The provided value can be a string in one of the available formats or a number representing the duration in seconds. In any case, the value will be rounded to match the field's duration format.
     */
    public function setField13(?float $field13): self
    {
        $this->initialized['field13'] = true;
        $this->field13 = $field13;

        return $this;
    }

    /**
     * This field represents the `link_row` field. The number in field_14 is in a normal request or response the id of the field. This field accepts an `array` containing the ids or the names of the related rows. A name is the value of the primary key of the related row. This field also accepts a string with names separated by a comma or an array of row names. You can also provide a unique row Id.The response contains a list of objects containing the `id` and the primary field's `value` as a string for display purposes.
     *
     * @return list<LinkRowValue>
     */
    public function getField14(): array
    {
        return $this->field14;
    }

    /**
     * This field represents the `link_row` field. The number in field_14 is in a normal request or response the id of the field. This field accepts an `array` containing the ids or the names of the related rows. A name is the value of the primary key of the related row. This field also accepts a string with names separated by a comma or an array of row names. You can also provide a unique row Id.The response contains a list of objects containing the `id` and the primary field's `value` as a string for display purposes.
     *
     * @param list<LinkRowValue> $field14
     */
    public function setField14(array $field14): self
    {
        $this->initialized['field14'] = true;
        $this->field14 = $field14;

        return $this;
    }

    /**
     * This field represents the `file` field. The number in field_15 is in a normal request or response the id of the field. This field accepts an `array` containing objects with the name of the file. The response contains an `array` of more detailed objects related to the files.
     *
     * @return list<FileFieldResponse>
     */
    public function getField15(): array
    {
        return $this->field15;
    }

    /**
     * This field represents the `file` field. The number in field_15 is in a normal request or response the id of the field. This field accepts an `array` containing objects with the name of the file. The response contains an `array` of more detailed objects related to the files.
     *
     * @param list<FileFieldResponse> $field15
     */
    public function setField15(array $field15): self
    {
        $this->initialized['field15'] = true;
        $this->field15 = $field15;

        return $this;
    }

    /**
     * This field represents the `single_select` field. The number in field_16 is in a normal request or response the id of the field. This field accepts an `integer` representing the chosen select option id related to the field. Available ids can be found when getting or listing the field. The response represents chosen field, but also the value and color is exposed.
     */
    public function getField16(): ?ExampleRowResponseField16
    {
        return $this->field16;
    }

    /**
     * This field represents the `single_select` field. The number in field_16 is in a normal request or response the id of the field. This field accepts an `integer` representing the chosen select option id related to the field. Available ids can be found when getting or listing the field. The response represents chosen field, but also the value and color is exposed.
     */
    public function setField16(?ExampleRowResponseField16 $field16): self
    {
        $this->initialized['field16'] = true;
        $this->field16 = $field16;

        return $this;
    }

    /**
     * This field represents the `multiple_select` field. The number in field_17 is in a normal request or response the id of the field. This field accepts a list of `integer` each of which representing the chosen select option id related to the field. Available ids can be foundwhen getting or listing the field. You can also send a list of option names in which case the option are searched by name. The first one that matches is used. This field also accepts a string with names separated by a comma or an array of file names. The response represents chosen field, but also the value and color is exposed.
     *
     * @return list<SelectOption>|null
     */
    public function getField17(): ?array
    {
        return $this->field17;
    }

    /**
     * This field represents the `multiple_select` field. The number in field_17 is in a normal request or response the id of the field. This field accepts a list of `integer` each of which representing the chosen select option id related to the field. Available ids can be foundwhen getting or listing the field. You can also send a list of option names in which case the option are searched by name. The first one that matches is used. This field also accepts a string with names separated by a comma or an array of file names. The response represents chosen field, but also the value and color is exposed.
     *
     * @param list<SelectOption>|null $field17
     */
    public function setField17(?array $field17): self
    {
        $this->initialized['field17'] = true;
        $this->field17 = $field17;

        return $this;
    }

    /**
     * This field represents the `phone_number` field. The number in field_18 is in a normal request or response the id of the field.
     */
    public function getField18(): ?string
    {
        return $this->field18;
    }

    /**
     * This field represents the `phone_number` field. The number in field_18 is in a normal request or response the id of the field.
     */
    public function setField18(?string $field18): self
    {
        $this->initialized['field18'] = true;
        $this->field18 = $field18;

        return $this;
    }

    /**
     * This field represents the `formula` field. The number in field_19 is in a normal request or response the id of the field.
     */
    public function getField19(): ?string
    {
        return $this->field19;
    }

    /**
     * This field represents the `formula` field. The number in field_19 is in a normal request or response the id of the field.
     */
    public function setField19(?string $field19): self
    {
        $this->initialized['field19'] = true;
        $this->field19 = $field19;

        return $this;
    }

    /**
     * This field represents the `count` field. The number in field_20 is in a normal request or response the id of the field.
     */
    public function getField20(): ?string
    {
        return $this->field20;
    }

    /**
     * This field represents the `count` field. The number in field_20 is in a normal request or response the id of the field.
     */
    public function setField20(?string $field20): self
    {
        $this->initialized['field20'] = true;
        $this->field20 = $field20;

        return $this;
    }

    /**
     * This field represents the `rollup` field. The number in field_21 is in a normal request or response the id of the field.
     */
    public function getField21(): ?string
    {
        return $this->field21;
    }

    /**
     * This field represents the `rollup` field. The number in field_21 is in a normal request or response the id of the field.
     */
    public function setField21(?string $field21): self
    {
        $this->initialized['field21'] = true;
        $this->field21 = $field21;

        return $this;
    }

    /**
     * This field represents the `lookup` field. The number in field_22 is in a normal request or response the id of the field.
     */
    public function getField22(): ?string
    {
        return $this->field22;
    }

    /**
     * This field represents the `lookup` field. The number in field_22 is in a normal request or response the id of the field.
     */
    public function setField22(?string $field22): self
    {
        $this->initialized['field22'] = true;
        $this->field22 = $field22;

        return $this;
    }

    /**
     * This field represents the `multiple_collaborators` field. The number in field_23 is in a normal request or response the id of the field. This field accepts a list of objects representing the chosen collaborators through the object's `id` property. The id is Baserow user id. The response objects also contains the collaborator name directly along with its id.
     *
     * @return list<Collaborator>
     */
    public function getField23(): array
    {
        return $this->field23;
    }

    /**
     * This field represents the `multiple_collaborators` field. The number in field_23 is in a normal request or response the id of the field. This field accepts a list of objects representing the chosen collaborators through the object's `id` property. The id is Baserow user id. The response objects also contains the collaborator name directly along with its id.
     *
     * @param list<Collaborator> $field23
     */
    public function setField23(array $field23): self
    {
        $this->initialized['field23'] = true;
        $this->field23 = $field23;

        return $this;
    }

    /**
     * This field represents the `uuid` field. The number in field_24 is in a normal request or response the id of the field. Contains a unique and persistent UUID for every row.
     */
    public function getField24(): string
    {
        return $this->field24;
    }

    /**
     * This field represents the `uuid` field. The number in field_24 is in a normal request or response the id of the field. Contains a unique and persistent UUID for every row.
     */
    public function setField24(string $field24): self
    {
        $this->initialized['field24'] = true;
        $this->field24 = $field24;

        return $this;
    }

    /**
     * This field represents the `autonumber` field. The number in field_25 is in a normal request or response the id of the field. Contains a unique and persistent incremental integer number for every row.
     */
    public function getField25(): int
    {
        return $this->field25;
    }

    /**
     * This field represents the `autonumber` field. The number in field_25 is in a normal request or response the id of the field. Contains a unique and persistent incremental integer number for every row.
     */
    public function setField25(int $field25): self
    {
        $this->initialized['field25'] = true;
        $this->field25 = $field25;

        return $this;
    }

    /**
     * This field represents the `password` field. The number in field_26 is in a normal request or response the id of the field. Allows setting a write only password value. Providing a string will set the password, `null` will unset it, `true` will be ignored. The response will respond with `true` is a password is set, but will never expose the password itself.
     */
    public function getField26(): bool
    {
        return $this->field26;
    }

    /**
     * This field represents the `password` field. The number in field_26 is in a normal request or response the id of the field. Allows setting a write only password value. Providing a string will set the password, `null` will unset it, `true` will be ignored. The response will respond with `true` is a password is set, but will never expose the password itself.
     */
    public function setField26(bool $field26): self
    {
        $this->initialized['field26'] = true;
        $this->field26 = $field26;

        return $this;
    }

    /**
     * This field represents the `ai` field. The number in field_27 is in a normal request or response the id of the field. Holds a text value that is generated by a generative AI model using a dynamic prompt.
     */
    public function getField27(): ?string
    {
        return $this->field27;
    }

    /**
     * This field represents the `ai` field. The number in field_27 is in a normal request or response the id of the field. Holds a text value that is generated by a generative AI model using a dynamic prompt.
     */
    public function setField27(?string $field27): self
    {
        $this->initialized['field27'] = true;
        $this->field27 = $field27;

        return $this;
    }
}

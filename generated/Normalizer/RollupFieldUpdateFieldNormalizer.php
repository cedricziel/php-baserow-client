<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Normalizer;

use CedricZiel\Baserow\Generated\Runtime\Normalizer\CheckArray;
use CedricZiel\Baserow\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class RollupFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('date_format', $data) && null !== $data['date_format']) {
                $object->setDateFormat($data['date_format']);
                unset($data['date_format']);
            } elseif (\array_key_exists('date_format', $data) && null === $data['date_format']) {
                $object->setDateFormat(null);
            }
            if (\array_key_exists('date_include_time', $data) && null !== $data['date_include_time']) {
                $object->setDateIncludeTime($data['date_include_time']);
                unset($data['date_include_time']);
            } elseif (\array_key_exists('date_include_time', $data) && null === $data['date_include_time']) {
                $object->setDateIncludeTime(null);
            }
            if (\array_key_exists('date_show_tzinfo', $data) && null !== $data['date_show_tzinfo']) {
                $object->setDateShowTzinfo($data['date_show_tzinfo']);
                unset($data['date_show_tzinfo']);
            } elseif (\array_key_exists('date_show_tzinfo', $data) && null === $data['date_show_tzinfo']) {
                $object->setDateShowTzinfo(null);
            }
            if (\array_key_exists('array_formula_type', $data) && null !== $data['array_formula_type']) {
                $object->setArrayFormulaType($data['array_formula_type']);
                unset($data['array_formula_type']);
            } elseif (\array_key_exists('array_formula_type', $data) && null === $data['array_formula_type']) {
                $object->setArrayFormulaType(null);
            }
            if (\array_key_exists('date_time_format', $data) && null !== $data['date_time_format']) {
                $object->setDateTimeFormat($data['date_time_format']);
                unset($data['date_time_format']);
            } elseif (\array_key_exists('date_time_format', $data) && null === $data['date_time_format']) {
                $object->setDateTimeFormat(null);
            }
            if (\array_key_exists('nullable', $data)) {
                $object->setNullable($data['nullable']);
                unset($data['nullable']);
            }
            if (\array_key_exists('date_force_timezone', $data) && null !== $data['date_force_timezone']) {
                $object->setDateForceTimezone($data['date_force_timezone']);
                unset($data['date_force_timezone']);
            } elseif (\array_key_exists('date_force_timezone', $data) && null === $data['date_force_timezone']) {
                $object->setDateForceTimezone(null);
            }
            if (\array_key_exists('error', $data) && null !== $data['error']) {
                $object->setError($data['error']);
                unset($data['error']);
            } elseif (\array_key_exists('error', $data) && null === $data['error']) {
                $object->setError(null);
            }
            if (\array_key_exists('number_decimal_places', $data) && null !== $data['number_decimal_places']) {
                $object->setNumberDecimalPlaces($data['number_decimal_places']);
                unset($data['number_decimal_places']);
            } elseif (\array_key_exists('number_decimal_places', $data) && null === $data['number_decimal_places']) {
                $object->setNumberDecimalPlaces(null);
            }
            if (\array_key_exists('duration_format', $data) && null !== $data['duration_format']) {
                $object->setDurationFormat($data['duration_format']);
                unset($data['duration_format']);
            } elseif (\array_key_exists('duration_format', $data) && null === $data['duration_format']) {
                $object->setDurationFormat(null);
            }
            if (\array_key_exists('through_field_id', $data) && null !== $data['through_field_id']) {
                $object->setThroughFieldId($data['through_field_id']);
                unset($data['through_field_id']);
            } elseif (\array_key_exists('through_field_id', $data) && null === $data['through_field_id']) {
                $object->setThroughFieldId(null);
            }
            if (\array_key_exists('target_field_id', $data) && null !== $data['target_field_id']) {
                $object->setTargetFieldId($data['target_field_id']);
                unset($data['target_field_id']);
            } elseif (\array_key_exists('target_field_id', $data) && null === $data['target_field_id']) {
                $object->setTargetFieldId(null);
            }
            if (\array_key_exists('rollup_function', $data)) {
                $object->setRollupFunction($data['rollup_function']);
                unset($data['rollup_function']);
            }
            if (\array_key_exists('formula_type', $data)) {
                $object->setFormulaType($data['formula_type']);
                unset($data['formula_type']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('dateFormat') && null !== $object->getDateFormat()) {
                $data['date_format'] = $object->getDateFormat();
            }
            if ($object->isInitialized('dateIncludeTime') && null !== $object->getDateIncludeTime()) {
                $data['date_include_time'] = $object->getDateIncludeTime();
            }
            if ($object->isInitialized('dateShowTzinfo') && null !== $object->getDateShowTzinfo()) {
                $data['date_show_tzinfo'] = $object->getDateShowTzinfo();
            }
            if ($object->isInitialized('arrayFormulaType') && null !== $object->getArrayFormulaType()) {
                $data['array_formula_type'] = $object->getArrayFormulaType();
            }
            if ($object->isInitialized('dateTimeFormat') && null !== $object->getDateTimeFormat()) {
                $data['date_time_format'] = $object->getDateTimeFormat();
            }
            if ($object->isInitialized('dateForceTimezone') && null !== $object->getDateForceTimezone()) {
                $data['date_force_timezone'] = $object->getDateForceTimezone();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('numberDecimalPlaces') && null !== $object->getNumberDecimalPlaces()) {
                $data['number_decimal_places'] = $object->getNumberDecimalPlaces();
            }
            if ($object->isInitialized('durationFormat') && null !== $object->getDurationFormat()) {
                $data['duration_format'] = $object->getDurationFormat();
            }
            if ($object->isInitialized('throughFieldId') && null !== $object->getThroughFieldId()) {
                $data['through_field_id'] = $object->getThroughFieldId();
            }
            if ($object->isInitialized('targetFieldId') && null !== $object->getTargetFieldId()) {
                $data['target_field_id'] = $object->getTargetFieldId();
            }
            if ($object->isInitialized('rollupFunction') && null !== $object->getRollupFunction()) {
                $data['rollup_function'] = $object->getRollupFunction();
            }
            if ($object->isInitialized('formulaType') && null !== $object->getFormulaType()) {
                $data['formula_type'] = $object->getFormulaType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class => false];
        }
    }
} else {
    class RollupFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('date_format', $data) && null !== $data['date_format']) {
                $object->setDateFormat($data['date_format']);
                unset($data['date_format']);
            } elseif (\array_key_exists('date_format', $data) && null === $data['date_format']) {
                $object->setDateFormat(null);
            }
            if (\array_key_exists('date_include_time', $data) && null !== $data['date_include_time']) {
                $object->setDateIncludeTime($data['date_include_time']);
                unset($data['date_include_time']);
            } elseif (\array_key_exists('date_include_time', $data) && null === $data['date_include_time']) {
                $object->setDateIncludeTime(null);
            }
            if (\array_key_exists('date_show_tzinfo', $data) && null !== $data['date_show_tzinfo']) {
                $object->setDateShowTzinfo($data['date_show_tzinfo']);
                unset($data['date_show_tzinfo']);
            } elseif (\array_key_exists('date_show_tzinfo', $data) && null === $data['date_show_tzinfo']) {
                $object->setDateShowTzinfo(null);
            }
            if (\array_key_exists('array_formula_type', $data) && null !== $data['array_formula_type']) {
                $object->setArrayFormulaType($data['array_formula_type']);
                unset($data['array_formula_type']);
            } elseif (\array_key_exists('array_formula_type', $data) && null === $data['array_formula_type']) {
                $object->setArrayFormulaType(null);
            }
            if (\array_key_exists('date_time_format', $data) && null !== $data['date_time_format']) {
                $object->setDateTimeFormat($data['date_time_format']);
                unset($data['date_time_format']);
            } elseif (\array_key_exists('date_time_format', $data) && null === $data['date_time_format']) {
                $object->setDateTimeFormat(null);
            }
            if (\array_key_exists('nullable', $data)) {
                $object->setNullable($data['nullable']);
                unset($data['nullable']);
            }
            if (\array_key_exists('date_force_timezone', $data) && null !== $data['date_force_timezone']) {
                $object->setDateForceTimezone($data['date_force_timezone']);
                unset($data['date_force_timezone']);
            } elseif (\array_key_exists('date_force_timezone', $data) && null === $data['date_force_timezone']) {
                $object->setDateForceTimezone(null);
            }
            if (\array_key_exists('error', $data) && null !== $data['error']) {
                $object->setError($data['error']);
                unset($data['error']);
            } elseif (\array_key_exists('error', $data) && null === $data['error']) {
                $object->setError(null);
            }
            if (\array_key_exists('number_decimal_places', $data) && null !== $data['number_decimal_places']) {
                $object->setNumberDecimalPlaces($data['number_decimal_places']);
                unset($data['number_decimal_places']);
            } elseif (\array_key_exists('number_decimal_places', $data) && null === $data['number_decimal_places']) {
                $object->setNumberDecimalPlaces(null);
            }
            if (\array_key_exists('duration_format', $data) && null !== $data['duration_format']) {
                $object->setDurationFormat($data['duration_format']);
                unset($data['duration_format']);
            } elseif (\array_key_exists('duration_format', $data) && null === $data['duration_format']) {
                $object->setDurationFormat(null);
            }
            if (\array_key_exists('through_field_id', $data) && null !== $data['through_field_id']) {
                $object->setThroughFieldId($data['through_field_id']);
                unset($data['through_field_id']);
            } elseif (\array_key_exists('through_field_id', $data) && null === $data['through_field_id']) {
                $object->setThroughFieldId(null);
            }
            if (\array_key_exists('target_field_id', $data) && null !== $data['target_field_id']) {
                $object->setTargetFieldId($data['target_field_id']);
                unset($data['target_field_id']);
            } elseif (\array_key_exists('target_field_id', $data) && null === $data['target_field_id']) {
                $object->setTargetFieldId(null);
            }
            if (\array_key_exists('rollup_function', $data)) {
                $object->setRollupFunction($data['rollup_function']);
                unset($data['rollup_function']);
            }
            if (\array_key_exists('formula_type', $data)) {
                $object->setFormulaType($data['formula_type']);
                unset($data['formula_type']);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('dateFormat') && null !== $object->getDateFormat()) {
                $data['date_format'] = $object->getDateFormat();
            }
            if ($object->isInitialized('dateIncludeTime') && null !== $object->getDateIncludeTime()) {
                $data['date_include_time'] = $object->getDateIncludeTime();
            }
            if ($object->isInitialized('dateShowTzinfo') && null !== $object->getDateShowTzinfo()) {
                $data['date_show_tzinfo'] = $object->getDateShowTzinfo();
            }
            if ($object->isInitialized('arrayFormulaType') && null !== $object->getArrayFormulaType()) {
                $data['array_formula_type'] = $object->getArrayFormulaType();
            }
            if ($object->isInitialized('dateTimeFormat') && null !== $object->getDateTimeFormat()) {
                $data['date_time_format'] = $object->getDateTimeFormat();
            }
            if ($object->isInitialized('dateForceTimezone') && null !== $object->getDateForceTimezone()) {
                $data['date_force_timezone'] = $object->getDateForceTimezone();
            }
            if ($object->isInitialized('error') && null !== $object->getError()) {
                $data['error'] = $object->getError();
            }
            if ($object->isInitialized('numberDecimalPlaces') && null !== $object->getNumberDecimalPlaces()) {
                $data['number_decimal_places'] = $object->getNumberDecimalPlaces();
            }
            if ($object->isInitialized('durationFormat') && null !== $object->getDurationFormat()) {
                $data['duration_format'] = $object->getDurationFormat();
            }
            if ($object->isInitialized('throughFieldId') && null !== $object->getThroughFieldId()) {
                $data['through_field_id'] = $object->getThroughFieldId();
            }
            if ($object->isInitialized('targetFieldId') && null !== $object->getTargetFieldId()) {
                $data['target_field_id'] = $object->getTargetFieldId();
            }
            if ($object->isInitialized('rollupFunction') && null !== $object->getRollupFunction()) {
                $data['rollup_function'] = $object->getRollupFunction();
            }
            if ($object->isInitialized('formulaType') && null !== $object->getFormulaType()) {
                $data['formula_type'] = $object->getFormulaType();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\RollupFieldUpdateField::class => false];
        }
    }
}

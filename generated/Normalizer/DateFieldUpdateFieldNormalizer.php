<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace cedricziel\phpbaserowclient\Generated\Normalizer;

use cedricziel\phpbaserowclient\Generated\Runtime\Normalizer\CheckArray;
use cedricziel\phpbaserowclient\Generated\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DateFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField();
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
            if (\array_key_exists('date_format', $data)) {
                $object->setDateFormat($data['date_format']);
                unset($data['date_format']);
            }
            if (\array_key_exists('date_include_time', $data)) {
                $object->setDateIncludeTime($data['date_include_time']);
                unset($data['date_include_time']);
            }
            if (\array_key_exists('date_time_format', $data)) {
                $object->setDateTimeFormat($data['date_time_format']);
                unset($data['date_time_format']);
            }
            if (\array_key_exists('date_show_tzinfo', $data)) {
                $object->setDateShowTzinfo($data['date_show_tzinfo']);
                unset($data['date_show_tzinfo']);
            }
            if (\array_key_exists('date_force_timezone', $data) && null !== $data['date_force_timezone']) {
                $object->setDateForceTimezone($data['date_force_timezone']);
                unset($data['date_force_timezone']);
            } elseif (\array_key_exists('date_force_timezone', $data) && null === $data['date_force_timezone']) {
                $object->setDateForceTimezone(null);
            }
            if (\array_key_exists('date_force_timezone_offset', $data) && null !== $data['date_force_timezone_offset']) {
                $object->setDateForceTimezoneOffset($data['date_force_timezone_offset']);
                unset($data['date_force_timezone_offset']);
            } elseif (\array_key_exists('date_force_timezone_offset', $data) && null === $data['date_force_timezone_offset']) {
                $object->setDateForceTimezoneOffset(null);
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
            if ($object->isInitialized('dateTimeFormat') && null !== $object->getDateTimeFormat()) {
                $data['date_time_format'] = $object->getDateTimeFormat();
            }
            if ($object->isInitialized('dateShowTzinfo') && null !== $object->getDateShowTzinfo()) {
                $data['date_show_tzinfo'] = $object->getDateShowTzinfo();
            }
            if ($object->isInitialized('dateForceTimezone') && null !== $object->getDateForceTimezone()) {
                $data['date_force_timezone'] = $object->getDateForceTimezone();
            }
            if ($object->isInitialized('dateForceTimezoneOffset') && null !== $object->getDateForceTimezoneOffset()) {
                $data['date_force_timezone_offset'] = $object->getDateForceTimezoneOffset();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class => false];
        }
    }
} else {
    class DateFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField();
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
            if (\array_key_exists('date_format', $data)) {
                $object->setDateFormat($data['date_format']);
                unset($data['date_format']);
            }
            if (\array_key_exists('date_include_time', $data)) {
                $object->setDateIncludeTime($data['date_include_time']);
                unset($data['date_include_time']);
            }
            if (\array_key_exists('date_time_format', $data)) {
                $object->setDateTimeFormat($data['date_time_format']);
                unset($data['date_time_format']);
            }
            if (\array_key_exists('date_show_tzinfo', $data)) {
                $object->setDateShowTzinfo($data['date_show_tzinfo']);
                unset($data['date_show_tzinfo']);
            }
            if (\array_key_exists('date_force_timezone', $data) && null !== $data['date_force_timezone']) {
                $object->setDateForceTimezone($data['date_force_timezone']);
                unset($data['date_force_timezone']);
            } elseif (\array_key_exists('date_force_timezone', $data) && null === $data['date_force_timezone']) {
                $object->setDateForceTimezone(null);
            }
            if (\array_key_exists('date_force_timezone_offset', $data) && null !== $data['date_force_timezone_offset']) {
                $object->setDateForceTimezoneOffset($data['date_force_timezone_offset']);
                unset($data['date_force_timezone_offset']);
            } elseif (\array_key_exists('date_force_timezone_offset', $data) && null === $data['date_force_timezone_offset']) {
                $object->setDateForceTimezoneOffset(null);
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
            if ($object->isInitialized('dateTimeFormat') && null !== $object->getDateTimeFormat()) {
                $data['date_time_format'] = $object->getDateTimeFormat();
            }
            if ($object->isInitialized('dateShowTzinfo') && null !== $object->getDateShowTzinfo()) {
                $data['date_show_tzinfo'] = $object->getDateShowTzinfo();
            }
            if ($object->isInitialized('dateForceTimezone') && null !== $object->getDateForceTimezone()) {
                $data['date_force_timezone'] = $object->getDateForceTimezone();
            }
            if ($object->isInitialized('dateForceTimezoneOffset') && null !== $object->getDateForceTimezoneOffset()) {
                $data['date_force_timezone_offset'] = $object->getDateForceTimezoneOffset();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\DateFieldUpdateField::class => false];
        }
    }
}

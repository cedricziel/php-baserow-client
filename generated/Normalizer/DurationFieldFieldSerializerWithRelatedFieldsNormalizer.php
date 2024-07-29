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
    class DurationFieldFieldSerializerWithRelatedFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('table_id', $data)) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('read_only', $data)) {
                $object->setReadOnly($data['read_only']);
                unset($data['read_only']);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('related_fields', $data)) {
                $values = [];
                foreach ($data['related_fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\phpbaserowclient\Generated\Model\Field::class, 'json', $context);
                }
                $object->setRelatedFields($values);
                unset($data['related_fields']);
            }
            if (\array_key_exists('duration_format', $data)) {
                $object->setDurationFormat($data['duration_format']);
                unset($data['duration_format']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['order'] = $object->getOrder();
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('durationFormat') && null !== $object->getDurationFormat()) {
                $data['duration_format'] = $object->getDurationFormat();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class => false];
        }
    }
} else {
    class DurationFieldFieldSerializerWithRelatedFieldsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('table_id', $data)) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('primary', $data)) {
                $object->setPrimary($data['primary']);
                unset($data['primary']);
            }
            if (\array_key_exists('read_only', $data)) {
                $object->setReadOnly($data['read_only']);
                unset($data['read_only']);
            }
            if (\array_key_exists('description', $data) && null !== $data['description']) {
                $object->setDescription($data['description']);
                unset($data['description']);
            } elseif (\array_key_exists('description', $data) && null === $data['description']) {
                $object->setDescription(null);
            }
            if (\array_key_exists('related_fields', $data)) {
                $values = [];
                foreach ($data['related_fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\phpbaserowclient\Generated\Model\Field::class, 'json', $context);
                }
                $object->setRelatedFields($values);
                unset($data['related_fields']);
            }
            if (\array_key_exists('duration_format', $data)) {
                $object->setDurationFormat($data['duration_format']);
                unset($data['duration_format']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['name'] = $object->getName();
            $data['order'] = $object->getOrder();
            if ($object->isInitialized('primary') && null !== $object->getPrimary()) {
                $data['primary'] = $object->getPrimary();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('durationFormat') && null !== $object->getDurationFormat()) {
                $data['duration_format'] = $object->getDurationFormat();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\DurationFieldFieldSerializerWithRelatedFields::class => false];
        }
    }
}

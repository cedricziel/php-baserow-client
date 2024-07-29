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
    class GridViewCreateViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\GridViewCreateView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\GridViewCreateView::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\GridViewCreateView();
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
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('row_identifier_type', $data)) {
                $object->setRowIdentifierType($data['row_identifier_type']);
                unset($data['row_identifier_type']);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
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
            $data['name'] = $object->getName();
            $data['type'] = $object->getType();
            if ($object->isInitialized('ownershipType') && null !== $object->getOwnershipType()) {
                $data['ownership_type'] = $object->getOwnershipType();
            }
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('rowIdentifierType') && null !== $object->getRowIdentifierType()) {
                $data['row_identifier_type'] = $object->getRowIdentifierType();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
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
            return [\CedricZiel\Baserow\Generated\Model\GridViewCreateView::class => false];
        }
    }
} else {
    class GridViewCreateViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\GridViewCreateView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\GridViewCreateView::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\GridViewCreateView();
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
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('row_identifier_type', $data)) {
                $object->setRowIdentifierType($data['row_identifier_type']);
                unset($data['row_identifier_type']);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
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
            $data['name'] = $object->getName();
            $data['type'] = $object->getType();
            if ($object->isInitialized('ownershipType') && null !== $object->getOwnershipType()) {
                $data['ownership_type'] = $object->getOwnershipType();
            }
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('rowIdentifierType') && null !== $object->getRowIdentifierType()) {
                $data['row_identifier_type'] = $object->getRowIdentifierType();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
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
            return [\CedricZiel\Baserow\Generated\Model\GridViewCreateView::class => false];
        }
    }
}

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
    class LocalBaserowListRowsServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('integration_id', $data) && null !== $data['integration_id']) {
                $object->setIntegrationId($data['integration_id']);
                unset($data['integration_id']);
            } elseif (\array_key_exists('integration_id', $data) && null === $data['integration_id']) {
                $object->setIntegrationId(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('schema', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['schema'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setSchema($values);
                unset($data['schema']);
            }
            if (\array_key_exists('context_data', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['context_data'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setContextData($values_1);
                unset($data['context_data']);
            }
            if (\array_key_exists('context_data_schema', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['context_data_schema'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setContextDataSchema($values_2);
                unset($data['context_data_schema']);
            }
            if (\array_key_exists('table_id', $data) && null !== $data['table_id']) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            } elseif (\array_key_exists('table_id', $data) && null === $data['table_id']) {
                $object->setTableId(null);
            }
            if (\array_key_exists('view_id', $data) && null !== $data['view_id']) {
                $object->setViewId($data['view_id']);
                unset($data['view_id']);
            } elseif (\array_key_exists('view_id', $data) && null === $data['view_id']) {
                $object->setViewId(null);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('search_query', $data)) {
                $object->setSearchQuery($data['search_query']);
                unset($data['search_query']);
            }
            if (\array_key_exists('sortings', $data)) {
                $values_3 = [];
                foreach ($data['sortings'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowTableServiceSort::class, 'json', $context);
                }
                $object->setSortings($values_3);
                unset($data['sortings']);
            }
            if (\array_key_exists('filters', $data)) {
                $values_4 = [];
                foreach ($data['filters'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowTableServiceFilter::class, 'json', $context);
                }
                $object->setFilters($values_4);
                unset($data['filters']);
            }
            foreach ($data as $key_3 => $value_5) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_5;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('searchQuery') && null !== $object->getSearchQuery()) {
                $data['search_query'] = $object->getSearchQuery();
            }
            if ($object->isInitialized('sortings') && null !== $object->getSortings()) {
                $values = [];
                foreach ($object->getSortings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sortings'] = $values;
            }
            if ($object->isInitialized('filters') && null !== $object->getFilters()) {
                $values_1 = [];
                foreach ($object->getFilters() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['filters'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class => false];
        }
    }
} else {
    class LocalBaserowListRowsServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('integration_id', $data) && null !== $data['integration_id']) {
                $object->setIntegrationId($data['integration_id']);
                unset($data['integration_id']);
            } elseif (\array_key_exists('integration_id', $data) && null === $data['integration_id']) {
                $object->setIntegrationId(null);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('schema', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['schema'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setSchema($values);
                unset($data['schema']);
            }
            if (\array_key_exists('context_data', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['context_data'] as $key_1 => $value_1) {
                    $values_1[$key_1] = $value_1;
                }
                $object->setContextData($values_1);
                unset($data['context_data']);
            }
            if (\array_key_exists('context_data_schema', $data)) {
                $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['context_data_schema'] as $key_2 => $value_2) {
                    $values_2[$key_2] = $value_2;
                }
                $object->setContextDataSchema($values_2);
                unset($data['context_data_schema']);
            }
            if (\array_key_exists('table_id', $data) && null !== $data['table_id']) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            } elseif (\array_key_exists('table_id', $data) && null === $data['table_id']) {
                $object->setTableId(null);
            }
            if (\array_key_exists('view_id', $data) && null !== $data['view_id']) {
                $object->setViewId($data['view_id']);
                unset($data['view_id']);
            } elseif (\array_key_exists('view_id', $data) && null === $data['view_id']) {
                $object->setViewId(null);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('search_query', $data)) {
                $object->setSearchQuery($data['search_query']);
                unset($data['search_query']);
            }
            if (\array_key_exists('sortings', $data)) {
                $values_3 = [];
                foreach ($data['sortings'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowTableServiceSort::class, 'json', $context);
                }
                $object->setSortings($values_3);
                unset($data['sortings']);
            }
            if (\array_key_exists('filters', $data)) {
                $values_4 = [];
                foreach ($data['filters'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowTableServiceFilter::class, 'json', $context);
                }
                $object->setFilters($values_4);
                unset($data['filters']);
            }
            foreach ($data as $key_3 => $value_5) {
                if (preg_match('/.*/', (string) $key_3)) {
                    $object[$key_3] = $value_5;
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
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('searchQuery') && null !== $object->getSearchQuery()) {
                $data['search_query'] = $object->getSearchQuery();
            }
            if ($object->isInitialized('sortings') && null !== $object->getSortings()) {
                $values = [];
                foreach ($object->getSortings() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['sortings'] = $values;
            }
            if ($object->isInitialized('filters') && null !== $object->getFilters()) {
                $values_1 = [];
                foreach ($object->getFilters() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['filters'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\LocalBaserowListRowsService::class => false];
        }
    }
}

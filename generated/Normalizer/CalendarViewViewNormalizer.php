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
    class CalendarViewViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView();
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
            if (\array_key_exists('table', $data)) {
                $object->setTable($this->denormalizer->denormalize($data['table'], \cedricziel\phpbaserowclient\Generated\Model\Table::class, 'json', $context));
                unset($data['table']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters', $data)) {
                $values = [];
                foreach ($data['filters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\phpbaserowclient\Generated\Model\ViewFilter::class, 'json', $context);
                }
                $object->setFilters($values);
                unset($data['filters']);
            }
            if (\array_key_exists('filter_groups', $data)) {
                $values_1 = [];
                foreach ($data['filter_groups'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\phpbaserowclient\Generated\Model\ViewFilterGroup::class, 'json', $context);
                }
                $object->setFilterGroups($values_1);
                unset($data['filter_groups']);
            }
            if (\array_key_exists('sortings', $data)) {
                $values_2 = [];
                foreach ($data['sortings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \cedricziel\phpbaserowclient\Generated\Model\ViewSort::class, 'json', $context);
                }
                $object->setSortings($values_2);
                unset($data['sortings']);
            }
            if (\array_key_exists('group_bys', $data)) {
                $values_3 = [];
                foreach ($data['group_bys'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \cedricziel\phpbaserowclient\Generated\Model\ViewGroupBy::class, 'json', $context);
                }
                $object->setGroupBys($values_3);
                unset($data['group_bys']);
            }
            if (\array_key_exists('decorations', $data)) {
                $values_4 = [];
                foreach ($data['decorations'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \cedricziel\phpbaserowclient\Generated\Model\ViewDecoration::class, 'json', $context);
                }
                $object->setDecorations($values_4);
                unset($data['decorations']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('public_view_has_password', $data)) {
                $object->setPublicViewHasPassword($data['public_view_has_password']);
                unset($data['public_view_has_password']);
            }
            if (\array_key_exists('show_logo', $data)) {
                $object->setShowLogo($data['show_logo']);
                unset($data['show_logo']);
            }
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
            }
            if (\array_key_exists('owned_by_id', $data)) {
                $object->setOwnedById($data['owned_by_id']);
                unset($data['owned_by_id']);
            }
            if (\array_key_exists('date_field', $data) && null !== $data['date_field']) {
                $object->setDateField($data['date_field']);
                unset($data['date_field']);
            } elseif (\array_key_exists('date_field', $data) && null === $data['date_field']) {
                $object->setDateField(null);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['name'] = $object->getName();
            $data['order'] = $object->getOrder();
            $data['table'] = $this->normalizer->normalize($object->getTable(), 'json', $context);
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filters') && null !== $object->getFilters()) {
                $values = [];
                foreach ($object->getFilters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['filters'] = $values;
            }
            if ($object->isInitialized('filterGroups') && null !== $object->getFilterGroups()) {
                $values_1 = [];
                foreach ($object->getFilterGroups() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['filter_groups'] = $values_1;
            }
            if ($object->isInitialized('sortings') && null !== $object->getSortings()) {
                $values_2 = [];
                foreach ($object->getSortings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sortings'] = $values_2;
            }
            if ($object->isInitialized('groupBys') && null !== $object->getGroupBys()) {
                $values_3 = [];
                foreach ($object->getGroupBys() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['group_bys'] = $values_3;
            }
            if ($object->isInitialized('decorations') && null !== $object->getDecorations()) {
                $values_4 = [];
                foreach ($object->getDecorations() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['decorations'] = $values_4;
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('showLogo') && null !== $object->getShowLogo()) {
                $data['show_logo'] = $object->getShowLogo();
            }
            $data['ownership_type'] = $object->getOwnershipType();
            if ($object->isInitialized('ownedById') && null !== $object->getOwnedById()) {
                $data['owned_by_id'] = $object->getOwnedById();
            }
            if ($object->isInitialized('dateField') && null !== $object->getDateField()) {
                $data['date_field'] = $object->getDateField();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class => false];
        }
    }
} else {
    class CalendarViewViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\CalendarViewView();
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
            if (\array_key_exists('table', $data)) {
                $object->setTable($this->denormalizer->denormalize($data['table'], \cedricziel\phpbaserowclient\Generated\Model\Table::class, 'json', $context));
                unset($data['table']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters', $data)) {
                $values = [];
                foreach ($data['filters'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \cedricziel\phpbaserowclient\Generated\Model\ViewFilter::class, 'json', $context);
                }
                $object->setFilters($values);
                unset($data['filters']);
            }
            if (\array_key_exists('filter_groups', $data)) {
                $values_1 = [];
                foreach ($data['filter_groups'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \cedricziel\phpbaserowclient\Generated\Model\ViewFilterGroup::class, 'json', $context);
                }
                $object->setFilterGroups($values_1);
                unset($data['filter_groups']);
            }
            if (\array_key_exists('sortings', $data)) {
                $values_2 = [];
                foreach ($data['sortings'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \cedricziel\phpbaserowclient\Generated\Model\ViewSort::class, 'json', $context);
                }
                $object->setSortings($values_2);
                unset($data['sortings']);
            }
            if (\array_key_exists('group_bys', $data)) {
                $values_3 = [];
                foreach ($data['group_bys'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \cedricziel\phpbaserowclient\Generated\Model\ViewGroupBy::class, 'json', $context);
                }
                $object->setGroupBys($values_3);
                unset($data['group_bys']);
            }
            if (\array_key_exists('decorations', $data)) {
                $values_4 = [];
                foreach ($data['decorations'] as $value_4) {
                    $values_4[] = $this->denormalizer->denormalize($value_4, \cedricziel\phpbaserowclient\Generated\Model\ViewDecoration::class, 'json', $context);
                }
                $object->setDecorations($values_4);
                unset($data['decorations']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('public_view_has_password', $data)) {
                $object->setPublicViewHasPassword($data['public_view_has_password']);
                unset($data['public_view_has_password']);
            }
            if (\array_key_exists('show_logo', $data)) {
                $object->setShowLogo($data['show_logo']);
                unset($data['show_logo']);
            }
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
            }
            if (\array_key_exists('owned_by_id', $data)) {
                $object->setOwnedById($data['owned_by_id']);
                unset($data['owned_by_id']);
            }
            if (\array_key_exists('date_field', $data) && null !== $data['date_field']) {
                $object->setDateField($data['date_field']);
                unset($data['date_field']);
            } elseif (\array_key_exists('date_field', $data) && null === $data['date_field']) {
                $object->setDateField(null);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
            }
            foreach ($data as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_5;
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
            $data['table'] = $this->normalizer->normalize($object->getTable(), 'json', $context);
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filters') && null !== $object->getFilters()) {
                $values = [];
                foreach ($object->getFilters() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['filters'] = $values;
            }
            if ($object->isInitialized('filterGroups') && null !== $object->getFilterGroups()) {
                $values_1 = [];
                foreach ($object->getFilterGroups() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['filter_groups'] = $values_1;
            }
            if ($object->isInitialized('sortings') && null !== $object->getSortings()) {
                $values_2 = [];
                foreach ($object->getSortings() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['sortings'] = $values_2;
            }
            if ($object->isInitialized('groupBys') && null !== $object->getGroupBys()) {
                $values_3 = [];
                foreach ($object->getGroupBys() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['group_bys'] = $values_3;
            }
            if ($object->isInitialized('decorations') && null !== $object->getDecorations()) {
                $values_4 = [];
                foreach ($object->getDecorations() as $value_4) {
                    $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
                }
                $data['decorations'] = $values_4;
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('showLogo') && null !== $object->getShowLogo()) {
                $data['show_logo'] = $object->getShowLogo();
            }
            $data['ownership_type'] = $object->getOwnershipType();
            if ($object->isInitialized('ownedById') && null !== $object->getOwnedById()) {
                $data['owned_by_id'] = $object->getOwnedById();
            }
            if ($object->isInitialized('dateField') && null !== $object->getDateField()) {
                $data['date_field'] = $object->getDateField();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
            }
            foreach ($object as $key => $value_5) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_5;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\CalendarViewView::class => false];
        }
    }
}

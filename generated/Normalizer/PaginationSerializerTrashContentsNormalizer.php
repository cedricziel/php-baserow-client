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
    class PaginationSerializerTrashContentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }
            if (\array_key_exists('next', $data) && null !== $data['next']) {
                $object->setNext($data['next']);
                unset($data['next']);
            } elseif (\array_key_exists('next', $data) && null === $data['next']) {
                $object->setNext(null);
            }
            if (\array_key_exists('previous', $data) && null !== $data['previous']) {
                $object->setPrevious($data['previous']);
                unset($data['previous']);
            } elseif (\array_key_exists('previous', $data) && null === $data['previous']) {
                $object->setPrevious(null);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\TrashContents::class, 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
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
            $data['count'] = $object->getCount();
            $data['next'] = $object->getNext();
            $data['previous'] = $object->getPrevious();
            $values = [];
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class => false];
        }
    }
} else {
    class PaginationSerializerTrashContentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('count', $data)) {
                $object->setCount($data['count']);
                unset($data['count']);
            }
            if (\array_key_exists('next', $data) && null !== $data['next']) {
                $object->setNext($data['next']);
                unset($data['next']);
            } elseif (\array_key_exists('next', $data) && null === $data['next']) {
                $object->setNext(null);
            }
            if (\array_key_exists('previous', $data) && null !== $data['previous']) {
                $object->setPrevious($data['previous']);
                unset($data['previous']);
            } elseif (\array_key_exists('previous', $data) && null === $data['previous']) {
                $object->setPrevious(null);
            }
            if (\array_key_exists('results', $data)) {
                $values = [];
                foreach ($data['results'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\TrashContents::class, 'json', $context);
                }
                $object->setResults($values);
                unset($data['results']);
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
            $data['count'] = $object->getCount();
            $data['next'] = $object->getNext();
            $data['previous'] = $object->getPrevious();
            $values = [];
            foreach ($object->getResults() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['results'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\PaginationSerializerTrashContents::class => false];
        }
    }
}

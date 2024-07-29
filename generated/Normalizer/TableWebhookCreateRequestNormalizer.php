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
    class TableWebhookCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('include_all_events', $data)) {
                $object->setIncludeAllEvents($data['include_all_events']);
                unset($data['include_all_events']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('request_method', $data)) {
                $object->setRequestMethod($data['request_method']);
                unset($data['request_method']);
            }
            if (\array_key_exists('headers', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['headers'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setHeaders($values_1);
                unset($data['headers']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('use_user_field_names', $data)) {
                $object->setUseUserFieldNames($data['use_user_field_names']);
                unset($data['use_user_field_names']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('includeAllEvents') && null !== $object->getIncludeAllEvents()) {
                $data['include_all_events'] = $object->getIncludeAllEvents();
            }
            if ($object->isInitialized('events') && null !== $object->getEvents()) {
                $values = [];
                foreach ($object->getEvents() as $value) {
                    $values[] = $value;
                }
                $data['events'] = $values;
            }
            if ($object->isInitialized('requestMethod') && null !== $object->getRequestMethod()) {
                $data['request_method'] = $object->getRequestMethod();
            }
            if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
                $values_1 = [];
                foreach ($object->getHeaders() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['headers'] = $values_1;
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('useUserFieldNames') && null !== $object->getUseUserFieldNames()) {
                $data['use_user_field_names'] = $object->getUseUserFieldNames();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class => false];
        }
    }
} else {
    class TableWebhookCreateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('include_all_events', $data)) {
                $object->setIncludeAllEvents($data['include_all_events']);
                unset($data['include_all_events']);
            }
            if (\array_key_exists('events', $data)) {
                $values = [];
                foreach ($data['events'] as $value) {
                    $values[] = $value;
                }
                $object->setEvents($values);
                unset($data['events']);
            }
            if (\array_key_exists('request_method', $data)) {
                $object->setRequestMethod($data['request_method']);
                unset($data['request_method']);
            }
            if (\array_key_exists('headers', $data)) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['headers'] as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $object->setHeaders($values_1);
                unset($data['headers']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('use_user_field_names', $data)) {
                $object->setUseUserFieldNames($data['use_user_field_names']);
                unset($data['use_user_field_names']);
            }
            foreach ($data as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_2;
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
            $data['url'] = $object->getUrl();
            if ($object->isInitialized('includeAllEvents') && null !== $object->getIncludeAllEvents()) {
                $data['include_all_events'] = $object->getIncludeAllEvents();
            }
            if ($object->isInitialized('events') && null !== $object->getEvents()) {
                $values = [];
                foreach ($object->getEvents() as $value) {
                    $values[] = $value;
                }
                $data['events'] = $values;
            }
            if ($object->isInitialized('requestMethod') && null !== $object->getRequestMethod()) {
                $data['request_method'] = $object->getRequestMethod();
            }
            if ($object->isInitialized('headers') && null !== $object->getHeaders()) {
                $values_1 = [];
                foreach ($object->getHeaders() as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $data['headers'] = $values_1;
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('useUserFieldNames') && null !== $object->getUseUserFieldNames()) {
                $data['use_user_field_names'] = $object->getUseUserFieldNames();
            }
            foreach ($object as $key_1 => $value_2) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $data[$key_1] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\TableWebhookCreateRequest::class => false];
        }
    }
}

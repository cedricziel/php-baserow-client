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
    class LocalBaserowUserSourceUpdateUserSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('integration_id', $data)) {
                $object->setIntegrationId($data['integration_id']);
                unset($data['integration_id']);
            }
            if (\array_key_exists('auth_providers', $data)) {
                $values = [];
                foreach ($data['auth_providers'] as $value) {
                    $values[] = $value;
                }
                $object->setAuthProviders($values);
                unset($data['auth_providers']);
            }
            if (\array_key_exists('table_id', $data) && null !== $data['table_id']) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            } elseif (\array_key_exists('table_id', $data) && null === $data['table_id']) {
                $object->setTableId(null);
            }
            if (\array_key_exists('email_field_id', $data) && null !== $data['email_field_id']) {
                $object->setEmailFieldId($data['email_field_id']);
                unset($data['email_field_id']);
            } elseif (\array_key_exists('email_field_id', $data) && null === $data['email_field_id']) {
                $object->setEmailFieldId(null);
            }
            if (\array_key_exists('name_field_id', $data) && null !== $data['name_field_id']) {
                $object->setNameFieldId($data['name_field_id']);
                unset($data['name_field_id']);
            } elseif (\array_key_exists('name_field_id', $data) && null === $data['name_field_id']) {
                $object->setNameFieldId(null);
            }
            if (\array_key_exists('role_field_id', $data) && null !== $data['role_field_id']) {
                $object->setRoleFieldId($data['role_field_id']);
                unset($data['role_field_id']);
            } elseif (\array_key_exists('role_field_id', $data) && null === $data['role_field_id']) {
                $object->setRoleFieldId(null);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('integrationId') && null !== $object->getIntegrationId()) {
                $data['integration_id'] = $object->getIntegrationId();
            }
            if ($object->isInitialized('authProviders') && null !== $object->getAuthProviders()) {
                $values = [];
                foreach ($object->getAuthProviders() as $value) {
                    $values[] = $value;
                }
                $data['auth_providers'] = $values;
            }
            if ($object->isInitialized('tableId') && null !== $object->getTableId()) {
                $data['table_id'] = $object->getTableId();
            }
            if ($object->isInitialized('emailFieldId') && null !== $object->getEmailFieldId()) {
                $data['email_field_id'] = $object->getEmailFieldId();
            }
            if ($object->isInitialized('nameFieldId') && null !== $object->getNameFieldId()) {
                $data['name_field_id'] = $object->getNameFieldId();
            }
            if ($object->isInitialized('roleFieldId') && null !== $object->getRoleFieldId()) {
                $data['role_field_id'] = $object->getRoleFieldId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class => false];
        }
    }
} else {
    class LocalBaserowUserSourceUpdateUserSourceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('integration_id', $data)) {
                $object->setIntegrationId($data['integration_id']);
                unset($data['integration_id']);
            }
            if (\array_key_exists('auth_providers', $data)) {
                $values = [];
                foreach ($data['auth_providers'] as $value) {
                    $values[] = $value;
                }
                $object->setAuthProviders($values);
                unset($data['auth_providers']);
            }
            if (\array_key_exists('table_id', $data) && null !== $data['table_id']) {
                $object->setTableId($data['table_id']);
                unset($data['table_id']);
            } elseif (\array_key_exists('table_id', $data) && null === $data['table_id']) {
                $object->setTableId(null);
            }
            if (\array_key_exists('email_field_id', $data) && null !== $data['email_field_id']) {
                $object->setEmailFieldId($data['email_field_id']);
                unset($data['email_field_id']);
            } elseif (\array_key_exists('email_field_id', $data) && null === $data['email_field_id']) {
                $object->setEmailFieldId(null);
            }
            if (\array_key_exists('name_field_id', $data) && null !== $data['name_field_id']) {
                $object->setNameFieldId($data['name_field_id']);
                unset($data['name_field_id']);
            } elseif (\array_key_exists('name_field_id', $data) && null === $data['name_field_id']) {
                $object->setNameFieldId(null);
            }
            if (\array_key_exists('role_field_id', $data) && null !== $data['role_field_id']) {
                $object->setRoleFieldId($data['role_field_id']);
                unset($data['role_field_id']);
            } elseif (\array_key_exists('role_field_id', $data) && null === $data['role_field_id']) {
                $object->setRoleFieldId(null);
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
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('integrationId') && null !== $object->getIntegrationId()) {
                $data['integration_id'] = $object->getIntegrationId();
            }
            if ($object->isInitialized('authProviders') && null !== $object->getAuthProviders()) {
                $values = [];
                foreach ($object->getAuthProviders() as $value) {
                    $values[] = $value;
                }
                $data['auth_providers'] = $values;
            }
            if ($object->isInitialized('tableId') && null !== $object->getTableId()) {
                $data['table_id'] = $object->getTableId();
            }
            if ($object->isInitialized('emailFieldId') && null !== $object->getEmailFieldId()) {
                $data['email_field_id'] = $object->getEmailFieldId();
            }
            if ($object->isInitialized('nameFieldId') && null !== $object->getNameFieldId()) {
                $data['name_field_id'] = $object->getNameFieldId();
            }
            if ($object->isInitialized('roleFieldId') && null !== $object->getRoleFieldId()) {
                $data['role_field_id'] = $object->getRoleFieldId();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\LocalBaserowUserSourceUpdateUserSource::class => false];
        }
    }
}

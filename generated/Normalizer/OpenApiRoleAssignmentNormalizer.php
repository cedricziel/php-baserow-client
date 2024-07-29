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
    class OpenApiRoleAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($this->denormalizer->denormalize($data['subject'], \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignmentSubject::class, 'json', $context));
                unset($data['subject']);
            }
            if (\array_key_exists('subject_id', $data)) {
                $object->setSubjectId($data['subject_id']);
                unset($data['subject_id']);
            }
            if (\array_key_exists('scope_id', $data)) {
                $object->setScopeId($data['scope_id']);
                unset($data['scope_id']);
            }
            if (\array_key_exists('subject_type', $data)) {
                $object->setSubjectType($data['subject_type']);
                unset($data['subject_type']);
            }
            if (\array_key_exists('scope_type', $data)) {
                $object->setScopeType($data['scope_type']);
                unset($data['scope_type']);
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
            $data['role'] = $object->getRole();
            $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
            $data['subject_id'] = $object->getSubjectId();
            $data['scope_id'] = $object->getScopeId();
            $data['subject_type'] = $object->getSubjectType();
            $data['scope_type'] = $object->getScopeType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class => false];
        }
    }
} else {
    class OpenApiRoleAssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('role', $data)) {
                $object->setRole($data['role']);
                unset($data['role']);
            }
            if (\array_key_exists('subject', $data)) {
                $object->setSubject($this->denormalizer->denormalize($data['subject'], \CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignmentSubject::class, 'json', $context));
                unset($data['subject']);
            }
            if (\array_key_exists('subject_id', $data)) {
                $object->setSubjectId($data['subject_id']);
                unset($data['subject_id']);
            }
            if (\array_key_exists('scope_id', $data)) {
                $object->setScopeId($data['scope_id']);
                unset($data['scope_id']);
            }
            if (\array_key_exists('subject_type', $data)) {
                $object->setSubjectType($data['subject_type']);
                unset($data['subject_type']);
            }
            if (\array_key_exists('scope_type', $data)) {
                $object->setScopeType($data['scope_type']);
                unset($data['scope_type']);
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
            $data['role'] = $object->getRole();
            $data['subject'] = $this->normalizer->normalize($object->getSubject(), 'json', $context);
            $data['subject_id'] = $object->getSubjectId();
            $data['scope_id'] = $object->getScopeId();
            $data['subject_type'] = $object->getSubjectType();
            $data['scope_type'] = $object->getScopeType();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\OpenApiRoleAssignment::class => false];
        }
    }
}

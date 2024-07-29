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
    class UndoRedoActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\UndoRedoAction::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\UndoRedoAction::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\UndoRedoAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action_type', $data) && null !== $data['action_type']) {
                $object->setActionType($data['action_type']);
                unset($data['action_type']);
            } elseif (\array_key_exists('action_type', $data) && null === $data['action_type']) {
                $object->setActionType(null);
            }
            if (\array_key_exists('action_scope', $data) && null !== $data['action_scope']) {
                $object->setActionScope($data['action_scope']);
                unset($data['action_scope']);
            } elseif (\array_key_exists('action_scope', $data) && null === $data['action_scope']) {
                $object->setActionScope(null);
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
            if ($object->isInitialized('actionType') && null !== $object->getActionType()) {
                $data['action_type'] = $object->getActionType();
            }
            if ($object->isInitialized('actionScope') && null !== $object->getActionScope()) {
                $data['action_scope'] = $object->getActionScope();
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
            return [\CedricZiel\Baserow\Generated\Model\UndoRedoAction::class => false];
        }
    }
} else {
    class UndoRedoActionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\UndoRedoAction::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\UndoRedoAction::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\UndoRedoAction();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('action_type', $data) && null !== $data['action_type']) {
                $object->setActionType($data['action_type']);
                unset($data['action_type']);
            } elseif (\array_key_exists('action_type', $data) && null === $data['action_type']) {
                $object->setActionType(null);
            }
            if (\array_key_exists('action_scope', $data) && null !== $data['action_scope']) {
                $object->setActionScope($data['action_scope']);
                unset($data['action_scope']);
            } elseif (\array_key_exists('action_scope', $data) && null === $data['action_scope']) {
                $object->setActionScope(null);
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
            if ($object->isInitialized('actionType') && null !== $object->getActionType()) {
                $data['action_type'] = $object->getActionType();
            }
            if ($object->isInitialized('actionScope') && null !== $object->getActionScope()) {
                $data['action_scope'] = $object->getActionScope();
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
            return [\CedricZiel\Baserow\Generated\Model\UndoRedoAction::class => false];
        }
    }
}

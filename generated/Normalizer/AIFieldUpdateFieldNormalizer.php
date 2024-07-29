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
    class AIFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField();
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
            if (\array_key_exists('ai_generative_ai_type', $data) && null !== $data['ai_generative_ai_type']) {
                $object->setAiGenerativeAiType($data['ai_generative_ai_type']);
                unset($data['ai_generative_ai_type']);
            } elseif (\array_key_exists('ai_generative_ai_type', $data) && null === $data['ai_generative_ai_type']) {
                $object->setAiGenerativeAiType(null);
            }
            if (\array_key_exists('ai_generative_ai_model', $data) && null !== $data['ai_generative_ai_model']) {
                $object->setAiGenerativeAiModel($data['ai_generative_ai_model']);
                unset($data['ai_generative_ai_model']);
            } elseif (\array_key_exists('ai_generative_ai_model', $data) && null === $data['ai_generative_ai_model']) {
                $object->setAiGenerativeAiModel(null);
            }
            if (\array_key_exists('ai_prompt', $data)) {
                $object->setAiPrompt($data['ai_prompt']);
                unset($data['ai_prompt']);
            }
            if (\array_key_exists('ai_file_field_id', $data) && null !== $data['ai_file_field_id']) {
                $object->setAiFileFieldId($data['ai_file_field_id']);
                unset($data['ai_file_field_id']);
            } elseif (\array_key_exists('ai_file_field_id', $data) && null === $data['ai_file_field_id']) {
                $object->setAiFileFieldId(null);
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
            if ($object->isInitialized('aiGenerativeAiType') && null !== $object->getAiGenerativeAiType()) {
                $data['ai_generative_ai_type'] = $object->getAiGenerativeAiType();
            }
            if ($object->isInitialized('aiGenerativeAiModel') && null !== $object->getAiGenerativeAiModel()) {
                $data['ai_generative_ai_model'] = $object->getAiGenerativeAiModel();
            }
            if ($object->isInitialized('aiPrompt') && null !== $object->getAiPrompt()) {
                $data['ai_prompt'] = $object->getAiPrompt();
            }
            if ($object->isInitialized('aiFileFieldId') && null !== $object->getAiFileFieldId()) {
                $data['ai_file_field_id'] = $object->getAiFileFieldId();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class => false];
        }
    }
} else {
    class AIFieldUpdateFieldNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField();
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
            if (\array_key_exists('ai_generative_ai_type', $data) && null !== $data['ai_generative_ai_type']) {
                $object->setAiGenerativeAiType($data['ai_generative_ai_type']);
                unset($data['ai_generative_ai_type']);
            } elseif (\array_key_exists('ai_generative_ai_type', $data) && null === $data['ai_generative_ai_type']) {
                $object->setAiGenerativeAiType(null);
            }
            if (\array_key_exists('ai_generative_ai_model', $data) && null !== $data['ai_generative_ai_model']) {
                $object->setAiGenerativeAiModel($data['ai_generative_ai_model']);
                unset($data['ai_generative_ai_model']);
            } elseif (\array_key_exists('ai_generative_ai_model', $data) && null === $data['ai_generative_ai_model']) {
                $object->setAiGenerativeAiModel(null);
            }
            if (\array_key_exists('ai_prompt', $data)) {
                $object->setAiPrompt($data['ai_prompt']);
                unset($data['ai_prompt']);
            }
            if (\array_key_exists('ai_file_field_id', $data) && null !== $data['ai_file_field_id']) {
                $object->setAiFileFieldId($data['ai_file_field_id']);
                unset($data['ai_file_field_id']);
            } elseif (\array_key_exists('ai_file_field_id', $data) && null === $data['ai_file_field_id']) {
                $object->setAiFileFieldId(null);
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
            if ($object->isInitialized('aiGenerativeAiType') && null !== $object->getAiGenerativeAiType()) {
                $data['ai_generative_ai_type'] = $object->getAiGenerativeAiType();
            }
            if ($object->isInitialized('aiGenerativeAiModel') && null !== $object->getAiGenerativeAiModel()) {
                $data['ai_generative_ai_model'] = $object->getAiGenerativeAiModel();
            }
            if ($object->isInitialized('aiPrompt') && null !== $object->getAiPrompt()) {
                $data['ai_prompt'] = $object->getAiPrompt();
            }
            if ($object->isInitialized('aiFileFieldId') && null !== $object->getAiFileFieldId()) {
                $data['ai_file_field_id'] = $object->getAiFileFieldId();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\AIFieldUpdateField::class => false];
        }
    }
}

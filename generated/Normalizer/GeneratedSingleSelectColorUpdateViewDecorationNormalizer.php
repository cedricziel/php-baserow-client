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
    class GeneratedSingleSelectColorUpdateViewDecorationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value_provider_type', $data)) {
                $object->setValueProviderType($data['value_provider_type']);
                unset($data['value_provider_type']);
            }
            if (\array_key_exists('value_provider_conf', $data)) {
                $object->setValueProviderConf($this->denormalizer->denormalize($data['value_provider_conf'], \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecorationValueProviderConf::class, 'json', $context));
                unset($data['value_provider_conf']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('valueProviderType') && null !== $object->getValueProviderType()) {
                $data['value_provider_type'] = $object->getValueProviderType();
            }
            if ($object->isInitialized('valueProviderConf') && null !== $object->getValueProviderConf()) {
                $data['value_provider_conf'] = $this->normalizer->normalize($object->getValueProviderConf(), 'json', $context);
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class => false];
        }
    }
} else {
    class GeneratedSingleSelectColorUpdateViewDecorationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('value_provider_type', $data)) {
                $object->setValueProviderType($data['value_provider_type']);
                unset($data['value_provider_type']);
            }
            if (\array_key_exists('value_provider_conf', $data)) {
                $object->setValueProviderConf($this->denormalizer->denormalize($data['value_provider_conf'], \cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecorationValueProviderConf::class, 'json', $context));
                unset($data['value_provider_conf']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
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
            if ($object->isInitialized('type') && null !== $object->getType()) {
                $data['type'] = $object->getType();
            }
            if ($object->isInitialized('valueProviderType') && null !== $object->getValueProviderType()) {
                $data['value_provider_type'] = $object->getValueProviderType();
            }
            if ($object->isInitialized('valueProviderConf') && null !== $object->getValueProviderConf()) {
                $data['value_provider_conf'] = $this->normalizer->normalize($object->getValueProviderConf(), 'json', $context);
            }
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\GeneratedSingleSelectColorUpdateViewDecoration::class => false];
        }
    }
}

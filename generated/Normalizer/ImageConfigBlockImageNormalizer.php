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
    class ImageConfigBlockImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('image_alignment', $data)) {
                $object->setImageAlignment($data['image_alignment']);
                unset($data['image_alignment']);
            }
            if (\array_key_exists('image_max_width', $data)) {
                $object->setImageMaxWidth($data['image_max_width']);
                unset($data['image_max_width']);
            }
            if (\array_key_exists('image_max_height', $data)) {
                $object->setImageMaxHeight($data['image_max_height']);
                unset($data['image_max_height']);
            }
            if (\array_key_exists('image_constraint', $data)) {
                $object->setImageConstraint($data['image_constraint']);
                unset($data['image_constraint']);
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
            if ($object->isInitialized('imageAlignment') && null !== $object->getImageAlignment()) {
                $data['image_alignment'] = $object->getImageAlignment();
            }
            if ($object->isInitialized('imageMaxWidth') && null !== $object->getImageMaxWidth()) {
                $data['image_max_width'] = $object->getImageMaxWidth();
            }
            if ($object->isInitialized('imageMaxHeight') && null !== $object->getImageMaxHeight()) {
                $data['image_max_height'] = $object->getImageMaxHeight();
            }
            if ($object->isInitialized('imageConstraint') && null !== $object->getImageConstraint()) {
                $data['image_constraint'] = $object->getImageConstraint();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class => false];
        }
    }
} else {
    class ImageConfigBlockImageNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('image_alignment', $data)) {
                $object->setImageAlignment($data['image_alignment']);
                unset($data['image_alignment']);
            }
            if (\array_key_exists('image_max_width', $data)) {
                $object->setImageMaxWidth($data['image_max_width']);
                unset($data['image_max_width']);
            }
            if (\array_key_exists('image_max_height', $data)) {
                $object->setImageMaxHeight($data['image_max_height']);
                unset($data['image_max_height']);
            }
            if (\array_key_exists('image_constraint', $data)) {
                $object->setImageConstraint($data['image_constraint']);
                unset($data['image_constraint']);
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
            if ($object->isInitialized('imageAlignment') && null !== $object->getImageAlignment()) {
                $data['image_alignment'] = $object->getImageAlignment();
            }
            if ($object->isInitialized('imageMaxWidth') && null !== $object->getImageMaxWidth()) {
                $data['image_max_width'] = $object->getImageMaxWidth();
            }
            if ($object->isInitialized('imageMaxHeight') && null !== $object->getImageMaxHeight()) {
                $data['image_max_height'] = $object->getImageMaxHeight();
            }
            if ($object->isInitialized('imageConstraint') && null !== $object->getImageConstraint()) {
                $data['image_constraint'] = $object->getImageConstraint();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\ImageConfigBlockImage::class => false];
        }
    }
}

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
    class BuilderBaseApplicationCreatePolymorphicFaviconFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('mime_type', $data)) {
                $object->setMimeType($data['mime_type']);
                unset($data['mime_type']);
            }
            if (\array_key_exists('is_image', $data)) {
                $object->setIsImage($data['is_image']);
                unset($data['is_image']);
            }
            if (\array_key_exists('image_width', $data) && null !== $data['image_width']) {
                $object->setImageWidth($data['image_width']);
                unset($data['image_width']);
            } elseif (\array_key_exists('image_width', $data) && null === $data['image_width']) {
                $object->setImageWidth(null);
            }
            if (\array_key_exists('image_height', $data) && null !== $data['image_height']) {
                $object->setImageHeight($data['image_height']);
                unset($data['image_height']);
            } elseif (\array_key_exists('image_height', $data) && null === $data['image_height']) {
                $object->setImageHeight(null);
            }
            if (\array_key_exists('uploaded_at', $data)) {
                $object->setUploadedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['uploaded_at']));
                unset($data['uploaded_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('thumbnails', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['thumbnails'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setThumbnails($values);
                unset($data['thumbnails']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('original_name', $data)) {
                $object->setOriginalName($data['original_name']);
                unset($data['original_name']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['size'] = $object->getSize();
            if ($object->isInitialized('mimeType') && null !== $object->getMimeType()) {
                $data['mime_type'] = $object->getMimeType();
            }
            if ($object->isInitialized('isImage') && null !== $object->getIsImage()) {
                $data['is_image'] = $object->getIsImage();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['image_width'] = $object->getImageWidth();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['image_height'] = $object->getImageHeight();
            }
            $data['original_name'] = $object->getOriginalName();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class => false];
        }
    }
} else {
    class BuilderBaseApplicationCreatePolymorphicFaviconFileNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('size', $data)) {
                $object->setSize($data['size']);
                unset($data['size']);
            }
            if (\array_key_exists('mime_type', $data)) {
                $object->setMimeType($data['mime_type']);
                unset($data['mime_type']);
            }
            if (\array_key_exists('is_image', $data)) {
                $object->setIsImage($data['is_image']);
                unset($data['is_image']);
            }
            if (\array_key_exists('image_width', $data) && null !== $data['image_width']) {
                $object->setImageWidth($data['image_width']);
                unset($data['image_width']);
            } elseif (\array_key_exists('image_width', $data) && null === $data['image_width']) {
                $object->setImageWidth(null);
            }
            if (\array_key_exists('image_height', $data) && null !== $data['image_height']) {
                $object->setImageHeight($data['image_height']);
                unset($data['image_height']);
            } elseif (\array_key_exists('image_height', $data) && null === $data['image_height']) {
                $object->setImageHeight(null);
            }
            if (\array_key_exists('uploaded_at', $data)) {
                $object->setUploadedAt(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['uploaded_at']));
                unset($data['uploaded_at']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('thumbnails', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['thumbnails'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setThumbnails($values);
                unset($data['thumbnails']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('original_name', $data)) {
                $object->setOriginalName($data['original_name']);
                unset($data['original_name']);
            }
            foreach ($data as $key_1 => $value_1) {
                if (preg_match('/.*/', (string) $key_1)) {
                    $object[$key_1] = $value_1;
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
            $data['size'] = $object->getSize();
            if ($object->isInitialized('mimeType') && null !== $object->getMimeType()) {
                $data['mime_type'] = $object->getMimeType();
            }
            if ($object->isInitialized('isImage') && null !== $object->getIsImage()) {
                $data['is_image'] = $object->getIsImage();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['image_width'] = $object->getImageWidth();
            }
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['image_height'] = $object->getImageHeight();
            }
            $data['original_name'] = $object->getOriginalName();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\cedricziel\phpbaserowclient\Generated\Model\BuilderBaseApplicationCreatePolymorphicFaviconFile::class => false];
        }
    }
}

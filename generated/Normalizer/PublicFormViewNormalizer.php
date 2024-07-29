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
    class PublicFormViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\PublicFormView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\PublicFormView::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\PublicFormView();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('mode', $data)) {
                $object->setMode($data['mode']);
                unset($data['mode']);
            }
            if (\array_key_exists('cover_image', $data) && null !== $data['cover_image']) {
                $object->setCoverImage($this->denormalizer->denormalize($data['cover_image'], \CedricZiel\Baserow\Generated\Model\PublicFormViewCoverImage::class, 'json', $context));
                unset($data['cover_image']);
            } elseif (\array_key_exists('cover_image', $data) && null === $data['cover_image']) {
                $object->setCoverImage(null);
            }
            if (\array_key_exists('logo_image', $data) && null !== $data['logo_image']) {
                $object->setLogoImage($this->denormalizer->denormalize($data['logo_image'], \CedricZiel\Baserow\Generated\Model\PublicFormViewLogoImage::class, 'json', $context));
                unset($data['logo_image']);
            } elseif (\array_key_exists('logo_image', $data) && null === $data['logo_image']) {
                $object->setLogoImage(null);
            }
            if (\array_key_exists('submit_text', $data)) {
                $object->setSubmitText($data['submit_text']);
                unset($data['submit_text']);
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\PublicFormViewFieldOptions::class, 'json', $context);
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('show_logo', $data)) {
                $object->setShowLogo($data['show_logo']);
                unset($data['show_logo']);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['mode'] = $object->getMode();
            }
            if ($object->isInitialized('coverImage') && null !== $object->getCoverImage()) {
                $data['cover_image'] = $this->normalizer->normalize($object->getCoverImage(), 'json', $context);
            }
            if ($object->isInitialized('logoImage') && null !== $object->getLogoImage()) {
                $data['logo_image'] = $this->normalizer->normalize($object->getLogoImage(), 'json', $context);
            }
            if ($object->isInitialized('submitText') && null !== $object->getSubmitText()) {
                $data['submit_text'] = $object->getSubmitText();
            }
            $values = [];
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['fields'] = $values;
            if ($object->isInitialized('showLogo') && null !== $object->getShowLogo()) {
                $data['show_logo'] = $object->getShowLogo();
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
            return [\CedricZiel\Baserow\Generated\Model\PublicFormView::class => false];
        }
    }
} else {
    class PublicFormViewNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\PublicFormView::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\PublicFormView::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\PublicFormView();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('description', $data)) {
                $object->setDescription($data['description']);
                unset($data['description']);
            }
            if (\array_key_exists('mode', $data)) {
                $object->setMode($data['mode']);
                unset($data['mode']);
            }
            if (\array_key_exists('cover_image', $data) && null !== $data['cover_image']) {
                $object->setCoverImage($this->denormalizer->denormalize($data['cover_image'], \CedricZiel\Baserow\Generated\Model\PublicFormViewCoverImage::class, 'json', $context));
                unset($data['cover_image']);
            } elseif (\array_key_exists('cover_image', $data) && null === $data['cover_image']) {
                $object->setCoverImage(null);
            }
            if (\array_key_exists('logo_image', $data) && null !== $data['logo_image']) {
                $object->setLogoImage($this->denormalizer->denormalize($data['logo_image'], \CedricZiel\Baserow\Generated\Model\PublicFormViewLogoImage::class, 'json', $context));
                unset($data['logo_image']);
            } elseif (\array_key_exists('logo_image', $data) && null === $data['logo_image']) {
                $object->setLogoImage(null);
            }
            if (\array_key_exists('submit_text', $data)) {
                $object->setSubmitText($data['submit_text']);
                unset($data['submit_text']);
            }
            if (\array_key_exists('fields', $data)) {
                $values = [];
                foreach ($data['fields'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\PublicFormViewFieldOptions::class, 'json', $context);
                }
                $object->setFields($values);
                unset($data['fields']);
            }
            if (\array_key_exists('show_logo', $data)) {
                $object->setShowLogo($data['show_logo']);
                unset($data['show_logo']);
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
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('description') && null !== $object->getDescription()) {
                $data['description'] = $object->getDescription();
            }
            if ($object->isInitialized('mode') && null !== $object->getMode()) {
                $data['mode'] = $object->getMode();
            }
            if ($object->isInitialized('coverImage') && null !== $object->getCoverImage()) {
                $data['cover_image'] = $this->normalizer->normalize($object->getCoverImage(), 'json', $context);
            }
            if ($object->isInitialized('logoImage') && null !== $object->getLogoImage()) {
                $data['logo_image'] = $this->normalizer->normalize($object->getLogoImage(), 'json', $context);
            }
            if ($object->isInitialized('submitText') && null !== $object->getSubmitText()) {
                $data['submit_text'] = $object->getSubmitText();
            }
            $values = [];
            foreach ($object->getFields() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['fields'] = $values;
            if ($object->isInitialized('showLogo') && null !== $object->getShowLogo()) {
                $data['show_logo'] = $object->getShowLogo();
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
            return [\CedricZiel\Baserow\Generated\Model\PublicFormView::class => false];
        }
    }
}

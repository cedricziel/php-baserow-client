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
    class FormViewUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('public_view_password', $data)) {
                $object->setPublicViewPassword($data['public_view_password']);
                unset($data['public_view_password']);
            }
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
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
                $object->setCoverImage($this->denormalizer->denormalize($data['cover_image'], \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdateCoverImage::class, 'json', $context));
                unset($data['cover_image']);
            } elseif (\array_key_exists('cover_image', $data) && null === $data['cover_image']) {
                $object->setCoverImage(null);
            }
            if (\array_key_exists('logo_image', $data) && null !== $data['logo_image']) {
                $object->setLogoImage($this->denormalizer->denormalize($data['logo_image'], \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdateLogoImage::class, 'json', $context));
                unset($data['logo_image']);
            } elseif (\array_key_exists('logo_image', $data) && null === $data['logo_image']) {
                $object->setLogoImage(null);
            }
            if (\array_key_exists('submit_text', $data)) {
                $object->setSubmitText($data['submit_text']);
                unset($data['submit_text']);
            }
            if (\array_key_exists('submit_action', $data)) {
                $object->setSubmitAction($data['submit_action']);
                unset($data['submit_action']);
            }
            if (\array_key_exists('submit_action_message', $data)) {
                $object->setSubmitActionMessage($data['submit_action_message']);
                unset($data['submit_action_message']);
            }
            if (\array_key_exists('submit_action_redirect_url', $data)) {
                $object->setSubmitActionRedirectUrl($data['submit_action_redirect_url']);
                unset($data['submit_action_redirect_url']);
            }
            if (\array_key_exists('receive_notification_on_submit', $data)) {
                $object->setReceiveNotificationOnSubmit($data['receive_notification_on_submit']);
                unset($data['receive_notification_on_submit']);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
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
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('publicViewPassword') && null !== $object->getPublicViewPassword()) {
                $data['public_view_password'] = $object->getPublicViewPassword();
            }
            if ($object->isInitialized('ownershipType') && null !== $object->getOwnershipType()) {
                $data['ownership_type'] = $object->getOwnershipType();
            }
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
            if ($object->isInitialized('submitAction') && null !== $object->getSubmitAction()) {
                $data['submit_action'] = $object->getSubmitAction();
            }
            if ($object->isInitialized('submitActionMessage') && null !== $object->getSubmitActionMessage()) {
                $data['submit_action_message'] = $object->getSubmitActionMessage();
            }
            if ($object->isInitialized('submitActionRedirectUrl') && null !== $object->getSubmitActionRedirectUrl()) {
                $data['submit_action_redirect_url'] = $object->getSubmitActionRedirectUrl();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class => false];
        }
    }
} else {
    class FormViewUpdateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('filter_type', $data)) {
                $object->setFilterType($data['filter_type']);
                unset($data['filter_type']);
            }
            if (\array_key_exists('filters_disabled', $data)) {
                $object->setFiltersDisabled($data['filters_disabled']);
                unset($data['filters_disabled']);
            }
            if (\array_key_exists('public_view_password', $data)) {
                $object->setPublicViewPassword($data['public_view_password']);
                unset($data['public_view_password']);
            }
            if (\array_key_exists('ownership_type', $data)) {
                $object->setOwnershipType($data['ownership_type']);
                unset($data['ownership_type']);
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
                $object->setCoverImage($this->denormalizer->denormalize($data['cover_image'], \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdateCoverImage::class, 'json', $context));
                unset($data['cover_image']);
            } elseif (\array_key_exists('cover_image', $data) && null === $data['cover_image']) {
                $object->setCoverImage(null);
            }
            if (\array_key_exists('logo_image', $data) && null !== $data['logo_image']) {
                $object->setLogoImage($this->denormalizer->denormalize($data['logo_image'], \cedricziel\phpbaserowclient\Generated\Model\FormViewUpdateLogoImage::class, 'json', $context));
                unset($data['logo_image']);
            } elseif (\array_key_exists('logo_image', $data) && null === $data['logo_image']) {
                $object->setLogoImage(null);
            }
            if (\array_key_exists('submit_text', $data)) {
                $object->setSubmitText($data['submit_text']);
                unset($data['submit_text']);
            }
            if (\array_key_exists('submit_action', $data)) {
                $object->setSubmitAction($data['submit_action']);
                unset($data['submit_action']);
            }
            if (\array_key_exists('submit_action_message', $data)) {
                $object->setSubmitActionMessage($data['submit_action_message']);
                unset($data['submit_action_message']);
            }
            if (\array_key_exists('submit_action_redirect_url', $data)) {
                $object->setSubmitActionRedirectUrl($data['submit_action_redirect_url']);
                unset($data['submit_action_redirect_url']);
            }
            if (\array_key_exists('receive_notification_on_submit', $data)) {
                $object->setReceiveNotificationOnSubmit($data['receive_notification_on_submit']);
                unset($data['receive_notification_on_submit']);
            }
            if (\array_key_exists('public', $data)) {
                $object->setPublic($data['public']);
                unset($data['public']);
            }
            if (\array_key_exists('slug', $data)) {
                $object->setSlug($data['slug']);
                unset($data['slug']);
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
            if ($object->isInitialized('filterType') && null !== $object->getFilterType()) {
                $data['filter_type'] = $object->getFilterType();
            }
            if ($object->isInitialized('filtersDisabled') && null !== $object->getFiltersDisabled()) {
                $data['filters_disabled'] = $object->getFiltersDisabled();
            }
            if ($object->isInitialized('publicViewPassword') && null !== $object->getPublicViewPassword()) {
                $data['public_view_password'] = $object->getPublicViewPassword();
            }
            if ($object->isInitialized('ownershipType') && null !== $object->getOwnershipType()) {
                $data['ownership_type'] = $object->getOwnershipType();
            }
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
            if ($object->isInitialized('submitAction') && null !== $object->getSubmitAction()) {
                $data['submit_action'] = $object->getSubmitAction();
            }
            if ($object->isInitialized('submitActionMessage') && null !== $object->getSubmitActionMessage()) {
                $data['submit_action_message'] = $object->getSubmitActionMessage();
            }
            if ($object->isInitialized('submitActionRedirectUrl') && null !== $object->getSubmitActionRedirectUrl()) {
                $data['submit_action_redirect_url'] = $object->getSubmitActionRedirectUrl();
            }
            if ($object->isInitialized('public') && null !== $object->getPublic()) {
                $data['public'] = $object->getPublic();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\FormViewUpdate::class => false];
        }
    }
}

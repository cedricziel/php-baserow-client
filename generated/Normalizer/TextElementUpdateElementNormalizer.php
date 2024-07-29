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
    class TextElementUpdateElementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('styles', $data)) {
                $object->setStyles($this->denormalizer->denormalize($data['styles'], \cedricziel\phpbaserowclient\Generated\Model\TypographyConfigBlock::class, 'json', $context));
                unset($data['styles']);
            }
            if (\array_key_exists('style_border_top_color', $data)) {
                $object->setStyleBorderTopColor($data['style_border_top_color']);
                unset($data['style_border_top_color']);
            }
            if (\array_key_exists('style_border_top_size', $data)) {
                $object->setStyleBorderTopSize($data['style_border_top_size']);
                unset($data['style_border_top_size']);
            }
            if (\array_key_exists('style_padding_top', $data)) {
                $object->setStylePaddingTop($data['style_padding_top']);
                unset($data['style_padding_top']);
            }
            if (\array_key_exists('style_margin_top', $data) && null !== $data['style_margin_top']) {
                $object->setStyleMarginTop($data['style_margin_top']);
                unset($data['style_margin_top']);
            } elseif (\array_key_exists('style_margin_top', $data) && null === $data['style_margin_top']) {
                $object->setStyleMarginTop(null);
            }
            if (\array_key_exists('style_border_bottom_color', $data)) {
                $object->setStyleBorderBottomColor($data['style_border_bottom_color']);
                unset($data['style_border_bottom_color']);
            }
            if (\array_key_exists('style_border_bottom_size', $data)) {
                $object->setStyleBorderBottomSize($data['style_border_bottom_size']);
                unset($data['style_border_bottom_size']);
            }
            if (\array_key_exists('style_padding_bottom', $data)) {
                $object->setStylePaddingBottom($data['style_padding_bottom']);
                unset($data['style_padding_bottom']);
            }
            if (\array_key_exists('style_margin_bottom', $data) && null !== $data['style_margin_bottom']) {
                $object->setStyleMarginBottom($data['style_margin_bottom']);
                unset($data['style_margin_bottom']);
            } elseif (\array_key_exists('style_margin_bottom', $data) && null === $data['style_margin_bottom']) {
                $object->setStyleMarginBottom(null);
            }
            if (\array_key_exists('style_border_left_color', $data)) {
                $object->setStyleBorderLeftColor($data['style_border_left_color']);
                unset($data['style_border_left_color']);
            }
            if (\array_key_exists('style_border_left_size', $data)) {
                $object->setStyleBorderLeftSize($data['style_border_left_size']);
                unset($data['style_border_left_size']);
            }
            if (\array_key_exists('style_padding_left', $data)) {
                $object->setStylePaddingLeft($data['style_padding_left']);
                unset($data['style_padding_left']);
            }
            if (\array_key_exists('style_margin_left', $data) && null !== $data['style_margin_left']) {
                $object->setStyleMarginLeft($data['style_margin_left']);
                unset($data['style_margin_left']);
            } elseif (\array_key_exists('style_margin_left', $data) && null === $data['style_margin_left']) {
                $object->setStyleMarginLeft(null);
            }
            if (\array_key_exists('style_border_right_color', $data)) {
                $object->setStyleBorderRightColor($data['style_border_right_color']);
                unset($data['style_border_right_color']);
            }
            if (\array_key_exists('style_border_right_size', $data)) {
                $object->setStyleBorderRightSize($data['style_border_right_size']);
                unset($data['style_border_right_size']);
            }
            if (\array_key_exists('style_padding_right', $data)) {
                $object->setStylePaddingRight($data['style_padding_right']);
                unset($data['style_padding_right']);
            }
            if (\array_key_exists('style_margin_right', $data) && null !== $data['style_margin_right']) {
                $object->setStyleMarginRight($data['style_margin_right']);
                unset($data['style_margin_right']);
            } elseif (\array_key_exists('style_margin_right', $data) && null === $data['style_margin_right']) {
                $object->setStyleMarginRight(null);
            }
            if (\array_key_exists('style_background', $data)) {
                $object->setStyleBackground($data['style_background']);
                unset($data['style_background']);
            }
            if (\array_key_exists('style_background_color', $data)) {
                $object->setStyleBackgroundColor($data['style_background_color']);
                unset($data['style_background_color']);
            }
            if (\array_key_exists('style_background_file', $data) && null !== $data['style_background_file']) {
                $object->setStyleBackgroundFile($this->denormalizer->denormalize($data['style_background_file'], \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElementStyleBackgroundFile::class, 'json', $context));
                unset($data['style_background_file']);
            } elseif (\array_key_exists('style_background_file', $data) && null === $data['style_background_file']) {
                $object->setStyleBackgroundFile(null);
            }
            if (\array_key_exists('style_background_mode', $data) && null !== $data['style_background_mode']) {
                $object->setStyleBackgroundMode($data['style_background_mode']);
                unset($data['style_background_mode']);
            } elseif (\array_key_exists('style_background_mode', $data) && null === $data['style_background_mode']) {
                $object->setStyleBackgroundMode(null);
            }
            if (\array_key_exists('style_width', $data)) {
                $object->setStyleWidth($data['style_width']);
                unset($data['style_width']);
            }
            if (\array_key_exists('role_type', $data) && null !== $data['role_type']) {
                $object->setRoleType($data['role_type']);
                unset($data['role_type']);
            } elseif (\array_key_exists('role_type', $data) && null === $data['role_type']) {
                $object->setRoleType(null);
            }
            if (\array_key_exists('roles', $data) && null !== $data['roles']) {
                $object->setRoles($data['roles']);
                unset($data['roles']);
            } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
                $object->setRoles(null);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('alignment', $data)) {
                $object->setAlignment($data['alignment']);
                unset($data['alignment']);
            }
            if (\array_key_exists('format', $data)) {
                $object->setFormat($data['format']);
                unset($data['format']);
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
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('styles') && null !== $object->getStyles()) {
                $data['styles'] = $this->normalizer->normalize($object->getStyles(), 'json', $context);
            }
            if ($object->isInitialized('styleBorderTopColor') && null !== $object->getStyleBorderTopColor()) {
                $data['style_border_top_color'] = $object->getStyleBorderTopColor();
            }
            if ($object->isInitialized('styleBorderTopSize') && null !== $object->getStyleBorderTopSize()) {
                $data['style_border_top_size'] = $object->getStyleBorderTopSize();
            }
            if ($object->isInitialized('stylePaddingTop') && null !== $object->getStylePaddingTop()) {
                $data['style_padding_top'] = $object->getStylePaddingTop();
            }
            if ($object->isInitialized('styleMarginTop') && null !== $object->getStyleMarginTop()) {
                $data['style_margin_top'] = $object->getStyleMarginTop();
            }
            if ($object->isInitialized('styleBorderBottomColor') && null !== $object->getStyleBorderBottomColor()) {
                $data['style_border_bottom_color'] = $object->getStyleBorderBottomColor();
            }
            if ($object->isInitialized('styleBorderBottomSize') && null !== $object->getStyleBorderBottomSize()) {
                $data['style_border_bottom_size'] = $object->getStyleBorderBottomSize();
            }
            if ($object->isInitialized('stylePaddingBottom') && null !== $object->getStylePaddingBottom()) {
                $data['style_padding_bottom'] = $object->getStylePaddingBottom();
            }
            if ($object->isInitialized('styleMarginBottom') && null !== $object->getStyleMarginBottom()) {
                $data['style_margin_bottom'] = $object->getStyleMarginBottom();
            }
            if ($object->isInitialized('styleBorderLeftColor') && null !== $object->getStyleBorderLeftColor()) {
                $data['style_border_left_color'] = $object->getStyleBorderLeftColor();
            }
            if ($object->isInitialized('styleBorderLeftSize') && null !== $object->getStyleBorderLeftSize()) {
                $data['style_border_left_size'] = $object->getStyleBorderLeftSize();
            }
            if ($object->isInitialized('stylePaddingLeft') && null !== $object->getStylePaddingLeft()) {
                $data['style_padding_left'] = $object->getStylePaddingLeft();
            }
            if ($object->isInitialized('styleMarginLeft') && null !== $object->getStyleMarginLeft()) {
                $data['style_margin_left'] = $object->getStyleMarginLeft();
            }
            if ($object->isInitialized('styleBorderRightColor') && null !== $object->getStyleBorderRightColor()) {
                $data['style_border_right_color'] = $object->getStyleBorderRightColor();
            }
            if ($object->isInitialized('styleBorderRightSize') && null !== $object->getStyleBorderRightSize()) {
                $data['style_border_right_size'] = $object->getStyleBorderRightSize();
            }
            if ($object->isInitialized('stylePaddingRight') && null !== $object->getStylePaddingRight()) {
                $data['style_padding_right'] = $object->getStylePaddingRight();
            }
            if ($object->isInitialized('styleMarginRight') && null !== $object->getStyleMarginRight()) {
                $data['style_margin_right'] = $object->getStyleMarginRight();
            }
            if ($object->isInitialized('styleBackground') && null !== $object->getStyleBackground()) {
                $data['style_background'] = $object->getStyleBackground();
            }
            if ($object->isInitialized('styleBackgroundColor') && null !== $object->getStyleBackgroundColor()) {
                $data['style_background_color'] = $object->getStyleBackgroundColor();
            }
            if ($object->isInitialized('styleBackgroundFile') && null !== $object->getStyleBackgroundFile()) {
                $data['style_background_file'] = $this->normalizer->normalize($object->getStyleBackgroundFile(), 'json', $context);
            }
            if ($object->isInitialized('styleBackgroundMode') && null !== $object->getStyleBackgroundMode()) {
                $data['style_background_mode'] = $object->getStyleBackgroundMode();
            }
            if ($object->isInitialized('styleWidth') && null !== $object->getStyleWidth()) {
                $data['style_width'] = $object->getStyleWidth();
            }
            if ($object->isInitialized('roleType') && null !== $object->getRoleType()) {
                $data['role_type'] = $object->getRoleType();
            }
            if ($object->isInitialized('roles') && null !== $object->getRoles()) {
                $data['roles'] = $object->getRoles();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('alignment') && null !== $object->getAlignment()) {
                $data['alignment'] = $object->getAlignment();
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class => false];
        }
    }
} else {
    class TextElementUpdateElementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('styles', $data)) {
                $object->setStyles($this->denormalizer->denormalize($data['styles'], \cedricziel\phpbaserowclient\Generated\Model\TypographyConfigBlock::class, 'json', $context));
                unset($data['styles']);
            }
            if (\array_key_exists('style_border_top_color', $data)) {
                $object->setStyleBorderTopColor($data['style_border_top_color']);
                unset($data['style_border_top_color']);
            }
            if (\array_key_exists('style_border_top_size', $data)) {
                $object->setStyleBorderTopSize($data['style_border_top_size']);
                unset($data['style_border_top_size']);
            }
            if (\array_key_exists('style_padding_top', $data)) {
                $object->setStylePaddingTop($data['style_padding_top']);
                unset($data['style_padding_top']);
            }
            if (\array_key_exists('style_margin_top', $data) && null !== $data['style_margin_top']) {
                $object->setStyleMarginTop($data['style_margin_top']);
                unset($data['style_margin_top']);
            } elseif (\array_key_exists('style_margin_top', $data) && null === $data['style_margin_top']) {
                $object->setStyleMarginTop(null);
            }
            if (\array_key_exists('style_border_bottom_color', $data)) {
                $object->setStyleBorderBottomColor($data['style_border_bottom_color']);
                unset($data['style_border_bottom_color']);
            }
            if (\array_key_exists('style_border_bottom_size', $data)) {
                $object->setStyleBorderBottomSize($data['style_border_bottom_size']);
                unset($data['style_border_bottom_size']);
            }
            if (\array_key_exists('style_padding_bottom', $data)) {
                $object->setStylePaddingBottom($data['style_padding_bottom']);
                unset($data['style_padding_bottom']);
            }
            if (\array_key_exists('style_margin_bottom', $data) && null !== $data['style_margin_bottom']) {
                $object->setStyleMarginBottom($data['style_margin_bottom']);
                unset($data['style_margin_bottom']);
            } elseif (\array_key_exists('style_margin_bottom', $data) && null === $data['style_margin_bottom']) {
                $object->setStyleMarginBottom(null);
            }
            if (\array_key_exists('style_border_left_color', $data)) {
                $object->setStyleBorderLeftColor($data['style_border_left_color']);
                unset($data['style_border_left_color']);
            }
            if (\array_key_exists('style_border_left_size', $data)) {
                $object->setStyleBorderLeftSize($data['style_border_left_size']);
                unset($data['style_border_left_size']);
            }
            if (\array_key_exists('style_padding_left', $data)) {
                $object->setStylePaddingLeft($data['style_padding_left']);
                unset($data['style_padding_left']);
            }
            if (\array_key_exists('style_margin_left', $data) && null !== $data['style_margin_left']) {
                $object->setStyleMarginLeft($data['style_margin_left']);
                unset($data['style_margin_left']);
            } elseif (\array_key_exists('style_margin_left', $data) && null === $data['style_margin_left']) {
                $object->setStyleMarginLeft(null);
            }
            if (\array_key_exists('style_border_right_color', $data)) {
                $object->setStyleBorderRightColor($data['style_border_right_color']);
                unset($data['style_border_right_color']);
            }
            if (\array_key_exists('style_border_right_size', $data)) {
                $object->setStyleBorderRightSize($data['style_border_right_size']);
                unset($data['style_border_right_size']);
            }
            if (\array_key_exists('style_padding_right', $data)) {
                $object->setStylePaddingRight($data['style_padding_right']);
                unset($data['style_padding_right']);
            }
            if (\array_key_exists('style_margin_right', $data) && null !== $data['style_margin_right']) {
                $object->setStyleMarginRight($data['style_margin_right']);
                unset($data['style_margin_right']);
            } elseif (\array_key_exists('style_margin_right', $data) && null === $data['style_margin_right']) {
                $object->setStyleMarginRight(null);
            }
            if (\array_key_exists('style_background', $data)) {
                $object->setStyleBackground($data['style_background']);
                unset($data['style_background']);
            }
            if (\array_key_exists('style_background_color', $data)) {
                $object->setStyleBackgroundColor($data['style_background_color']);
                unset($data['style_background_color']);
            }
            if (\array_key_exists('style_background_file', $data) && null !== $data['style_background_file']) {
                $object->setStyleBackgroundFile($this->denormalizer->denormalize($data['style_background_file'], \cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElementStyleBackgroundFile::class, 'json', $context));
                unset($data['style_background_file']);
            } elseif (\array_key_exists('style_background_file', $data) && null === $data['style_background_file']) {
                $object->setStyleBackgroundFile(null);
            }
            if (\array_key_exists('style_background_mode', $data) && null !== $data['style_background_mode']) {
                $object->setStyleBackgroundMode($data['style_background_mode']);
                unset($data['style_background_mode']);
            } elseif (\array_key_exists('style_background_mode', $data) && null === $data['style_background_mode']) {
                $object->setStyleBackgroundMode(null);
            }
            if (\array_key_exists('style_width', $data)) {
                $object->setStyleWidth($data['style_width']);
                unset($data['style_width']);
            }
            if (\array_key_exists('role_type', $data) && null !== $data['role_type']) {
                $object->setRoleType($data['role_type']);
                unset($data['role_type']);
            } elseif (\array_key_exists('role_type', $data) && null === $data['role_type']) {
                $object->setRoleType(null);
            }
            if (\array_key_exists('roles', $data) && null !== $data['roles']) {
                $object->setRoles($data['roles']);
                unset($data['roles']);
            } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
                $object->setRoles(null);
            }
            if (\array_key_exists('value', $data)) {
                $object->setValue($data['value']);
                unset($data['value']);
            }
            if (\array_key_exists('alignment', $data)) {
                $object->setAlignment($data['alignment']);
                unset($data['alignment']);
            }
            if (\array_key_exists('format', $data)) {
                $object->setFormat($data['format']);
                unset($data['format']);
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
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('styles') && null !== $object->getStyles()) {
                $data['styles'] = $this->normalizer->normalize($object->getStyles(), 'json', $context);
            }
            if ($object->isInitialized('styleBorderTopColor') && null !== $object->getStyleBorderTopColor()) {
                $data['style_border_top_color'] = $object->getStyleBorderTopColor();
            }
            if ($object->isInitialized('styleBorderTopSize') && null !== $object->getStyleBorderTopSize()) {
                $data['style_border_top_size'] = $object->getStyleBorderTopSize();
            }
            if ($object->isInitialized('stylePaddingTop') && null !== $object->getStylePaddingTop()) {
                $data['style_padding_top'] = $object->getStylePaddingTop();
            }
            if ($object->isInitialized('styleMarginTop') && null !== $object->getStyleMarginTop()) {
                $data['style_margin_top'] = $object->getStyleMarginTop();
            }
            if ($object->isInitialized('styleBorderBottomColor') && null !== $object->getStyleBorderBottomColor()) {
                $data['style_border_bottom_color'] = $object->getStyleBorderBottomColor();
            }
            if ($object->isInitialized('styleBorderBottomSize') && null !== $object->getStyleBorderBottomSize()) {
                $data['style_border_bottom_size'] = $object->getStyleBorderBottomSize();
            }
            if ($object->isInitialized('stylePaddingBottom') && null !== $object->getStylePaddingBottom()) {
                $data['style_padding_bottom'] = $object->getStylePaddingBottom();
            }
            if ($object->isInitialized('styleMarginBottom') && null !== $object->getStyleMarginBottom()) {
                $data['style_margin_bottom'] = $object->getStyleMarginBottom();
            }
            if ($object->isInitialized('styleBorderLeftColor') && null !== $object->getStyleBorderLeftColor()) {
                $data['style_border_left_color'] = $object->getStyleBorderLeftColor();
            }
            if ($object->isInitialized('styleBorderLeftSize') && null !== $object->getStyleBorderLeftSize()) {
                $data['style_border_left_size'] = $object->getStyleBorderLeftSize();
            }
            if ($object->isInitialized('stylePaddingLeft') && null !== $object->getStylePaddingLeft()) {
                $data['style_padding_left'] = $object->getStylePaddingLeft();
            }
            if ($object->isInitialized('styleMarginLeft') && null !== $object->getStyleMarginLeft()) {
                $data['style_margin_left'] = $object->getStyleMarginLeft();
            }
            if ($object->isInitialized('styleBorderRightColor') && null !== $object->getStyleBorderRightColor()) {
                $data['style_border_right_color'] = $object->getStyleBorderRightColor();
            }
            if ($object->isInitialized('styleBorderRightSize') && null !== $object->getStyleBorderRightSize()) {
                $data['style_border_right_size'] = $object->getStyleBorderRightSize();
            }
            if ($object->isInitialized('stylePaddingRight') && null !== $object->getStylePaddingRight()) {
                $data['style_padding_right'] = $object->getStylePaddingRight();
            }
            if ($object->isInitialized('styleMarginRight') && null !== $object->getStyleMarginRight()) {
                $data['style_margin_right'] = $object->getStyleMarginRight();
            }
            if ($object->isInitialized('styleBackground') && null !== $object->getStyleBackground()) {
                $data['style_background'] = $object->getStyleBackground();
            }
            if ($object->isInitialized('styleBackgroundColor') && null !== $object->getStyleBackgroundColor()) {
                $data['style_background_color'] = $object->getStyleBackgroundColor();
            }
            if ($object->isInitialized('styleBackgroundFile') && null !== $object->getStyleBackgroundFile()) {
                $data['style_background_file'] = $this->normalizer->normalize($object->getStyleBackgroundFile(), 'json', $context);
            }
            if ($object->isInitialized('styleBackgroundMode') && null !== $object->getStyleBackgroundMode()) {
                $data['style_background_mode'] = $object->getStyleBackgroundMode();
            }
            if ($object->isInitialized('styleWidth') && null !== $object->getStyleWidth()) {
                $data['style_width'] = $object->getStyleWidth();
            }
            if ($object->isInitialized('roleType') && null !== $object->getRoleType()) {
                $data['role_type'] = $object->getRoleType();
            }
            if ($object->isInitialized('roles') && null !== $object->getRoles()) {
                $data['roles'] = $object->getRoles();
            }
            if ($object->isInitialized('value') && null !== $object->getValue()) {
                $data['value'] = $object->getValue();
            }
            if ($object->isInitialized('alignment') && null !== $object->getAlignment()) {
                $data['alignment'] = $object->getAlignment();
            }
            if ($object->isInitialized('format') && null !== $object->getFormat()) {
                $data['format'] = $object->getFormat();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\TextElementUpdateElement::class => false];
        }
    }
}

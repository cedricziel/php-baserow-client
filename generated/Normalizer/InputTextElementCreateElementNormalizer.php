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
    class InputTextElementCreateElementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('before_id', $data)) {
                $object->setBeforeId($data['before_id']);
                unset($data['before_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('parent_element_id', $data) && null !== $data['parent_element_id']) {
                $object->setParentElementId($data['parent_element_id']);
                unset($data['parent_element_id']);
            } elseif (\array_key_exists('parent_element_id', $data) && null === $data['parent_element_id']) {
                $object->setParentElementId(null);
            }
            if (\array_key_exists('place_in_container', $data) && null !== $data['place_in_container']) {
                $object->setPlaceInContainer($data['place_in_container']);
                unset($data['place_in_container']);
            } elseif (\array_key_exists('place_in_container', $data) && null === $data['place_in_container']) {
                $object->setPlaceInContainer(null);
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('styles', $data) && null !== $data['styles']) {
                $object->setStyles($data['styles']);
                unset($data['styles']);
            } elseif (\array_key_exists('styles', $data) && null === $data['styles']) {
                $object->setStyles(null);
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
                $object->setStyleBackgroundFile($this->denormalizer->denormalize($data['style_background_file'], \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElementStyleBackgroundFile::class, 'json', $context));
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
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('default_value', $data)) {
                $object->setDefaultValue($data['default_value']);
                unset($data['default_value']);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('validation_type', $data)) {
                $object->setValidationType($data['validation_type']);
                unset($data['validation_type']);
            }
            if (\array_key_exists('placeholder', $data)) {
                $object->setPlaceholder($data['placeholder']);
                unset($data['placeholder']);
            }
            if (\array_key_exists('is_multiline', $data)) {
                $object->setIsMultiline($data['is_multiline']);
                unset($data['is_multiline']);
            }
            if (\array_key_exists('rows', $data)) {
                $object->setRows($data['rows']);
                unset($data['rows']);
            }
            if (\array_key_exists('input_type', $data)) {
                $object->setInputType($data['input_type']);
                unset($data['input_type']);
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
            if ($object->isInitialized('beforeId') && null !== $object->getBeforeId()) {
                $data['before_id'] = $object->getBeforeId();
            }
            $data['type'] = $object->getType();
            if ($object->isInitialized('parentElementId') && null !== $object->getParentElementId()) {
                $data['parent_element_id'] = $object->getParentElementId();
            }
            if ($object->isInitialized('placeInContainer') && null !== $object->getPlaceInContainer()) {
                $data['place_in_container'] = $object->getPlaceInContainer();
            }
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('styles') && null !== $object->getStyles()) {
                $data['styles'] = $object->getStyles();
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
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            if ($object->isInitialized('defaultValue') && null !== $object->getDefaultValue()) {
                $data['default_value'] = $object->getDefaultValue();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            if ($object->isInitialized('validationType') && null !== $object->getValidationType()) {
                $data['validation_type'] = $object->getValidationType();
            }
            if ($object->isInitialized('placeholder') && null !== $object->getPlaceholder()) {
                $data['placeholder'] = $object->getPlaceholder();
            }
            if ($object->isInitialized('isMultiline') && null !== $object->getIsMultiline()) {
                $data['is_multiline'] = $object->getIsMultiline();
            }
            if ($object->isInitialized('rows') && null !== $object->getRows()) {
                $data['rows'] = $object->getRows();
            }
            if ($object->isInitialized('inputType') && null !== $object->getInputType()) {
                $data['input_type'] = $object->getInputType();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class => false];
        }
    }
} else {
    class InputTextElementCreateElementNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('before_id', $data)) {
                $object->setBeforeId($data['before_id']);
                unset($data['before_id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('parent_element_id', $data) && null !== $data['parent_element_id']) {
                $object->setParentElementId($data['parent_element_id']);
                unset($data['parent_element_id']);
            } elseif (\array_key_exists('parent_element_id', $data) && null === $data['parent_element_id']) {
                $object->setParentElementId(null);
            }
            if (\array_key_exists('place_in_container', $data) && null !== $data['place_in_container']) {
                $object->setPlaceInContainer($data['place_in_container']);
                unset($data['place_in_container']);
            } elseif (\array_key_exists('place_in_container', $data) && null === $data['place_in_container']) {
                $object->setPlaceInContainer(null);
            }
            if (\array_key_exists('visibility', $data)) {
                $object->setVisibility($data['visibility']);
                unset($data['visibility']);
            }
            if (\array_key_exists('styles', $data) && null !== $data['styles']) {
                $object->setStyles($data['styles']);
                unset($data['styles']);
            } elseif (\array_key_exists('styles', $data) && null === $data['styles']) {
                $object->setStyles(null);
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
                $object->setStyleBackgroundFile($this->denormalizer->denormalize($data['style_background_file'], \cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElementStyleBackgroundFile::class, 'json', $context));
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
            if (\array_key_exists('label', $data)) {
                $object->setLabel($data['label']);
                unset($data['label']);
            }
            if (\array_key_exists('default_value', $data)) {
                $object->setDefaultValue($data['default_value']);
                unset($data['default_value']);
            }
            if (\array_key_exists('required', $data)) {
                $object->setRequired($data['required']);
                unset($data['required']);
            }
            if (\array_key_exists('validation_type', $data)) {
                $object->setValidationType($data['validation_type']);
                unset($data['validation_type']);
            }
            if (\array_key_exists('placeholder', $data)) {
                $object->setPlaceholder($data['placeholder']);
                unset($data['placeholder']);
            }
            if (\array_key_exists('is_multiline', $data)) {
                $object->setIsMultiline($data['is_multiline']);
                unset($data['is_multiline']);
            }
            if (\array_key_exists('rows', $data)) {
                $object->setRows($data['rows']);
                unset($data['rows']);
            }
            if (\array_key_exists('input_type', $data)) {
                $object->setInputType($data['input_type']);
                unset($data['input_type']);
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
            if ($object->isInitialized('beforeId') && null !== $object->getBeforeId()) {
                $data['before_id'] = $object->getBeforeId();
            }
            $data['type'] = $object->getType();
            if ($object->isInitialized('parentElementId') && null !== $object->getParentElementId()) {
                $data['parent_element_id'] = $object->getParentElementId();
            }
            if ($object->isInitialized('placeInContainer') && null !== $object->getPlaceInContainer()) {
                $data['place_in_container'] = $object->getPlaceInContainer();
            }
            if ($object->isInitialized('visibility') && null !== $object->getVisibility()) {
                $data['visibility'] = $object->getVisibility();
            }
            if ($object->isInitialized('styles') && null !== $object->getStyles()) {
                $data['styles'] = $object->getStyles();
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
            if ($object->isInitialized('label') && null !== $object->getLabel()) {
                $data['label'] = $object->getLabel();
            }
            if ($object->isInitialized('defaultValue') && null !== $object->getDefaultValue()) {
                $data['default_value'] = $object->getDefaultValue();
            }
            if ($object->isInitialized('required') && null !== $object->getRequired()) {
                $data['required'] = $object->getRequired();
            }
            if ($object->isInitialized('validationType') && null !== $object->getValidationType()) {
                $data['validation_type'] = $object->getValidationType();
            }
            if ($object->isInitialized('placeholder') && null !== $object->getPlaceholder()) {
                $data['placeholder'] = $object->getPlaceholder();
            }
            if ($object->isInitialized('isMultiline') && null !== $object->getIsMultiline()) {
                $data['is_multiline'] = $object->getIsMultiline();
            }
            if ($object->isInitialized('rows') && null !== $object->getRows()) {
                $data['rows'] = $object->getRows();
            }
            if ($object->isInitialized('inputType') && null !== $object->getInputType()) {
                $data['input_type'] = $object->getInputType();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\InputTextElementCreateElement::class => false];
        }
    }
}

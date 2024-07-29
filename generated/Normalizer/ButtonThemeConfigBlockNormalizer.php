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
    class ButtonThemeConfigBlockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('button_font_family', $data)) {
                $object->setButtonFontFamily($data['button_font_family']);
                unset($data['button_font_family']);
            }
            if (\array_key_exists('button_font_size', $data)) {
                $object->setButtonFontSize($data['button_font_size']);
                unset($data['button_font_size']);
            }
            if (\array_key_exists('button_alignment', $data)) {
                $object->setButtonAlignment($data['button_alignment']);
                unset($data['button_alignment']);
            }
            if (\array_key_exists('button_text_alignment', $data)) {
                $object->setButtonTextAlignment($data['button_text_alignment']);
                unset($data['button_text_alignment']);
            }
            if (\array_key_exists('button_width', $data)) {
                $object->setButtonWidth($data['button_width']);
                unset($data['button_width']);
            }
            if (\array_key_exists('button_background_color', $data)) {
                $object->setButtonBackgroundColor($data['button_background_color']);
                unset($data['button_background_color']);
            }
            if (\array_key_exists('button_text_color', $data)) {
                $object->setButtonTextColor($data['button_text_color']);
                unset($data['button_text_color']);
            }
            if (\array_key_exists('button_border_color', $data)) {
                $object->setButtonBorderColor($data['button_border_color']);
                unset($data['button_border_color']);
            }
            if (\array_key_exists('button_border_size', $data)) {
                $object->setButtonBorderSize($data['button_border_size']);
                unset($data['button_border_size']);
            }
            if (\array_key_exists('button_border_radius', $data)) {
                $object->setButtonBorderRadius($data['button_border_radius']);
                unset($data['button_border_radius']);
            }
            if (\array_key_exists('button_vertical_padding', $data)) {
                $object->setButtonVerticalPadding($data['button_vertical_padding']);
                unset($data['button_vertical_padding']);
            }
            if (\array_key_exists('button_horizontal_padding', $data)) {
                $object->setButtonHorizontalPadding($data['button_horizontal_padding']);
                unset($data['button_horizontal_padding']);
            }
            if (\array_key_exists('button_hover_background_color', $data)) {
                $object->setButtonHoverBackgroundColor($data['button_hover_background_color']);
                unset($data['button_hover_background_color']);
            }
            if (\array_key_exists('button_hover_text_color', $data)) {
                $object->setButtonHoverTextColor($data['button_hover_text_color']);
                unset($data['button_hover_text_color']);
            }
            if (\array_key_exists('button_hover_border_color', $data)) {
                $object->setButtonHoverBorderColor($data['button_hover_border_color']);
                unset($data['button_hover_border_color']);
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
            if ($object->isInitialized('buttonFontFamily') && null !== $object->getButtonFontFamily()) {
                $data['button_font_family'] = $object->getButtonFontFamily();
            }
            if ($object->isInitialized('buttonFontSize') && null !== $object->getButtonFontSize()) {
                $data['button_font_size'] = $object->getButtonFontSize();
            }
            if ($object->isInitialized('buttonAlignment') && null !== $object->getButtonAlignment()) {
                $data['button_alignment'] = $object->getButtonAlignment();
            }
            if ($object->isInitialized('buttonTextAlignment') && null !== $object->getButtonTextAlignment()) {
                $data['button_text_alignment'] = $object->getButtonTextAlignment();
            }
            if ($object->isInitialized('buttonWidth') && null !== $object->getButtonWidth()) {
                $data['button_width'] = $object->getButtonWidth();
            }
            if ($object->isInitialized('buttonBackgroundColor') && null !== $object->getButtonBackgroundColor()) {
                $data['button_background_color'] = $object->getButtonBackgroundColor();
            }
            if ($object->isInitialized('buttonTextColor') && null !== $object->getButtonTextColor()) {
                $data['button_text_color'] = $object->getButtonTextColor();
            }
            if ($object->isInitialized('buttonBorderColor') && null !== $object->getButtonBorderColor()) {
                $data['button_border_color'] = $object->getButtonBorderColor();
            }
            if ($object->isInitialized('buttonBorderSize') && null !== $object->getButtonBorderSize()) {
                $data['button_border_size'] = $object->getButtonBorderSize();
            }
            if ($object->isInitialized('buttonBorderRadius') && null !== $object->getButtonBorderRadius()) {
                $data['button_border_radius'] = $object->getButtonBorderRadius();
            }
            if ($object->isInitialized('buttonVerticalPadding') && null !== $object->getButtonVerticalPadding()) {
                $data['button_vertical_padding'] = $object->getButtonVerticalPadding();
            }
            if ($object->isInitialized('buttonHorizontalPadding') && null !== $object->getButtonHorizontalPadding()) {
                $data['button_horizontal_padding'] = $object->getButtonHorizontalPadding();
            }
            if ($object->isInitialized('buttonHoverBackgroundColor') && null !== $object->getButtonHoverBackgroundColor()) {
                $data['button_hover_background_color'] = $object->getButtonHoverBackgroundColor();
            }
            if ($object->isInitialized('buttonHoverTextColor') && null !== $object->getButtonHoverTextColor()) {
                $data['button_hover_text_color'] = $object->getButtonHoverTextColor();
            }
            if ($object->isInitialized('buttonHoverBorderColor') && null !== $object->getButtonHoverBorderColor()) {
                $data['button_hover_border_color'] = $object->getButtonHoverBorderColor();
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
            return [\CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class => false];
        }
    }
} else {
    class ButtonThemeConfigBlockNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('button_font_family', $data)) {
                $object->setButtonFontFamily($data['button_font_family']);
                unset($data['button_font_family']);
            }
            if (\array_key_exists('button_font_size', $data)) {
                $object->setButtonFontSize($data['button_font_size']);
                unset($data['button_font_size']);
            }
            if (\array_key_exists('button_alignment', $data)) {
                $object->setButtonAlignment($data['button_alignment']);
                unset($data['button_alignment']);
            }
            if (\array_key_exists('button_text_alignment', $data)) {
                $object->setButtonTextAlignment($data['button_text_alignment']);
                unset($data['button_text_alignment']);
            }
            if (\array_key_exists('button_width', $data)) {
                $object->setButtonWidth($data['button_width']);
                unset($data['button_width']);
            }
            if (\array_key_exists('button_background_color', $data)) {
                $object->setButtonBackgroundColor($data['button_background_color']);
                unset($data['button_background_color']);
            }
            if (\array_key_exists('button_text_color', $data)) {
                $object->setButtonTextColor($data['button_text_color']);
                unset($data['button_text_color']);
            }
            if (\array_key_exists('button_border_color', $data)) {
                $object->setButtonBorderColor($data['button_border_color']);
                unset($data['button_border_color']);
            }
            if (\array_key_exists('button_border_size', $data)) {
                $object->setButtonBorderSize($data['button_border_size']);
                unset($data['button_border_size']);
            }
            if (\array_key_exists('button_border_radius', $data)) {
                $object->setButtonBorderRadius($data['button_border_radius']);
                unset($data['button_border_radius']);
            }
            if (\array_key_exists('button_vertical_padding', $data)) {
                $object->setButtonVerticalPadding($data['button_vertical_padding']);
                unset($data['button_vertical_padding']);
            }
            if (\array_key_exists('button_horizontal_padding', $data)) {
                $object->setButtonHorizontalPadding($data['button_horizontal_padding']);
                unset($data['button_horizontal_padding']);
            }
            if (\array_key_exists('button_hover_background_color', $data)) {
                $object->setButtonHoverBackgroundColor($data['button_hover_background_color']);
                unset($data['button_hover_background_color']);
            }
            if (\array_key_exists('button_hover_text_color', $data)) {
                $object->setButtonHoverTextColor($data['button_hover_text_color']);
                unset($data['button_hover_text_color']);
            }
            if (\array_key_exists('button_hover_border_color', $data)) {
                $object->setButtonHoverBorderColor($data['button_hover_border_color']);
                unset($data['button_hover_border_color']);
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
            if ($object->isInitialized('buttonFontFamily') && null !== $object->getButtonFontFamily()) {
                $data['button_font_family'] = $object->getButtonFontFamily();
            }
            if ($object->isInitialized('buttonFontSize') && null !== $object->getButtonFontSize()) {
                $data['button_font_size'] = $object->getButtonFontSize();
            }
            if ($object->isInitialized('buttonAlignment') && null !== $object->getButtonAlignment()) {
                $data['button_alignment'] = $object->getButtonAlignment();
            }
            if ($object->isInitialized('buttonTextAlignment') && null !== $object->getButtonTextAlignment()) {
                $data['button_text_alignment'] = $object->getButtonTextAlignment();
            }
            if ($object->isInitialized('buttonWidth') && null !== $object->getButtonWidth()) {
                $data['button_width'] = $object->getButtonWidth();
            }
            if ($object->isInitialized('buttonBackgroundColor') && null !== $object->getButtonBackgroundColor()) {
                $data['button_background_color'] = $object->getButtonBackgroundColor();
            }
            if ($object->isInitialized('buttonTextColor') && null !== $object->getButtonTextColor()) {
                $data['button_text_color'] = $object->getButtonTextColor();
            }
            if ($object->isInitialized('buttonBorderColor') && null !== $object->getButtonBorderColor()) {
                $data['button_border_color'] = $object->getButtonBorderColor();
            }
            if ($object->isInitialized('buttonBorderSize') && null !== $object->getButtonBorderSize()) {
                $data['button_border_size'] = $object->getButtonBorderSize();
            }
            if ($object->isInitialized('buttonBorderRadius') && null !== $object->getButtonBorderRadius()) {
                $data['button_border_radius'] = $object->getButtonBorderRadius();
            }
            if ($object->isInitialized('buttonVerticalPadding') && null !== $object->getButtonVerticalPadding()) {
                $data['button_vertical_padding'] = $object->getButtonVerticalPadding();
            }
            if ($object->isInitialized('buttonHorizontalPadding') && null !== $object->getButtonHorizontalPadding()) {
                $data['button_horizontal_padding'] = $object->getButtonHorizontalPadding();
            }
            if ($object->isInitialized('buttonHoverBackgroundColor') && null !== $object->getButtonHoverBackgroundColor()) {
                $data['button_hover_background_color'] = $object->getButtonHoverBackgroundColor();
            }
            if ($object->isInitialized('buttonHoverTextColor') && null !== $object->getButtonHoverTextColor()) {
                $data['button_hover_text_color'] = $object->getButtonHoverTextColor();
            }
            if ($object->isInitialized('buttonHoverBorderColor') && null !== $object->getButtonHoverBorderColor()) {
                $data['button_hover_border_color'] = $object->getButtonHoverBorderColor();
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
            return [\CedricZiel\Baserow\Generated\Model\ButtonThemeConfigBlock::class => false];
        }
    }
}

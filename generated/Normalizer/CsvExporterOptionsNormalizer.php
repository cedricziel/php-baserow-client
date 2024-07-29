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
    class CsvExporterOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('view_id', $data) && null !== $data['view_id']) {
                $object->setViewId($data['view_id']);
                unset($data['view_id']);
            } elseif (\array_key_exists('view_id', $data) && null === $data['view_id']) {
                $object->setViewId(null);
            }
            if (\array_key_exists('exporter_type', $data)) {
                $object->setExporterType($data['exporter_type']);
                unset($data['exporter_type']);
            }
            if (\array_key_exists('export_charset', $data)) {
                $object->setExportCharset($data['export_charset']);
                unset($data['export_charset']);
            }
            if (\array_key_exists('csv_column_separator', $data)) {
                $object->setCsvColumnSeparator($data['csv_column_separator']);
                unset($data['csv_column_separator']);
            }
            if (\array_key_exists('csv_include_header', $data)) {
                $object->setCsvIncludeHeader($data['csv_include_header']);
                unset($data['csv_include_header']);
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
            if ($object->isInitialized('viewId') && null !== $object->getViewId()) {
                $data['view_id'] = $object->getViewId();
            }
            $data['exporter_type'] = $object->getExporterType();
            if ($object->isInitialized('exportCharset') && null !== $object->getExportCharset()) {
                $data['export_charset'] = $object->getExportCharset();
            }
            if ($object->isInitialized('csvColumnSeparator') && null !== $object->getCsvColumnSeparator()) {
                $data['csv_column_separator'] = $object->getCsvColumnSeparator();
            }
            if ($object->isInitialized('csvIncludeHeader') && null !== $object->getCsvIncludeHeader()) {
                $data['csv_include_header'] = $object->getCsvIncludeHeader();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class => false];
        }
    }
} else {
    class CsvExporterOptionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('view_id', $data) && null !== $data['view_id']) {
                $object->setViewId($data['view_id']);
                unset($data['view_id']);
            } elseif (\array_key_exists('view_id', $data) && null === $data['view_id']) {
                $object->setViewId(null);
            }
            if (\array_key_exists('exporter_type', $data)) {
                $object->setExporterType($data['exporter_type']);
                unset($data['exporter_type']);
            }
            if (\array_key_exists('export_charset', $data)) {
                $object->setExportCharset($data['export_charset']);
                unset($data['export_charset']);
            }
            if (\array_key_exists('csv_column_separator', $data)) {
                $object->setCsvColumnSeparator($data['csv_column_separator']);
                unset($data['csv_column_separator']);
            }
            if (\array_key_exists('csv_include_header', $data)) {
                $object->setCsvIncludeHeader($data['csv_include_header']);
                unset($data['csv_include_header']);
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
            if ($object->isInitialized('viewId') && null !== $object->getViewId()) {
                $data['view_id'] = $object->getViewId();
            }
            $data['exporter_type'] = $object->getExporterType();
            if ($object->isInitialized('exportCharset') && null !== $object->getExportCharset()) {
                $data['export_charset'] = $object->getExportCharset();
            }
            if ($object->isInitialized('csvColumnSeparator') && null !== $object->getCsvColumnSeparator()) {
                $data['csv_column_separator'] = $object->getCsvColumnSeparator();
            }
            if ($object->isInitialized('csvIncludeHeader') && null !== $object->getCsvIncludeHeader()) {
                $data['csv_include_header'] = $object->getCsvIncludeHeader();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\CsvExporterOptions::class => false];
        }
    }
}

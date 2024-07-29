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
    class AuditLogExportJobJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('progress_percentage', $data)) {
                $object->setProgressPercentage($data['progress_percentage']);
                unset($data['progress_percentage']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('human_readable_error', $data)) {
                $object->setHumanReadableError($data['human_readable_error']);
                unset($data['human_readable_error']);
            }
            if (\array_key_exists('csv_column_separator', $data)) {
                $object->setCsvColumnSeparator($data['csv_column_separator']);
                unset($data['csv_column_separator']);
            }
            if (\array_key_exists('csv_first_row_header', $data)) {
                $object->setCsvFirstRowHeader($data['csv_first_row_header']);
                unset($data['csv_first_row_header']);
            }
            if (\array_key_exists('export_charset', $data)) {
                $object->setExportCharset($data['export_charset']);
                unset($data['export_charset']);
            }
            if (\array_key_exists('filter_user_id', $data)) {
                $object->setFilterUserId($data['filter_user_id']);
                unset($data['filter_user_id']);
            }
            if (\array_key_exists('filter_workspace_id', $data)) {
                $object->setFilterWorkspaceId($data['filter_workspace_id']);
                unset($data['filter_workspace_id']);
            }
            if (\array_key_exists('filter_action_type', $data)) {
                $object->setFilterActionType($data['filter_action_type']);
                unset($data['filter_action_type']);
            }
            if (\array_key_exists('filter_from_timestamp', $data)) {
                $object->setFilterFromTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['filter_from_timestamp']));
                unset($data['filter_from_timestamp']);
            }
            if (\array_key_exists('filter_to_timestamp', $data)) {
                $object->setFilterToTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['filter_to_timestamp']));
                unset($data['filter_to_timestamp']);
            }
            if (\array_key_exists('exclude_columns', $data)) {
                $object->setExcludeColumns($data['exclude_columns']);
                unset($data['exclude_columns']);
            }
            if (\array_key_exists('created_on', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_on']));
                unset($data['created_on']);
            }
            if (\array_key_exists('exported_file_name', $data)) {
                $object->setExportedFileName($data['exported_file_name']);
                unset($data['exported_file_name']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
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
            $data['progress_percentage'] = $object->getProgressPercentage();
            $data['state'] = $object->getState();
            if ($object->isInitialized('humanReadableError') && null !== $object->getHumanReadableError()) {
                $data['human_readable_error'] = $object->getHumanReadableError();
            }
            if ($object->isInitialized('csvColumnSeparator') && null !== $object->getCsvColumnSeparator()) {
                $data['csv_column_separator'] = $object->getCsvColumnSeparator();
            }
            if ($object->isInitialized('csvFirstRowHeader') && null !== $object->getCsvFirstRowHeader()) {
                $data['csv_first_row_header'] = $object->getCsvFirstRowHeader();
            }
            if ($object->isInitialized('exportCharset') && null !== $object->getExportCharset()) {
                $data['export_charset'] = $object->getExportCharset();
            }
            if ($object->isInitialized('filterUserId') && null !== $object->getFilterUserId()) {
                $data['filter_user_id'] = $object->getFilterUserId();
            }
            if ($object->isInitialized('filterWorkspaceId') && null !== $object->getFilterWorkspaceId()) {
                $data['filter_workspace_id'] = $object->getFilterWorkspaceId();
            }
            if ($object->isInitialized('filterActionType') && null !== $object->getFilterActionType()) {
                $data['filter_action_type'] = $object->getFilterActionType();
            }
            if ($object->isInitialized('filterFromTimestamp') && null !== $object->getFilterFromTimestamp()) {
                $data['filter_from_timestamp'] = $object->getFilterFromTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('filterToTimestamp') && null !== $object->getFilterToTimestamp()) {
                $data['filter_to_timestamp'] = $object->getFilterToTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('excludeColumns') && null !== $object->getExcludeColumns()) {
                $data['exclude_columns'] = $object->getExcludeColumns();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class => false];
        }
    }
} else {
    class AuditLogExportJobJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('type', $data)) {
                $object->setType($data['type']);
                unset($data['type']);
            }
            if (\array_key_exists('progress_percentage', $data)) {
                $object->setProgressPercentage($data['progress_percentage']);
                unset($data['progress_percentage']);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
                unset($data['state']);
            }
            if (\array_key_exists('human_readable_error', $data)) {
                $object->setHumanReadableError($data['human_readable_error']);
                unset($data['human_readable_error']);
            }
            if (\array_key_exists('csv_column_separator', $data)) {
                $object->setCsvColumnSeparator($data['csv_column_separator']);
                unset($data['csv_column_separator']);
            }
            if (\array_key_exists('csv_first_row_header', $data)) {
                $object->setCsvFirstRowHeader($data['csv_first_row_header']);
                unset($data['csv_first_row_header']);
            }
            if (\array_key_exists('export_charset', $data)) {
                $object->setExportCharset($data['export_charset']);
                unset($data['export_charset']);
            }
            if (\array_key_exists('filter_user_id', $data)) {
                $object->setFilterUserId($data['filter_user_id']);
                unset($data['filter_user_id']);
            }
            if (\array_key_exists('filter_workspace_id', $data)) {
                $object->setFilterWorkspaceId($data['filter_workspace_id']);
                unset($data['filter_workspace_id']);
            }
            if (\array_key_exists('filter_action_type', $data)) {
                $object->setFilterActionType($data['filter_action_type']);
                unset($data['filter_action_type']);
            }
            if (\array_key_exists('filter_from_timestamp', $data)) {
                $object->setFilterFromTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['filter_from_timestamp']));
                unset($data['filter_from_timestamp']);
            }
            if (\array_key_exists('filter_to_timestamp', $data)) {
                $object->setFilterToTimestamp(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['filter_to_timestamp']));
                unset($data['filter_to_timestamp']);
            }
            if (\array_key_exists('exclude_columns', $data)) {
                $object->setExcludeColumns($data['exclude_columns']);
                unset($data['exclude_columns']);
            }
            if (\array_key_exists('created_on', $data)) {
                $object->setCreatedOn(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['created_on']));
                unset($data['created_on']);
            }
            if (\array_key_exists('exported_file_name', $data)) {
                $object->setExportedFileName($data['exported_file_name']);
                unset($data['exported_file_name']);
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
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
            $data['progress_percentage'] = $object->getProgressPercentage();
            $data['state'] = $object->getState();
            if ($object->isInitialized('humanReadableError') && null !== $object->getHumanReadableError()) {
                $data['human_readable_error'] = $object->getHumanReadableError();
            }
            if ($object->isInitialized('csvColumnSeparator') && null !== $object->getCsvColumnSeparator()) {
                $data['csv_column_separator'] = $object->getCsvColumnSeparator();
            }
            if ($object->isInitialized('csvFirstRowHeader') && null !== $object->getCsvFirstRowHeader()) {
                $data['csv_first_row_header'] = $object->getCsvFirstRowHeader();
            }
            if ($object->isInitialized('exportCharset') && null !== $object->getExportCharset()) {
                $data['export_charset'] = $object->getExportCharset();
            }
            if ($object->isInitialized('filterUserId') && null !== $object->getFilterUserId()) {
                $data['filter_user_id'] = $object->getFilterUserId();
            }
            if ($object->isInitialized('filterWorkspaceId') && null !== $object->getFilterWorkspaceId()) {
                $data['filter_workspace_id'] = $object->getFilterWorkspaceId();
            }
            if ($object->isInitialized('filterActionType') && null !== $object->getFilterActionType()) {
                $data['filter_action_type'] = $object->getFilterActionType();
            }
            if ($object->isInitialized('filterFromTimestamp') && null !== $object->getFilterFromTimestamp()) {
                $data['filter_from_timestamp'] = $object->getFilterFromTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('filterToTimestamp') && null !== $object->getFilterToTimestamp()) {
                $data['filter_to_timestamp'] = $object->getFilterToTimestamp()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('excludeColumns') && null !== $object->getExcludeColumns()) {
                $data['exclude_columns'] = $object->getExcludeColumns();
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
            return [\cedricziel\phpbaserowclient\Generated\Model\AuditLogExportJobJob::class => false];
        }
    }
}

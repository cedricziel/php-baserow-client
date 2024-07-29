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
    class InstallTemplateJobJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob();
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
            if (\array_key_exists('workspace', $data)) {
                $object->setWorkspace($this->denormalizer->denormalize($data['workspace'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobWorkspace::class, 'json', $context));
                unset($data['workspace']);
            }
            if (\array_key_exists('template', $data)) {
                $object->setTemplate($this->denormalizer->denormalize($data['template'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobTemplate::class, 'json', $context));
                unset($data['template']);
            }
            if (\array_key_exists('installed_applications', $data)) {
                $object->setInstalledApplications($data['installed_applications']);
                unset($data['installed_applications']);
            }
            if (\array_key_exists('group', $data)) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobGroup::class, 'json', $context));
                unset($data['group']);
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
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class => false];
        }
    }
} else {
    class InstallTemplateJobJobNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob();
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
            if (\array_key_exists('workspace', $data)) {
                $object->setWorkspace($this->denormalizer->denormalize($data['workspace'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobWorkspace::class, 'json', $context));
                unset($data['workspace']);
            }
            if (\array_key_exists('template', $data)) {
                $object->setTemplate($this->denormalizer->denormalize($data['template'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobTemplate::class, 'json', $context));
                unset($data['template']);
            }
            if (\array_key_exists('installed_applications', $data)) {
                $object->setInstalledApplications($data['installed_applications']);
                unset($data['installed_applications']);
            }
            if (\array_key_exists('group', $data)) {
                $object->setGroup($this->denormalizer->denormalize($data['group'], \CedricZiel\Baserow\Generated\Model\InstallTemplateJobJobGroup::class, 'json', $context));
                unset($data['group']);
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
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\InstallTemplateJobJob::class => false];
        }
    }
}

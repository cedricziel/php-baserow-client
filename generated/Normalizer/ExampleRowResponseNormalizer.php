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
    class ExampleRowResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\ExampleRowResponse();
            if (\array_key_exists('field_13', $data) && \is_int($data['field_13'])) {
                $data['field_13'] = (float) $data['field_13'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('field_1', $data) && null !== $data['field_1']) {
                $object->setField1($data['field_1']);
                unset($data['field_1']);
            } elseif (\array_key_exists('field_1', $data) && null === $data['field_1']) {
                $object->setField1(null);
            }
            if (\array_key_exists('field_2', $data) && null !== $data['field_2']) {
                $object->setField2($data['field_2']);
                unset($data['field_2']);
            } elseif (\array_key_exists('field_2', $data) && null === $data['field_2']) {
                $object->setField2(null);
            }
            if (\array_key_exists('field_3', $data) && null !== $data['field_3']) {
                $object->setField3($data['field_3']);
                unset($data['field_3']);
            } elseif (\array_key_exists('field_3', $data) && null === $data['field_3']) {
                $object->setField3(null);
            }
            if (\array_key_exists('field_4', $data) && null !== $data['field_4']) {
                $object->setField4($data['field_4']);
                unset($data['field_4']);
            } elseif (\array_key_exists('field_4', $data) && null === $data['field_4']) {
                $object->setField4(null);
            }
            if (\array_key_exists('field_5', $data) && null !== $data['field_5']) {
                $object->setField5($data['field_5']);
                unset($data['field_5']);
            } elseif (\array_key_exists('field_5', $data) && null === $data['field_5']) {
                $object->setField5(null);
            }
            if (\array_key_exists('field_6', $data)) {
                $object->setField6($data['field_6']);
                unset($data['field_6']);
            }
            if (\array_key_exists('field_7', $data)) {
                $object->setField7($data['field_7']);
                unset($data['field_7']);
            }
            if (\array_key_exists('field_8', $data) && null !== $data['field_8']) {
                $object->setField8(\DateTime::createFromFormat('Y-m-d', $data['field_8'])->setTime(0, 0, 0));
                unset($data['field_8']);
            } elseif (\array_key_exists('field_8', $data) && null === $data['field_8']) {
                $object->setField8(null);
            }
            if (\array_key_exists('field_9', $data)) {
                $object->setField9(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['field_9']));
                unset($data['field_9']);
            }
            if (\array_key_exists('field_10', $data)) {
                $object->setField10($this->denormalizer->denormalize($data['field_10'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField10::class, 'json', $context));
                unset($data['field_10']);
            }
            if (\array_key_exists('field_11', $data)) {
                $object->setField11(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['field_11']));
                unset($data['field_11']);
            }
            if (\array_key_exists('field_12', $data)) {
                $object->setField12($this->denormalizer->denormalize($data['field_12'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField12::class, 'json', $context));
                unset($data['field_12']);
            }
            if (\array_key_exists('field_13', $data) && null !== $data['field_13']) {
                $object->setField13($data['field_13']);
                unset($data['field_13']);
            } elseif (\array_key_exists('field_13', $data) && null === $data['field_13']) {
                $object->setField13(null);
            }
            if (\array_key_exists('field_14', $data)) {
                $values = [];
                foreach ($data['field_14'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\LinkRowValue::class, 'json', $context);
                }
                $object->setField14($values);
                unset($data['field_14']);
            }
            if (\array_key_exists('field_15', $data)) {
                $values_1 = [];
                foreach ($data['field_15'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\Baserow\Generated\Model\FileFieldResponse::class, 'json', $context);
                }
                $object->setField15($values_1);
                unset($data['field_15']);
            }
            if (\array_key_exists('field_16', $data) && null !== $data['field_16']) {
                $object->setField16($this->denormalizer->denormalize($data['field_16'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField16::class, 'json', $context));
                unset($data['field_16']);
            } elseif (\array_key_exists('field_16', $data) && null === $data['field_16']) {
                $object->setField16(null);
            }
            if (\array_key_exists('field_17', $data) && null !== $data['field_17']) {
                $values_2 = [];
                foreach ($data['field_17'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \CedricZiel\Baserow\Generated\Model\SelectOption::class, 'json', $context);
                }
                $object->setField17($values_2);
                unset($data['field_17']);
            } elseif (\array_key_exists('field_17', $data) && null === $data['field_17']) {
                $object->setField17(null);
            }
            if (\array_key_exists('field_18', $data) && null !== $data['field_18']) {
                $object->setField18($data['field_18']);
                unset($data['field_18']);
            } elseif (\array_key_exists('field_18', $data) && null === $data['field_18']) {
                $object->setField18(null);
            }
            if (\array_key_exists('field_19', $data) && null !== $data['field_19']) {
                $object->setField19($data['field_19']);
                unset($data['field_19']);
            } elseif (\array_key_exists('field_19', $data) && null === $data['field_19']) {
                $object->setField19(null);
            }
            if (\array_key_exists('field_20', $data) && null !== $data['field_20']) {
                $object->setField20($data['field_20']);
                unset($data['field_20']);
            } elseif (\array_key_exists('field_20', $data) && null === $data['field_20']) {
                $object->setField20(null);
            }
            if (\array_key_exists('field_21', $data) && null !== $data['field_21']) {
                $object->setField21($data['field_21']);
                unset($data['field_21']);
            } elseif (\array_key_exists('field_21', $data) && null === $data['field_21']) {
                $object->setField21(null);
            }
            if (\array_key_exists('field_22', $data) && null !== $data['field_22']) {
                $object->setField22($data['field_22']);
                unset($data['field_22']);
            } elseif (\array_key_exists('field_22', $data) && null === $data['field_22']) {
                $object->setField22(null);
            }
            if (\array_key_exists('field_23', $data)) {
                $values_3 = [];
                foreach ($data['field_23'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \CedricZiel\Baserow\Generated\Model\Collaborator::class, 'json', $context);
                }
                $object->setField23($values_3);
                unset($data['field_23']);
            }
            if (\array_key_exists('field_24', $data)) {
                $object->setField24($data['field_24']);
                unset($data['field_24']);
            }
            if (\array_key_exists('field_25', $data)) {
                $object->setField25($data['field_25']);
                unset($data['field_25']);
            }
            if (\array_key_exists('field_26', $data)) {
                $object->setField26($data['field_26']);
                unset($data['field_26']);
            }
            if (\array_key_exists('field_27', $data) && null !== $data['field_27']) {
                $object->setField27($data['field_27']);
                unset($data['field_27']);
            } elseif (\array_key_exists('field_27', $data) && null === $data['field_27']) {
                $object->setField27(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
            }
            if ($object->isInitialized('field1') && null !== $object->getField1()) {
                $data['field_1'] = $object->getField1();
            }
            if ($object->isInitialized('field2') && null !== $object->getField2()) {
                $data['field_2'] = $object->getField2();
            }
            if ($object->isInitialized('field3') && null !== $object->getField3()) {
                $data['field_3'] = $object->getField3();
            }
            if ($object->isInitialized('field4') && null !== $object->getField4()) {
                $data['field_4'] = $object->getField4();
            }
            if ($object->isInitialized('field5') && null !== $object->getField5()) {
                $data['field_5'] = $object->getField5();
            }
            if ($object->isInitialized('field6') && null !== $object->getField6()) {
                $data['field_6'] = $object->getField6();
            }
            if ($object->isInitialized('field7') && null !== $object->getField7()) {
                $data['field_7'] = $object->getField7();
            }
            if ($object->isInitialized('field8') && null !== $object->getField8()) {
                $data['field_8'] = $object->getField8()->format('Y-m-d');
            }
            if ($object->isInitialized('field9') && null !== $object->getField9()) {
                $data['field_9'] = $object->getField9()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('field10') && null !== $object->getField10()) {
                $data['field_10'] = $this->normalizer->normalize($object->getField10(), 'json', $context);
            }
            if ($object->isInitialized('field11') && null !== $object->getField11()) {
                $data['field_11'] = $object->getField11()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('field12') && null !== $object->getField12()) {
                $data['field_12'] = $this->normalizer->normalize($object->getField12(), 'json', $context);
            }
            if ($object->isInitialized('field13') && null !== $object->getField13()) {
                $data['field_13'] = $object->getField13();
            }
            if ($object->isInitialized('field14') && null !== $object->getField14()) {
                $values = [];
                foreach ($object->getField14() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['field_14'] = $values;
            }
            if ($object->isInitialized('field15') && null !== $object->getField15()) {
                $values_1 = [];
                foreach ($object->getField15() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['field_15'] = $values_1;
            }
            if ($object->isInitialized('field16') && null !== $object->getField16()) {
                $data['field_16'] = $this->normalizer->normalize($object->getField16(), 'json', $context);
            }
            if ($object->isInitialized('field17') && null !== $object->getField17()) {
                $values_2 = [];
                foreach ($object->getField17() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['field_17'] = $values_2;
            }
            if ($object->isInitialized('field18') && null !== $object->getField18()) {
                $data['field_18'] = $object->getField18();
            }
            if ($object->isInitialized('field19') && null !== $object->getField19()) {
                $data['field_19'] = $object->getField19();
            }
            if ($object->isInitialized('field20') && null !== $object->getField20()) {
                $data['field_20'] = $object->getField20();
            }
            if ($object->isInitialized('field21') && null !== $object->getField21()) {
                $data['field_21'] = $object->getField21();
            }
            if ($object->isInitialized('field22') && null !== $object->getField22()) {
                $data['field_22'] = $object->getField22();
            }
            if ($object->isInitialized('field23') && null !== $object->getField23()) {
                $values_3 = [];
                foreach ($object->getField23() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['field_23'] = $values_3;
            }
            if ($object->isInitialized('field24') && null !== $object->getField24()) {
                $data['field_24'] = $object->getField24();
            }
            if ($object->isInitialized('field25') && null !== $object->getField25()) {
                $data['field_25'] = $object->getField25();
            }
            if ($object->isInitialized('field26') && null !== $object->getField26()) {
                $data['field_26'] = $object->getField26();
            }
            if ($object->isInitialized('field27') && null !== $object->getField27()) {
                $data['field_27'] = $object->getField27();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class => false];
        }
    }
} else {
    class ExampleRowResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\ExampleRowResponse();
            if (\array_key_exists('field_13', $data) && \is_int($data['field_13'])) {
                $data['field_13'] = (float) $data['field_13'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('order', $data)) {
                $object->setOrder($data['order']);
                unset($data['order']);
            }
            if (\array_key_exists('field_1', $data) && null !== $data['field_1']) {
                $object->setField1($data['field_1']);
                unset($data['field_1']);
            } elseif (\array_key_exists('field_1', $data) && null === $data['field_1']) {
                $object->setField1(null);
            }
            if (\array_key_exists('field_2', $data) && null !== $data['field_2']) {
                $object->setField2($data['field_2']);
                unset($data['field_2']);
            } elseif (\array_key_exists('field_2', $data) && null === $data['field_2']) {
                $object->setField2(null);
            }
            if (\array_key_exists('field_3', $data) && null !== $data['field_3']) {
                $object->setField3($data['field_3']);
                unset($data['field_3']);
            } elseif (\array_key_exists('field_3', $data) && null === $data['field_3']) {
                $object->setField3(null);
            }
            if (\array_key_exists('field_4', $data) && null !== $data['field_4']) {
                $object->setField4($data['field_4']);
                unset($data['field_4']);
            } elseif (\array_key_exists('field_4', $data) && null === $data['field_4']) {
                $object->setField4(null);
            }
            if (\array_key_exists('field_5', $data) && null !== $data['field_5']) {
                $object->setField5($data['field_5']);
                unset($data['field_5']);
            } elseif (\array_key_exists('field_5', $data) && null === $data['field_5']) {
                $object->setField5(null);
            }
            if (\array_key_exists('field_6', $data)) {
                $object->setField6($data['field_6']);
                unset($data['field_6']);
            }
            if (\array_key_exists('field_7', $data)) {
                $object->setField7($data['field_7']);
                unset($data['field_7']);
            }
            if (\array_key_exists('field_8', $data) && null !== $data['field_8']) {
                $object->setField8(\DateTime::createFromFormat('Y-m-d', $data['field_8'])->setTime(0, 0, 0));
                unset($data['field_8']);
            } elseif (\array_key_exists('field_8', $data) && null === $data['field_8']) {
                $object->setField8(null);
            }
            if (\array_key_exists('field_9', $data)) {
                $object->setField9(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['field_9']));
                unset($data['field_9']);
            }
            if (\array_key_exists('field_10', $data)) {
                $object->setField10($this->denormalizer->denormalize($data['field_10'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField10::class, 'json', $context));
                unset($data['field_10']);
            }
            if (\array_key_exists('field_11', $data)) {
                $object->setField11(\DateTime::createFromFormat('Y-m-d\TH:i:sP', $data['field_11']));
                unset($data['field_11']);
            }
            if (\array_key_exists('field_12', $data)) {
                $object->setField12($this->denormalizer->denormalize($data['field_12'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField12::class, 'json', $context));
                unset($data['field_12']);
            }
            if (\array_key_exists('field_13', $data) && null !== $data['field_13']) {
                $object->setField13($data['field_13']);
                unset($data['field_13']);
            } elseif (\array_key_exists('field_13', $data) && null === $data['field_13']) {
                $object->setField13(null);
            }
            if (\array_key_exists('field_14', $data)) {
                $values = [];
                foreach ($data['field_14'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CedricZiel\Baserow\Generated\Model\LinkRowValue::class, 'json', $context);
                }
                $object->setField14($values);
                unset($data['field_14']);
            }
            if (\array_key_exists('field_15', $data)) {
                $values_1 = [];
                foreach ($data['field_15'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CedricZiel\Baserow\Generated\Model\FileFieldResponse::class, 'json', $context);
                }
                $object->setField15($values_1);
                unset($data['field_15']);
            }
            if (\array_key_exists('field_16', $data) && null !== $data['field_16']) {
                $object->setField16($this->denormalizer->denormalize($data['field_16'], \CedricZiel\Baserow\Generated\Model\ExampleRowResponseField16::class, 'json', $context));
                unset($data['field_16']);
            } elseif (\array_key_exists('field_16', $data) && null === $data['field_16']) {
                $object->setField16(null);
            }
            if (\array_key_exists('field_17', $data) && null !== $data['field_17']) {
                $values_2 = [];
                foreach ($data['field_17'] as $value_2) {
                    $values_2[] = $this->denormalizer->denormalize($value_2, \CedricZiel\Baserow\Generated\Model\SelectOption::class, 'json', $context);
                }
                $object->setField17($values_2);
                unset($data['field_17']);
            } elseif (\array_key_exists('field_17', $data) && null === $data['field_17']) {
                $object->setField17(null);
            }
            if (\array_key_exists('field_18', $data) && null !== $data['field_18']) {
                $object->setField18($data['field_18']);
                unset($data['field_18']);
            } elseif (\array_key_exists('field_18', $data) && null === $data['field_18']) {
                $object->setField18(null);
            }
            if (\array_key_exists('field_19', $data) && null !== $data['field_19']) {
                $object->setField19($data['field_19']);
                unset($data['field_19']);
            } elseif (\array_key_exists('field_19', $data) && null === $data['field_19']) {
                $object->setField19(null);
            }
            if (\array_key_exists('field_20', $data) && null !== $data['field_20']) {
                $object->setField20($data['field_20']);
                unset($data['field_20']);
            } elseif (\array_key_exists('field_20', $data) && null === $data['field_20']) {
                $object->setField20(null);
            }
            if (\array_key_exists('field_21', $data) && null !== $data['field_21']) {
                $object->setField21($data['field_21']);
                unset($data['field_21']);
            } elseif (\array_key_exists('field_21', $data) && null === $data['field_21']) {
                $object->setField21(null);
            }
            if (\array_key_exists('field_22', $data) && null !== $data['field_22']) {
                $object->setField22($data['field_22']);
                unset($data['field_22']);
            } elseif (\array_key_exists('field_22', $data) && null === $data['field_22']) {
                $object->setField22(null);
            }
            if (\array_key_exists('field_23', $data)) {
                $values_3 = [];
                foreach ($data['field_23'] as $value_3) {
                    $values_3[] = $this->denormalizer->denormalize($value_3, \CedricZiel\Baserow\Generated\Model\Collaborator::class, 'json', $context);
                }
                $object->setField23($values_3);
                unset($data['field_23']);
            }
            if (\array_key_exists('field_24', $data)) {
                $object->setField24($data['field_24']);
                unset($data['field_24']);
            }
            if (\array_key_exists('field_25', $data)) {
                $object->setField25($data['field_25']);
                unset($data['field_25']);
            }
            if (\array_key_exists('field_26', $data)) {
                $object->setField26($data['field_26']);
                unset($data['field_26']);
            }
            if (\array_key_exists('field_27', $data) && null !== $data['field_27']) {
                $object->setField27($data['field_27']);
                unset($data['field_27']);
            } elseif (\array_key_exists('field_27', $data) && null === $data['field_27']) {
                $object->setField27(null);
            }
            foreach ($data as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_4;
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
            $data['id'] = $object->getId();
            if ($object->isInitialized('order') && null !== $object->getOrder()) {
                $data['order'] = $object->getOrder();
            }
            if ($object->isInitialized('field1') && null !== $object->getField1()) {
                $data['field_1'] = $object->getField1();
            }
            if ($object->isInitialized('field2') && null !== $object->getField2()) {
                $data['field_2'] = $object->getField2();
            }
            if ($object->isInitialized('field3') && null !== $object->getField3()) {
                $data['field_3'] = $object->getField3();
            }
            if ($object->isInitialized('field4') && null !== $object->getField4()) {
                $data['field_4'] = $object->getField4();
            }
            if ($object->isInitialized('field5') && null !== $object->getField5()) {
                $data['field_5'] = $object->getField5();
            }
            if ($object->isInitialized('field6') && null !== $object->getField6()) {
                $data['field_6'] = $object->getField6();
            }
            if ($object->isInitialized('field7') && null !== $object->getField7()) {
                $data['field_7'] = $object->getField7();
            }
            if ($object->isInitialized('field8') && null !== $object->getField8()) {
                $data['field_8'] = $object->getField8()->format('Y-m-d');
            }
            if ($object->isInitialized('field9') && null !== $object->getField9()) {
                $data['field_9'] = $object->getField9()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('field10') && null !== $object->getField10()) {
                $data['field_10'] = $this->normalizer->normalize($object->getField10(), 'json', $context);
            }
            if ($object->isInitialized('field11') && null !== $object->getField11()) {
                $data['field_11'] = $object->getField11()?->format('Y-m-d\TH:i:sP');
            }
            if ($object->isInitialized('field12') && null !== $object->getField12()) {
                $data['field_12'] = $this->normalizer->normalize($object->getField12(), 'json', $context);
            }
            if ($object->isInitialized('field13') && null !== $object->getField13()) {
                $data['field_13'] = $object->getField13();
            }
            if ($object->isInitialized('field14') && null !== $object->getField14()) {
                $values = [];
                foreach ($object->getField14() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['field_14'] = $values;
            }
            if ($object->isInitialized('field15') && null !== $object->getField15()) {
                $values_1 = [];
                foreach ($object->getField15() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['field_15'] = $values_1;
            }
            if ($object->isInitialized('field16') && null !== $object->getField16()) {
                $data['field_16'] = $this->normalizer->normalize($object->getField16(), 'json', $context);
            }
            if ($object->isInitialized('field17') && null !== $object->getField17()) {
                $values_2 = [];
                foreach ($object->getField17() as $value_2) {
                    $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
                }
                $data['field_17'] = $values_2;
            }
            if ($object->isInitialized('field18') && null !== $object->getField18()) {
                $data['field_18'] = $object->getField18();
            }
            if ($object->isInitialized('field19') && null !== $object->getField19()) {
                $data['field_19'] = $object->getField19();
            }
            if ($object->isInitialized('field20') && null !== $object->getField20()) {
                $data['field_20'] = $object->getField20();
            }
            if ($object->isInitialized('field21') && null !== $object->getField21()) {
                $data['field_21'] = $object->getField21();
            }
            if ($object->isInitialized('field22') && null !== $object->getField22()) {
                $data['field_22'] = $object->getField22();
            }
            if ($object->isInitialized('field23') && null !== $object->getField23()) {
                $values_3 = [];
                foreach ($object->getField23() as $value_3) {
                    $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
                }
                $data['field_23'] = $values_3;
            }
            if ($object->isInitialized('field24') && null !== $object->getField24()) {
                $data['field_24'] = $object->getField24();
            }
            if ($object->isInitialized('field25') && null !== $object->getField25()) {
                $data['field_25'] = $object->getField25();
            }
            if ($object->isInitialized('field26') && null !== $object->getField26()) {
                $data['field_26'] = $object->getField26();
            }
            if ($object->isInitialized('field27') && null !== $object->getField27()) {
                $data['field_27'] = $object->getField27();
            }
            foreach ($object as $key => $value_4) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_4;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\CedricZiel\Baserow\Generated\Model\ExampleRowResponse::class => false];
        }
    }
}

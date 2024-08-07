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
    class SettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\Settings::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\Settings::class === get_class($data);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\Settings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow_new_signups', $data)) {
                $object->setAllowNewSignups($data['allow_new_signups']);
                unset($data['allow_new_signups']);
            }
            if (\array_key_exists('allow_signups_via_workspace_invitations', $data)) {
                $object->setAllowSignupsViaWorkspaceInvitations($data['allow_signups_via_workspace_invitations']);
                unset($data['allow_signups_via_workspace_invitations']);
            }
            if (\array_key_exists('allow_signups_via_group_invitations', $data)) {
                $object->setAllowSignupsViaGroupInvitations($data['allow_signups_via_group_invitations']);
                unset($data['allow_signups_via_group_invitations']);
            }
            if (\array_key_exists('allow_reset_password', $data)) {
                $object->setAllowResetPassword($data['allow_reset_password']);
                unset($data['allow_reset_password']);
            }
            if (\array_key_exists('allow_global_workspace_creation', $data)) {
                $object->setAllowGlobalWorkspaceCreation($data['allow_global_workspace_creation']);
                unset($data['allow_global_workspace_creation']);
            }
            if (\array_key_exists('allow_global_group_creation', $data)) {
                $object->setAllowGlobalGroupCreation($data['allow_global_group_creation']);
                unset($data['allow_global_group_creation']);
            }
            if (\array_key_exists('account_deletion_grace_delay', $data)) {
                $object->setAccountDeletionGraceDelay($data['account_deletion_grace_delay']);
                unset($data['account_deletion_grace_delay']);
            }
            if (\array_key_exists('show_admin_signup_page', $data)) {
                $object->setShowAdminSignupPage($data['show_admin_signup_page']);
                unset($data['show_admin_signup_page']);
            }
            if (\array_key_exists('track_workspace_usage', $data)) {
                $object->setTrackWorkspaceUsage($data['track_workspace_usage']);
                unset($data['track_workspace_usage']);
            }
            if (\array_key_exists('show_baserow_help_request', $data)) {
                $object->setShowBaserowHelpRequest($data['show_baserow_help_request']);
                unset($data['show_baserow_help_request']);
            }
            if (\array_key_exists('co_branding_logo', $data) && null !== $data['co_branding_logo']) {
                $object->setCoBrandingLogo($this->denormalizer->denormalize($data['co_branding_logo'], \CedricZiel\Baserow\Generated\Model\SettingsCoBrandingLogo::class, 'json', $context));
                unset($data['co_branding_logo']);
            } elseif (\array_key_exists('co_branding_logo', $data) && null === $data['co_branding_logo']) {
                $object->setCoBrandingLogo(null);
            }
            if (\array_key_exists('email_verification', $data) && null !== $data['email_verification']) {
                $object->setEmailVerification($data['email_verification']);
                unset($data['email_verification']);
            } elseif (\array_key_exists('email_verification', $data) && null === $data['email_verification']) {
                $object->setEmailVerification(null);
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
            if ($object->isInitialized('allowNewSignups') && null !== $object->getAllowNewSignups()) {
                $data['allow_new_signups'] = $object->getAllowNewSignups();
            }
            if ($object->isInitialized('allowSignupsViaWorkspaceInvitations') && null !== $object->getAllowSignupsViaWorkspaceInvitations()) {
                $data['allow_signups_via_workspace_invitations'] = $object->getAllowSignupsViaWorkspaceInvitations();
            }
            if ($object->isInitialized('allowSignupsViaGroupInvitations') && null !== $object->getAllowSignupsViaGroupInvitations()) {
                $data['allow_signups_via_group_invitations'] = $object->getAllowSignupsViaGroupInvitations();
            }
            if ($object->isInitialized('allowResetPassword') && null !== $object->getAllowResetPassword()) {
                $data['allow_reset_password'] = $object->getAllowResetPassword();
            }
            if ($object->isInitialized('allowGlobalWorkspaceCreation') && null !== $object->getAllowGlobalWorkspaceCreation()) {
                $data['allow_global_workspace_creation'] = $object->getAllowGlobalWorkspaceCreation();
            }
            if ($object->isInitialized('allowGlobalGroupCreation') && null !== $object->getAllowGlobalGroupCreation()) {
                $data['allow_global_group_creation'] = $object->getAllowGlobalGroupCreation();
            }
            if ($object->isInitialized('accountDeletionGraceDelay') && null !== $object->getAccountDeletionGraceDelay()) {
                $data['account_deletion_grace_delay'] = $object->getAccountDeletionGraceDelay();
            }
            if ($object->isInitialized('showAdminSignupPage') && null !== $object->getShowAdminSignupPage()) {
                $data['show_admin_signup_page'] = $object->getShowAdminSignupPage();
            }
            if ($object->isInitialized('trackWorkspaceUsage') && null !== $object->getTrackWorkspaceUsage()) {
                $data['track_workspace_usage'] = $object->getTrackWorkspaceUsage();
            }
            if ($object->isInitialized('showBaserowHelpRequest') && null !== $object->getShowBaserowHelpRequest()) {
                $data['show_baserow_help_request'] = $object->getShowBaserowHelpRequest();
            }
            if ($object->isInitialized('coBrandingLogo') && null !== $object->getCoBrandingLogo()) {
                $data['co_branding_logo'] = $this->normalizer->normalize($object->getCoBrandingLogo(), 'json', $context);
            }
            if ($object->isInitialized('emailVerification') && null !== $object->getEmailVerification()) {
                $data['email_verification'] = $object->getEmailVerification();
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
            return [\CedricZiel\Baserow\Generated\Model\Settings::class => false];
        }
    }
} else {
    class SettingsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return \CedricZiel\Baserow\Generated\Model\Settings::class === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && \CedricZiel\Baserow\Generated\Model\Settings::class === get_class($data);
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CedricZiel\Baserow\Generated\Model\Settings();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allow_new_signups', $data)) {
                $object->setAllowNewSignups($data['allow_new_signups']);
                unset($data['allow_new_signups']);
            }
            if (\array_key_exists('allow_signups_via_workspace_invitations', $data)) {
                $object->setAllowSignupsViaWorkspaceInvitations($data['allow_signups_via_workspace_invitations']);
                unset($data['allow_signups_via_workspace_invitations']);
            }
            if (\array_key_exists('allow_signups_via_group_invitations', $data)) {
                $object->setAllowSignupsViaGroupInvitations($data['allow_signups_via_group_invitations']);
                unset($data['allow_signups_via_group_invitations']);
            }
            if (\array_key_exists('allow_reset_password', $data)) {
                $object->setAllowResetPassword($data['allow_reset_password']);
                unset($data['allow_reset_password']);
            }
            if (\array_key_exists('allow_global_workspace_creation', $data)) {
                $object->setAllowGlobalWorkspaceCreation($data['allow_global_workspace_creation']);
                unset($data['allow_global_workspace_creation']);
            }
            if (\array_key_exists('allow_global_group_creation', $data)) {
                $object->setAllowGlobalGroupCreation($data['allow_global_group_creation']);
                unset($data['allow_global_group_creation']);
            }
            if (\array_key_exists('account_deletion_grace_delay', $data)) {
                $object->setAccountDeletionGraceDelay($data['account_deletion_grace_delay']);
                unset($data['account_deletion_grace_delay']);
            }
            if (\array_key_exists('show_admin_signup_page', $data)) {
                $object->setShowAdminSignupPage($data['show_admin_signup_page']);
                unset($data['show_admin_signup_page']);
            }
            if (\array_key_exists('track_workspace_usage', $data)) {
                $object->setTrackWorkspaceUsage($data['track_workspace_usage']);
                unset($data['track_workspace_usage']);
            }
            if (\array_key_exists('show_baserow_help_request', $data)) {
                $object->setShowBaserowHelpRequest($data['show_baserow_help_request']);
                unset($data['show_baserow_help_request']);
            }
            if (\array_key_exists('co_branding_logo', $data) && null !== $data['co_branding_logo']) {
                $object->setCoBrandingLogo($this->denormalizer->denormalize($data['co_branding_logo'], \CedricZiel\Baserow\Generated\Model\SettingsCoBrandingLogo::class, 'json', $context));
                unset($data['co_branding_logo']);
            } elseif (\array_key_exists('co_branding_logo', $data) && null === $data['co_branding_logo']) {
                $object->setCoBrandingLogo(null);
            }
            if (\array_key_exists('email_verification', $data) && null !== $data['email_verification']) {
                $object->setEmailVerification($data['email_verification']);
                unset($data['email_verification']);
            } elseif (\array_key_exists('email_verification', $data) && null === $data['email_verification']) {
                $object->setEmailVerification(null);
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
            if ($object->isInitialized('allowNewSignups') && null !== $object->getAllowNewSignups()) {
                $data['allow_new_signups'] = $object->getAllowNewSignups();
            }
            if ($object->isInitialized('allowSignupsViaWorkspaceInvitations') && null !== $object->getAllowSignupsViaWorkspaceInvitations()) {
                $data['allow_signups_via_workspace_invitations'] = $object->getAllowSignupsViaWorkspaceInvitations();
            }
            if ($object->isInitialized('allowSignupsViaGroupInvitations') && null !== $object->getAllowSignupsViaGroupInvitations()) {
                $data['allow_signups_via_group_invitations'] = $object->getAllowSignupsViaGroupInvitations();
            }
            if ($object->isInitialized('allowResetPassword') && null !== $object->getAllowResetPassword()) {
                $data['allow_reset_password'] = $object->getAllowResetPassword();
            }
            if ($object->isInitialized('allowGlobalWorkspaceCreation') && null !== $object->getAllowGlobalWorkspaceCreation()) {
                $data['allow_global_workspace_creation'] = $object->getAllowGlobalWorkspaceCreation();
            }
            if ($object->isInitialized('allowGlobalGroupCreation') && null !== $object->getAllowGlobalGroupCreation()) {
                $data['allow_global_group_creation'] = $object->getAllowGlobalGroupCreation();
            }
            if ($object->isInitialized('accountDeletionGraceDelay') && null !== $object->getAccountDeletionGraceDelay()) {
                $data['account_deletion_grace_delay'] = $object->getAccountDeletionGraceDelay();
            }
            if ($object->isInitialized('showAdminSignupPage') && null !== $object->getShowAdminSignupPage()) {
                $data['show_admin_signup_page'] = $object->getShowAdminSignupPage();
            }
            if ($object->isInitialized('trackWorkspaceUsage') && null !== $object->getTrackWorkspaceUsage()) {
                $data['track_workspace_usage'] = $object->getTrackWorkspaceUsage();
            }
            if ($object->isInitialized('showBaserowHelpRequest') && null !== $object->getShowBaserowHelpRequest()) {
                $data['show_baserow_help_request'] = $object->getShowBaserowHelpRequest();
            }
            if ($object->isInitialized('coBrandingLogo') && null !== $object->getCoBrandingLogo()) {
                $data['co_branding_logo'] = $this->normalizer->normalize($object->getCoBrandingLogo(), 'json', $context);
            }
            if ($object->isInitialized('emailVerification') && null !== $object->getEmailVerification()) {
                $data['email_verification'] = $object->getEmailVerification();
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
            return [\CedricZiel\Baserow\Generated\Model\Settings::class => false];
        }
    }
}

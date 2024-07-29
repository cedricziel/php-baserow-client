<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace CedricZiel\Baserow\Generated\Model;

class LicenseWithUsers extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $id;
    /**
     * Unique identifier of the license.
     *
     * @var string
     */
    protected $licenseId;
    /**
     * Indicates if the backend deems the license valid.
     *
     * @var bool
     */
    protected $isActive;
    /**
     * @var \DateTime|null
     */
    protected $lastCheck;
    /**
     * From which timestamp the license becomes active.
     *
     * @var \DateTime
     */
    protected $validFrom;
    /**
     * Until which timestamp the license is active.
     *
     * @var \DateTime
     */
    protected $validThrough;
    /**
     * The amount of free users that are currently using the license.
     *
     * @var int
     */
    protected $freeUsersCount;
    /**
     * The amount of users that are currently using the license.
     *
     * @var int
     */
    protected $seatsTaken;
    /**
     * The maximum amount of users that can use the license.
     *
     * @var int
     */
    protected $seats;
    /**
     * The product code that indicates what the license unlocks.
     *
     * @var string
     */
    protected $productCode;
    /**
     * The date when the license was issued. It could be that a new license is issued with the same `license_id` because it was updated. In that case, the one that has been issued last should be used.
     *
     * @var \DateTime
     */
    protected $issuedOn;
    /**
     * Indicates to which email address the license has been issued.
     *
     * @var string
     */
    protected $issuedToEmail;
    /**
     * Indicates to whom the license has been issued.
     *
     * @var string
     */
    protected $issuedToName;
    /**
     * @var list<LicenseUser>
     */
    protected $users;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Unique identifier of the license.
     */
    public function getLicenseId(): string
    {
        return $this->licenseId;
    }

    /**
     * Unique identifier of the license.
     */
    public function setLicenseId(string $licenseId): self
    {
        $this->initialized['licenseId'] = true;
        $this->licenseId = $licenseId;

        return $this;
    }

    /**
     * Indicates if the backend deems the license valid.
     */
    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    /**
     * Indicates if the backend deems the license valid.
     */
    public function setIsActive(bool $isActive): self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;

        return $this;
    }

    public function getLastCheck(): ?\DateTime
    {
        return $this->lastCheck;
    }

    public function setLastCheck(?\DateTime $lastCheck): self
    {
        $this->initialized['lastCheck'] = true;
        $this->lastCheck = $lastCheck;

        return $this;
    }

    /**
     * From which timestamp the license becomes active.
     */
    public function getValidFrom(): \DateTime
    {
        return $this->validFrom;
    }

    /**
     * From which timestamp the license becomes active.
     */
    public function setValidFrom(\DateTime $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Until which timestamp the license is active.
     */
    public function getValidThrough(): \DateTime
    {
        return $this->validThrough;
    }

    /**
     * Until which timestamp the license is active.
     */
    public function setValidThrough(\DateTime $validThrough): self
    {
        $this->initialized['validThrough'] = true;
        $this->validThrough = $validThrough;

        return $this;
    }

    /**
     * The amount of free users that are currently using the license.
     */
    public function getFreeUsersCount(): int
    {
        return $this->freeUsersCount;
    }

    /**
     * The amount of free users that are currently using the license.
     */
    public function setFreeUsersCount(int $freeUsersCount): self
    {
        $this->initialized['freeUsersCount'] = true;
        $this->freeUsersCount = $freeUsersCount;

        return $this;
    }

    /**
     * The amount of users that are currently using the license.
     */
    public function getSeatsTaken(): int
    {
        return $this->seatsTaken;
    }

    /**
     * The amount of users that are currently using the license.
     */
    public function setSeatsTaken(int $seatsTaken): self
    {
        $this->initialized['seatsTaken'] = true;
        $this->seatsTaken = $seatsTaken;

        return $this;
    }

    /**
     * The maximum amount of users that can use the license.
     */
    public function getSeats(): int
    {
        return $this->seats;
    }

    /**
     * The maximum amount of users that can use the license.
     */
    public function setSeats(int $seats): self
    {
        $this->initialized['seats'] = true;
        $this->seats = $seats;

        return $this;
    }

    /**
     * The product code that indicates what the license unlocks.
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * The product code that indicates what the license unlocks.
     */
    public function setProductCode(string $productCode): self
    {
        $this->initialized['productCode'] = true;
        $this->productCode = $productCode;

        return $this;
    }

    /**
     * The date when the license was issued. It could be that a new license is issued with the same `license_id` because it was updated. In that case, the one that has been issued last should be used.
     */
    public function getIssuedOn(): \DateTime
    {
        return $this->issuedOn;
    }

    /**
     * The date when the license was issued. It could be that a new license is issued with the same `license_id` because it was updated. In that case, the one that has been issued last should be used.
     */
    public function setIssuedOn(\DateTime $issuedOn): self
    {
        $this->initialized['issuedOn'] = true;
        $this->issuedOn = $issuedOn;

        return $this;
    }

    /**
     * Indicates to which email address the license has been issued.
     */
    public function getIssuedToEmail(): string
    {
        return $this->issuedToEmail;
    }

    /**
     * Indicates to which email address the license has been issued.
     */
    public function setIssuedToEmail(string $issuedToEmail): self
    {
        $this->initialized['issuedToEmail'] = true;
        $this->issuedToEmail = $issuedToEmail;

        return $this;
    }

    /**
     * Indicates to whom the license has been issued.
     */
    public function getIssuedToName(): string
    {
        return $this->issuedToName;
    }

    /**
     * Indicates to whom the license has been issued.
     */
    public function setIssuedToName(string $issuedToName): self
    {
        $this->initialized['issuedToName'] = true;
        $this->issuedToName = $issuedToName;

        return $this;
    }

    /**
     * @return list<LicenseUser>
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param list<LicenseUser> $users
     */
    public function setUsers(array $users): self
    {
        $this->initialized['users'] = true;
        $this->users = $users;

        return $this;
    }
}

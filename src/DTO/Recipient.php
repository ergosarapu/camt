<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class Recipient implements RelatedPartyTypeInterface
{
    private ?Address $address = null;

    private ?string $countryOfResidence = null;

    private ?ContactDetails $contactDetails = null;

    /**
     * @var Identification[]
     */
    private array $identifications = [];

    public function __construct(private ?string $name = null)
    {
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCountryOfResidence(): ?string
    {
        return $this->countryOfResidence;
    }

    public function setCountryOfResidence(string $countryOfResidence): void
    {
        $this->countryOfResidence = $countryOfResidence;
    }

    public function getContactDetails(): ?ContactDetails
    {
        return $this->contactDetails;
    }

    public function setContactDetails(ContactDetails $contactDetails): void
    {
        $this->contactDetails = $contactDetails;
    }

    public function getIdentification(): ?Identification
    {
        if (isset($this->identifications[0])) {
            return $this->identifications[0];
        }

        return null;
    }

    public function setIdentification(Identification $identification): void
    {
        $this->identifications = [];
        $this->addIdentification($identification);
    }

    public function addIdentification(Identification $identification): void
    {
        $this->identifications[] = $identification;
    }

    /**
     * @return Identification[]
     */
    public function getIdentifications(): array
    {
        return $this->identifications;
    }
}

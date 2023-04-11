<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class Creditor implements RelatedPartyTypeInterface
{
    private ?Address $address = null;

    /**
     * @var Identification[]
     */
    private array $identifications = [];

    public function __construct(private ?string $name)
    {
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function getName(): ?string
    {
        return $this->name;
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

    public function getIdentification(): ?Identification
    {
        if (isset($this->identifications[0])) {
            return $this->identifications[0];
        }

        return null;
    }
}

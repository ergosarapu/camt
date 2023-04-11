<?php

declare(strict_types=1);

namespace Genkgo\Camt\DTO;

class PrivateIdentification extends Identification
{
    private ?string $otherId = null;

    private ?string $otherSchemeName = null;

    private ?string $otherIssuer = null;

    public function getOtherId(): ?string
    {
        return $this->otherId;
    }

    public function setOtherId(string $otherId): void
    {
        $this->otherId = $otherId;
        $this->identification = $otherId;
    }

    public function getOtherSchemeName(): ?string
    {
        return $this->otherSchemeName;
    }

    public function setOtherSchemeName(string $otherSchemeName): void
    {
        $this->otherSchemeName = $otherSchemeName;
    }

    public function getOtherIssuer(): ?string
    {
        return $this->otherIssuer;
    }

    public function setOtherIssuer(string $otherIssuer): void
    {
        $this->otherIssuer = $otherIssuer;
    }
}

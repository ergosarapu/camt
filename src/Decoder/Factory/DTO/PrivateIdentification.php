<?php

declare(strict_types=1);

namespace Genkgo\Camt\Decoder\Factory\DTO;

use Genkgo\Camt\DTO;
use SimpleXMLElement;

class PrivateIdentification
{
    use Behavior\Mapping;

    public static function createFromXml(SimpleXMLElement $xmlPrivateIdentification): DTO\PrivateIdentification
    {
        $privateIdentification = new DTO\PrivateIdentification();

        if (isset($xmlPrivateIdentification->Othr)) {
            $other = $xmlPrivateIdentification->Othr;
        } elseif (isset($xmlPrivateIdentification->OthrId)) {
            $other = $xmlPrivateIdentification->OthrId;
        }

        if (isset($xmlPrivateIdentification->Issr)) {
            $privateIdentification->setOtherIssuer(
                (string) $xmlPrivateIdentification->Issr
            );
        }

        if (isset($other)) {
            if (isset($other->Id)) {
                $privateIdentification->setOtherId(
                    (string) $other->Id
                );
            }
            if (isset($other->Issr)) {
                $privateIdentification->setOtherIssuer(
                    (string) $other->Issr
                );
            }
            if (isset($other->SchmeNm)) {
                $schemeName = $other->SchmeNm->Cd ?? $other->SchmeNm->Prtry;
                $privateIdentification->setOtherSchemeName((string) $schemeName);
            }
            // Only for camt052.v1, does not exist in later versions
            if (isset($other->IdTp)) {
                $privateIdentification->setOtherSchemeName(
                    (string) $other->IdTp
                );
            }
        }

        return $privateIdentification;
    }
}

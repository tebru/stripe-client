<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru\Stripe\Model\Builder\Request\LegalEntityRequest;
use Tebru\Stripe\Model\LegalEntity;
use Tebru\Stripe\Model\Property;

/**
 * Class LegalEntityBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class LegalEntityBuilder extends RequestBuilder
{
    use Property\StripeType;
    use Property\AddressObject;
    use Property\BusinessName;
    use Property\BusinessTaxId;
    use Property\BusinessVatId;
    use Property\DobObject;
    use Property\FirstName;
    use Property\LastName;
    use Property\PersonalAddressObject;
    use Property\PersonalIdNumber;
    use Property\SsnLast4;
    use Property\VerificationObject;
    use Property\AdditionalOwnersObject;


    public function build()
    {
        $legalEntity = new LegalEntity();
        $legalEntity->setAddress($this->getAddress());
        $legalEntity->setBusinessName($this->getBusinessName());
        $legalEntity->setDob($this->getDob());
        $legalEntity->setFirstName($this->getFirstName());
        $legalEntity->setLastName($this->getLastName());
        $legalEntity->setPersonalAddress($this->getPersonalAddress());
        $legalEntity->setVerification($this->getVerification());
        $legalEntity->setAdditionalOwners($this->getAdditionalOwners());

        $legalEntityRequest = new LegalEntityRequest();
        $legalEntityRequest->setBusinessTaxId($this->getBusinessTaxId());
        $legalEntityRequest->setBusinessVatId($this->getBusinessVatId());
        $legalEntityRequest->setPersonalIdNumber($this->getPersonalIdNumber());
        $legalEntityRequest->setSsnLast4($this->getSsnLast4());

        $legalEntity->setRequest($legalEntityRequest);

        return $legalEntity;
    }
}

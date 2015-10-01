<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\ReadOnly;
use Tebru\Stripe\Model\Builder\Request\LegalEntityRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class LegalEntity
 *
 * @author Nate Brunette <n@tebru.net>
 */
class LegalEntity
{
    use Property\AddressObject;
    use Property\DobObject;
    use Property\PersonalAddressObject;
    use Property\PersonalIdNumberProvided;
    use Property\SsnLast4Provided;
    use Property\VerificationObject;
    use Property\AdditionalOwnersObject;
    use Property\BusinessName;
    use Property\FirstName;
    use Property\LastName;
    use Property\StripeType;

    /**
     * @var LegalEntityRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"LegalEntity"})
     */
    private $request;

    /**
     * @return LegalEntityRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param LegalEntityRequest $request
     * @return $this
     */
    public function setRequest(LegalEntityRequest $request)
    {
        $this->request = $request;

        return $this;
    }
}

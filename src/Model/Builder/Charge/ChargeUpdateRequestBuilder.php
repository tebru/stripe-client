<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Charge;

use Tebru;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Charge;
use Tebru\Stripe\Model\Property;

/**
 * Class ChargeUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ChargeUpdateRequestBuilder extends RequestBuilder
{
    use Property\Description;
    use Property\Metadata;
    use Property\ReceiptEmail;
    use Property\FraudDetails;
    use Property\ShippingObject;

    public function build()
    {
        $charge = new Charge();
        $charge->setDescription($this->getDescription());
        $charge->setMetadata($this->getMetadata());
        $charge->setReceiptEmail($this->getReceiptEmail());
        $charge->setFraudDetails($this->getFraudDetails());
        $charge->setShipping($this->getShipping());

        return $charge;
    }
}

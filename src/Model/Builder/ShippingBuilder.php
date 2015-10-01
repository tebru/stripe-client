<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru;
use Tebru\Stripe\Model\Shipping;
use Tebru\Stripe\Model\Property;

/**
 * Class ShippingBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ShippingBuilder extends RequestBuilder
{
    use Property\AddressObject;
    use Property\Name;
    use Property\Carrier;
    use Property\Phone;
    use Property\TrackingNumber;


    public function build()
    {
        Tebru\assertNotNull($this->getName(), 'Name is required');

        $shipping = new Shipping();
        $shipping->setName($this->getName());
        $shipping->setCarrier($this->getCarrier());
        $shipping->setPhone($this->getPhone());
        $shipping->setTrackingNumber($this->getTrackingNumber());
        $shipping->setAddress($this->getAddress());

        return $shipping;
    }
}

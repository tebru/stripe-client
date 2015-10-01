<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru;
use Tebru\Stripe\Model\Address;
use Tebru\Stripe\Model\Property;

/**
 * Class AddressBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class AddressBuilder extends RequestBuilder
{
    use Property\Line1;
    use Property\Line2;
    use Property\City;
    use Property\State;
    use Property\PostalCode;
    use Property\Country;

    public function build()
    {
        Tebru\assertNotNull($this->getLine1(), 'Line 1 of Address is required');

        $address = new Address();
        $address->setLine1($this->getLine1());
        $address->setLine2($this->getLine2());
        $address->setCity($this->getCity());
        $address->setState($this->getState());
        $address->setPostalCode($this->getPostalCode());
        $address->setCountry($this->getCountry());

        return $address;
    }
}

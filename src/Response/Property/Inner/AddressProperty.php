<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Shipping\Address;

/**
 * Trait AddressProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressProperty
{
    /**
     * @var Address
     *
     * @Type("Tebru\Stripe\Response\Inner\Shipping\Address")
     */
    private $address;

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }
}

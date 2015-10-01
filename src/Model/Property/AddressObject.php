<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Address;

/**
 * Trait Address
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressObject
{
    /**
     * @var Address
     *
     * @Type("Tebru\Stripe\Model\Address")
     * @Groups({"Address", "Shipping", "AdditionalOwners"})
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
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }
}

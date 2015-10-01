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
 * Trait PersonalAddressObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PersonalAddressObject
{
    /**
     * @var Address
     *
     * @Type("Tebru\Stripe\Model\Address")
     * @Groups({"Address"})
     */
    private $personalAddress;

    /**
     * @return Address
     */
    public function getPersonalAddress()
    {
        return $this->personalAddress;
    }

    /**
     * @param Address $personalAddress
     * @return $this
     */
    public function setPersonalAddress(Address $personalAddress = null)
    {
        $this->personalAddress = $personalAddress;

        return $this;
    }
}

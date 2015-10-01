<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Country
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Country
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Address", "Shipping", "AccountCreate", "ExternalAccount", "BankAccount"})
     */
    private $country;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}

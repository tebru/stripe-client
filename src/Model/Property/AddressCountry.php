<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressCountry
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressCountry
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Source", "Card"})
     */
    private $addressCountry;

    /**
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * @param string $addressCountry
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }
}

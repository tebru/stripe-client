<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressCity
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressCity
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $addressCity;

    /**
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * @param string $addressCity
     * @return $this
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }
}

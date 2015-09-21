<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressState
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressState
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $addressState;

    /**
     * @return string
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * @param string $addressState
     * @return $this
     */
    public function setAddressState($addressState)
    {
        $this->addressState = $addressState;

        return $this;
    }
}

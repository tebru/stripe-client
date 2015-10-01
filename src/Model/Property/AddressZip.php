<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressZip
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressZip
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Source", "Card"})
     */
    private $addressZip;

    /**
     * @return string
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * @param string $addressZip
     * @return $this
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;

        return $this;
    }
}

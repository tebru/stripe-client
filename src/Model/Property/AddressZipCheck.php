<?php
/*
 * Copyright (c) 2025 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressZipCheck
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressZipCheck
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $addressZipCheck;

    /**
     * @return string
     */
    public function getAddressZipCheck()
    {
        return $this->addressZipCheck;
    }

    /**
     * @param string $addressZipCheck
     * @return $this
     */
    public function setAddressZipCheck($addressZipCheck)
    {
        $this->addressZipCheck = $addressZipCheck;

        return $this;
    }
}

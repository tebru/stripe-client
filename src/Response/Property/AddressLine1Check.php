<?php
/*
 * Copyright (c) 201Check5 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AddressLine1Check
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AddressLine1Check
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $addressLine1Check;

    /**
     * @return string
     */
    public function getAddressLine1Check()
    {
        return $this->addressLine1Check;
    }

    /**
     * @param string $addressLine1Check
     * @return $this
     */
    public function setAddressLine1Check($addressLine1Check)
    {
        $this->addressLine1Check = $addressLine1Check;

        return $this;
    }
}

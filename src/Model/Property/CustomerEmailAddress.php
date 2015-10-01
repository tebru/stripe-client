<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CustomerEmailAddress
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CustomerEmailAddress
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customerEmailAddress;

    /**
     * @return string
     */
    public function getCustomerEmailAddress()
    {
        return $this->customerEmailAddress;
    }

    /**
     * @param string $customerEmailAddress
     * @return $this
     */
    public function setCustomerEmailAddress($customerEmailAddress)
    {
        $this->customerEmailAddress = $customerEmailAddress;

        return $this;
    }
}

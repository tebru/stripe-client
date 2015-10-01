<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CustomerName
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CustomerName
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customerName;

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @param string $customerName
     * @return $this
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }
}

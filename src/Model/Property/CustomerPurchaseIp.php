<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CustomerPurchaseIp
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CustomerPurchaseIp
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customerPurchaseIp;

    /**
     * @return string
     */
    public function getCustomerPurchaseIp()
    {
        return $this->customerPurchaseIp;
    }

    /**
     * @param string $customerPurchaseIp
     * @return $this
     */
    public function setCustomerPurchaseIp($customerPurchaseIp)
    {
        $this->customerPurchaseIp = $customerPurchaseIp;

        return $this;
    }
}

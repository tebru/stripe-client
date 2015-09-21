<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CustomerCommunication
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CustomerCommunication
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customerCommunication;

    /**
     * @return string
     */
    public function getCustomerCommunication()
    {
        return $this->customerCommunication;
    }

    /**
     * @param string $customerCommunication
     * @return $this
     */
    public function setCustomerCommunication($customerCommunication)
    {
        $this->customerCommunication = $customerCommunication;

        return $this;
    }
}

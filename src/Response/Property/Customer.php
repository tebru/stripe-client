<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Customer
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Customer
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $customer;

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }
}

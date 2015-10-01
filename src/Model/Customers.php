<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Customers
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Customers extends StripeList
{
    use Property\Error;

    /**
     * @var Customer[]
     *
     * @Type("array<Tebru\Stripe\Model\Customer>")
     * @SerializedName("data")
     */
    private $customers;

    /**
     * @return Customer[]
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * @param Customer[] $customers
     * @return $this
     */
    public function setCustomers(array $customers)
    {
        $this->customers = $customers;

        return $this;
    }
}

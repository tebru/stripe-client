<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Amount
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Amount
{
    /**
     * @var int
     *
     * @Type("integer")
     * @Groups({"ChargeCreate", "ChargeCapture", "RefundCreate"})
     */
    private $amount;

    /**
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }
}

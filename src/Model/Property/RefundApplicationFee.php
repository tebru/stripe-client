<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait RefundApplicationFee
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RefundApplicationFee
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     * @Groups({"RefundCreate"})
     */
    private $refundApplicationFee = false;

    /**
     * @return boolean
     */
    public function isRefundApplicationFee()
    {
        return $this->refundApplicationFee;
    }

    /**
     * @param boolean $refundApplicationFee
     * @return $this
     */
    public function setRefundApplicationFee($refundApplicationFee)
    {
        $this->refundApplicationFee = $refundApplicationFee;

        return $this;
    }
}

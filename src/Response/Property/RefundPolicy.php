<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait RefundPolicy
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RefundPolicy
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $refundPolicy;

    /**
     * @return string
     */
    public function getRefundPolicy()
    {
        return $this->refundPolicy;
    }

    /**
     * @param string $refundPolicy
     * @return $this
     */
    public function setRefundPolicy($refundPolicy)
    {
        $this->refundPolicy = $refundPolicy;

        return $this;
    }
}

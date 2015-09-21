<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait RefundPolicyDisclosure
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RefundPolicyDisclosure
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $refundPolicyDisclosure;

    /**
     * @return string
     */
    public function getRefundPolicyDisclosure()
    {
        return $this->refundPolicyDisclosure;
    }

    /**
     * @param string $refundPolicyDisclosure
     * @return $this
     */
    public function setRefundPolicyDisclosure($refundPolicyDisclosure)
    {
        $this->refundPolicyDisclosure = $refundPolicyDisclosure;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait RefundRefusalExplanation
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RefundRefusalExplanation
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $refundRefusalExplanation;

    /**
     * @return string
     */
    public function getRefundRefusalExplanation()
    {
        return $this->refundRefusalExplanation;
    }

    /**
     * @param string $refundRefusalExplanation
     * @return $this
     */
    public function setRefundRefusalExplanation($refundRefusalExplanation)
    {
        $this->refundRefusalExplanation = $refundRefusalExplanation;

        return $this;
    }
}

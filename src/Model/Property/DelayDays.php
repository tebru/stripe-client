<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait DelayDays
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DelayDays
{
    /**
     * @var int
     *
     * @Type("integer")
     * @Groups({"ChargeCreate", "ChargeCapture", "RefundCreate", "TransferSchedule"})
     */
    private $delayDays;

    /**
     * @return integer
     */
    public function getDelayDays()
    {
        return $this->delayDays;
    }

    /**
     * @param int $delayDays
     * @return $this
     */
    public function setDelayDays($delayDays)
    {
        $this->delayDays = $delayDays;

        return $this;
    }
}

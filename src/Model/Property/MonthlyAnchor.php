<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait MonthlyAnchor
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait MonthlyAnchor
{
    /**
     * @var int
     *
     * @Type("integer")
     * @Groups({"ChargeCreate", "ChargeCapture", "RefundCreate", "TransferSchedule"})
     */
    private $monthlyAnchor;

    /**
     * @return integer
     */
    public function getMonthlyAnchor()
    {
        return $this->monthlyAnchor;
    }

    /**
     * @param int $monthlyAnchor
     * @return $this
     */
    public function setMonthlyAnchor($monthlyAnchor)
    {
        $this->monthlyAnchor = $monthlyAnchor;

        return $this;
    }
}

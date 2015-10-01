<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait CurrentPeriodStart
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CurrentPeriodStart
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $currentPeriodStart;

    /**
     * @return DateTime
     */
    public function getCurrentPeriodStart()
    {
        return $this->currentPeriodStart;
    }

    /**
     * @param DateTime $currentPeriodStart
     * @return $this
     */
    public function setCurrentPeriodStart(DateTime $currentPeriodStart)
    {
        $this->currentPeriodStart = $currentPeriodStart;

        return $this;
    }
}

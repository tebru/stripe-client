<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait CurrentPeriodEnd
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CurrentPeriodEnd
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $currentPeriodEnd;

    /**
     * @return DateTime
     */
    public function getCurrentPeriodEnd()
    {
        return $this->currentPeriodEnd;
    }

    /**
     * @param DateTime $currentPeriodEnd
     * @return $this
     */
    public function setCurrentPeriodEnd(DateTime $currentPeriodEnd)
    {
        $this->currentPeriodEnd = $currentPeriodEnd;

        return $this;
    }
}

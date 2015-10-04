<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru\Stripe\Model\Property;
use Tebru\Stripe\Model\TransferSchedule;

/**
 * Class TransferScheduleBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferScheduleBuilder extends RequestBuilder
{
    use Property\DelayDays;
    use Property\Interval;
    use Property\MonthlyAnchor;
    use Property\WeeklyAnchor;

    public function build()
    {
        $transferSchedule = new TransferSchedule();
        $transferSchedule->setDelayDays($this->getDelayDays());
        $transferSchedule->setInterval($this->getInterval());
        $transferSchedule->setMonthlyAnchor($this->getMonthlyAnchor());
        $transferSchedule->setWeeklyAnchor($this->getWeeklyAnchor());

        return $transferSchedule;
    }
}

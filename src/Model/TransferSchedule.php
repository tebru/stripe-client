<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class TransferSchedule
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferSchedule
{
    use Property\DelayDays;
    use Property\Interval;
    use Property\MonthlyAnchor;
    use Property\WeeklyAnchor;
}

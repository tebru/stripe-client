<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Plan
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Plan
{
    use Property\Error;
    use Property\Interval;
    use Property\Name;
    use Property\Created;
    use Property\Amount;
    use Property\Currency;
    use Property\Id;
    use Property\Object;
    use Property\LiveMode;
    use Property\IntervalCount;
    use Property\TrialPeriodDays;
    use Property\Metadata;
    use Property\StatementDescriptor;
}

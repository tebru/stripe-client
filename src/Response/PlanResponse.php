<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Interval;
use Tebru\Stripe\Response\Property\IntervalCount;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Name;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\StatementDescriptor;
use Tebru\Stripe\Response\Property\TrialPeriodDays;

/**
 * Class PlanResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class PlanResponse extends StripeResponse
{
    use Interval;
    use Name;
    use Created;
    use Amount;
    use Currency;
    use Id;
    use Object;
    use LiveMode;
    use IntervalCount;
    use TrialPeriodDays;
    use MetaData;
    use StatementDescriptor;
}

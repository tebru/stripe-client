<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Subscription
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Subscription
{
    use Property\Error;
    use Property\Id;
    use Property\PlanObject;
    use Property\Object;
    use Property\Start;
    use Property\Status;
    use Property\CustomerId;
    use Property\CancelAtPeriodEnd;
    use Property\CurrentPeriodStart;
    use Property\CurrentPeriodEnd;
    use Property\EndedAt;
    use Property\TrialStart;
    use Property\TrialEnd;
    use Property\CanceledAt;
    use Property\Quantity;
    use Property\ApplicationFeePercent;
    use Property\DiscountObject;
    use Property\TaxPercent;
    use Property\Metadata;
}

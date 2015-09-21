<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\ApplicationFeePercent;
use Tebru\Stripe\Response\Property\CancelAtPeriodEnd;
use Tebru\Stripe\Response\Property\CanceledAt;
use Tebru\Stripe\Response\Property\CurrentPeriodEnd;
use Tebru\Stripe\Response\Property\CurrentPeriodStart;
use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\EndedAt;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\DiscountProperty;
use Tebru\Stripe\Response\Property\Inner\PlanProperty;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Quantity;
use Tebru\Stripe\Response\Property\Start;
use Tebru\Stripe\Response\Property\Status;
use Tebru\Stripe\Response\Property\TaxPercent;
use Tebru\Stripe\Response\Property\TrialEnd;
use Tebru\Stripe\Response\Property\TrialStart;

/**
 * Class SubscriptionResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class SubscriptionResponse extends StripeResponse
{
    use Id;
    use PlanProperty;
    use Object;
    use Start;
    use Status;
    use Customer;
    use CancelAtPeriodEnd;
    use CurrentPeriodStart;
    use CurrentPeriodEnd;
    use EndedAt;
    use TrialStart;
    use TrialEnd;
    use CanceledAt;
    use Quantity;
    use ApplicationFeePercent;
    use DiscountProperty;
    use TaxPercent;
    use MetaData;
}

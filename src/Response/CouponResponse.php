<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\AmountOff;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Duration;
use Tebru\Stripe\Response\Property\DurationInMonths;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MaxRedemptions;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\PercentOff;
use Tebru\Stripe\Response\Property\RedeemBy;
use Tebru\Stripe\Response\Property\TimesRedeemed;
use Tebru\Stripe\Response\Property\Valid;

/**
 * Class CouponResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CouponResponse extends StripeResponse
{
    use Id;
    use Created;
    use PercentOff;
    use AmountOff;
    use Currency;
    use Object;
    use LiveMode;
    use Duration;
    use RedeemBy;
    use MaxRedemptions;
    use TimesRedeemed;
    use DurationInMonths;
    use Valid;
    use MetaData;
}

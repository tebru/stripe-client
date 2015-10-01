<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Coupon
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Coupon
{
    use Property\Error;
    use Property\Id;
    use Property\Created;
    use Property\PercentOff;
    use Property\AmountOff;
    use Property\Currency;
    use Property\Object;
    use Property\LiveMode;
    use Property\Duration;
    use Property\RedeemBy;
    use Property\MaxRedemptions;
    use Property\TimesRedeemed;
    use Property\DurationInMonths;
    use Property\Valid;
    use Property\Metadata;
}

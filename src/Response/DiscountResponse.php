<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\End;
use Tebru\Stripe\Response\Property\Inner\CouponProperty;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Start;
use Tebru\Stripe\Response\Property\Subscription;

/**
 * Class DiscountResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class DiscountResponse extends StripeResponse
{
    use CouponProperty;
    use Start;
    use Object;
    use Customer;
    use Subscription;
    use End;
}

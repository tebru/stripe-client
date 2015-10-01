<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Discount
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Discount
{
    use Property\Error;
    use Property\Coupon;
    use Property\Start;
    use Property\Object;
    use Property\CustomerId;
    use Property\Subscription;
    use Property\End;
}

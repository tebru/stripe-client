<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use Tebru\Stripe\Response\Property\Carrier;
use Tebru\Stripe\Response\Property\Inner\AddressProperty;
use Tebru\Stripe\Response\Property\Name;
use Tebru\Stripe\Response\Property\Phone;
use Tebru\Stripe\Response\Property\TrackingNumber;

/**
 * Class ShippingProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Shipping
{
    use AddressProperty;
    use Name;
    use Carrier;
    use Phone;
    use TrackingNumber;
}

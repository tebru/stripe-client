<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner\Shipping;

use Tebru\Stripe\Response\Property\City;
use Tebru\Stripe\Response\Property\Country;
use Tebru\Stripe\Response\Property\Line1;
use Tebru\Stripe\Response\Property\Line2;
use Tebru\Stripe\Response\Property\PostalCode;
use Tebru\Stripe\Response\Property\State;

/**
 * Class AddressProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Address
{
    use Line1;
    use Line2;
    use City;
    use State;
    use PostalCode;
    use Country;
}

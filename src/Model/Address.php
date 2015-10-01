<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Address
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Address
{
    use Property\Line1;
    use Property\Line2;
    use Property\City;
    use Property\State;
    use Property\PostalCode;
    use Property\Country;
}

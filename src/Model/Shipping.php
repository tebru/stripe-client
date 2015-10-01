<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Shipping
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Shipping
{
    use Property\AddressObject;
    use Property\Name;
    use Property\Carrier;
    use Property\Phone;
    use Property\TrackingNumber;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class ActiveAccount
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ActiveAccount
{
    use Property\Id;
    use Property\Object;
    use Property\Country;
    use Property\Currency;
    use Property\Last4;
    use Property\Status;
    use Property\BankName;
    use Property\Fingerprint;
    use Property\RoutingNumber;
}

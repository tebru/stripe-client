<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner;

use Tebru\Stripe\Response\Property\BankName;
use Tebru\Stripe\Response\Property\Country;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Fingerprint;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Last4;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\RoutingNumber;
use Tebru\Stripe\Response\Property\Status;

/**
 * Class ActiveAccount
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ActiveAccount
{
    use Id;
    use Object;
    use Country;
    use Currency;
    use Last4;
    use Status;
    use BankName;
    use Fingerprint;
    use RoutingNumber;
}

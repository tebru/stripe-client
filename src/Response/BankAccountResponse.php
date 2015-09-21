<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Account;
use Tebru\Stripe\Response\Property\BankName;
use Tebru\Stripe\Response\Property\Country;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\DefaultForCurrency;
use Tebru\Stripe\Response\Property\Fingerprint;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Last4;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\RoutingNumber;
use Tebru\Stripe\Response\Property\Status;

/**
 * Class BankAccountResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class BankAccountResponse extends StripeResponse
{
    use Object;
    use Id;
    use Last4;
    use Country;
    use Currency;
    use Status;
    use Fingerprint;
    use RoutingNumber;
    use BankName;
    use Account;
    use DefaultForCurrency;
    use MetaData;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Inner\Refunds;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\BalanceTransaction;
use Tebru\Stripe\Response\Property\Charge;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Reason;
use Tebru\Stripe\Response\Property\ReceiptNumber;

/**
 * Class Data
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Data
{
    use Id;
    use Object;
    use Amount;
    use Created;
    use Currency;
    use MetaData;
    use BalanceTransaction;
    use Charge;
    use Description;
    use Reason;
    use ReceiptNumber;
}

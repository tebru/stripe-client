<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\BalanceTransaction;
use Tebru\Stripe\Response\Property\Charge;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Reason;
use Tebru\Stripe\Response\Property\ReceiptNumber;

/**
 * Class RefundResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RefundResponse extends StripeResponse
{
    use Id;
    use Amount;
    use Currency;
    use Created;
    use Object;
    use BalanceTransaction;
    use MetaData;
    use Charge;
    use ReceiptNumber;
    use Reason;
}

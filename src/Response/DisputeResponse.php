<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\Charge;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\BalanceTransactionsProperty;
use Tebru\Stripe\Response\Property\Inner\EvidenceDetailsProperty;
use Tebru\Stripe\Response\Property\Inner\EvidenceProperty;
use Tebru\Stripe\Response\Property\IsChargeRefundable;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Reason;
use Tebru\Stripe\Response\Property\Status;

/**
 * Class DisputeResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class DisputeResponse extends StripeResponse
{
    use Id;
    use Charge;
    use Amount;
    use Created;
    use Status;
    use LiveMode;
    use Currency;
    use Object;
    use Reason;
    use IsChargeRefundable;
    use BalanceTransactionsProperty;
    use EvidenceDetailsProperty;
    use EvidenceProperty;

}

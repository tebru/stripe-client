<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\AmountDue;
use Tebru\Stripe\Response\Property\ApplicationFee;
use Tebru\Stripe\Response\Property\AttemptCount;
use Tebru\Stripe\Response\Property\Attempted;
use Tebru\Stripe\Response\Property\Charge;
use Tebru\Stripe\Response\Property\Closed;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\Date;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\EndingBalance;
use Tebru\Stripe\Response\Property\Forgiven;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\DiscountProperty;
use Tebru\Stripe\Response\Property\Inner\LinesProperty;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\NextPaymentAttempt;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Paid;
use Tebru\Stripe\Response\Property\PeriodEnd;
use Tebru\Stripe\Response\Property\PeriodStart;
use Tebru\Stripe\Response\Property\ReceiptNumber;
use Tebru\Stripe\Response\Property\StartingBalance;
use Tebru\Stripe\Response\Property\StatementDescriptor;
use Tebru\Stripe\Response\Property\Subscription;
use Tebru\Stripe\Response\Property\Subtotal;
use Tebru\Stripe\Response\Property\TaxPercent;
use Tebru\Stripe\Response\Property\Total;
use Tebru\Stripe\Response\Property\WebhooksDeliveredAt;

/**
 * Class InvoiceResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class InvoiceResponse extends StripeResponse
{
    use Date;
    use Id;
    use PeriodStart;
    use PeriodEnd;
    use LinesProperty;
    use Subtotal;
    use Total;
    use Customer;
    use Object;
    use Attempted;
    use Closed;
    use Forgiven;
    use Paid;
    use LiveMode;
    use AttemptCount;
    use AmountDue;
    use Currency;
    use StartingBalance;
    use EndingBalance;
    use NextPaymentAttempt;
    use WebhooksDeliveredAt;
    use Charge;
    use DiscountProperty;
    use ApplicationFee;
    use Subscription;
    use TaxPercent;
    use MetaData;
    use StatementDescriptor;
    use Description;
    use ReceiptNumber;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Invoice
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Invoice
{
    use Property\Error;
    use Property\Date;
    use Property\Id;
    use Property\PeriodStart;
    use Property\PeriodEnd;
    use Property\Lines;
    use Property\Subtotal;
    use Property\Total;
    use Property\CustomerId;
    use Property\Object;
    use Property\Attempted;
    use Property\Closed;
    use Property\Forgiven;
    use Property\Paid;
    use Property\LiveMode;
    use Property\AttemptCount;
    use Property\AmountDue;
    use Property\Currency;
    use Property\StartingBalance;
    use Property\EndingBalance;
    use Property\NextPaymentAttempt;
    use Property\WebhooksDeliveredAt;
    use Property\ChargeId;
    use Property\DiscountObject;
    use Property\ApplicationFee;
    use Property\Subscription;
    use Property\TaxPercent;
    use Property\Metadata;
    use Property\StatementDescriptor;
    use Property\Description;
    use Property\ReceiptNumber;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\AmountRefunded;
use Tebru\Stripe\Response\Property\ApplicationFee;
use Tebru\Stripe\Response\Property\BalanceTransaction;
use Tebru\Stripe\Response\Property\Captured;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Destination;
use Tebru\Stripe\Response\Property\Dispute;
use Tebru\Stripe\Response\Property\FailureCode;
use Tebru\Stripe\Response\Property\FailureMessage;
use Tebru\Stripe\Response\Property\FraudDetails;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\RefundsProperty;
use Tebru\Stripe\Response\Property\Inner\ShippingProperty;
use Tebru\Stripe\Response\Property\Inner\SourceProperty;
use Tebru\Stripe\Response\Property\Invoice;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Paid;
use Tebru\Stripe\Response\Property\ReceiptEmail;
use Tebru\Stripe\Response\Property\ReceiptNumber;
use Tebru\Stripe\Response\Property\Refunded;
use Tebru\Stripe\Response\Property\StatementDescriptor;
use Tebru\Stripe\Response\Property\Status;
use Tebru\Stripe\Response\Property\Transfer;

/**
 * Class ChargeResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ChargeResponse extends StripeResponse
{
    use Id;
    use Object;
    use Created;
    use LiveMode;
    use Paid;
    use Status;
    use Amount;
    use Currency;
    use Refunded;
    use SourceProperty;
    use Captured;
    use BalanceTransaction;
    use FailureMessage;
    use FailureCode;
    use AmountRefunded;
    use Customer;
    use Invoice;
    use Description;
    use Dispute;
    use MetaData;
    use StatementDescriptor;
    use FraudDetails;
    use Transfer;
    use ReceiptEmail;
    use ReceiptNumber;
    use ShippingProperty;
    use Destination;
    use ApplicationFee;
    use RefundsProperty;
}

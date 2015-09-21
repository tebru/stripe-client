<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\AmountReversed;
use Tebru\Stripe\Response\Property\ApplicationFee;
use Tebru\Stripe\Response\Property\BalanceTransaction;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Date;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Destination;
use Tebru\Stripe\Response\Property\FailureCode;
use Tebru\Stripe\Response\Property\FailureMessage;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\BankAccountProperty;
use Tebru\Stripe\Response\Property\Inner\ReversalsProperty;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Recipient;
use Tebru\Stripe\Response\Property\Reversed;
use Tebru\Stripe\Response\Property\SourceTransaction;
use Tebru\Stripe\Response\Property\StatementDescriptor;
use Tebru\Stripe\Response\Property\Status;
use Tebru\Stripe\Response\Property\Type;

/**
 * Class TransferResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferResponse
{
    use Id;
    use Object;
    use Created;
    use Date;
    use LiveMode;
    use Amount;
    use Currency;
    use Reversed;
    use Status;
    use Type;
    use ReversalsProperty;
    use BalanceTransaction;
    use BankAccountProperty;
    use Destination;
    use Description;
    use FailureMessage;
    use FailureCode;
    use AmountReversed;
    use MetaData;
    use StatementDescriptor;
    use Recipient;
    use SourceTransaction;
    use ApplicationFee;
}

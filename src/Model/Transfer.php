<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Transfer
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Transfer
{
    use Property\Error;
    use Property\Id;
    use Property\Object;
    use Property\Created;
    use Property\Date;
    use Property\LiveMode;
    use Property\Amount;
    use Property\Currency;
    use Property\Reversed;
    use Property\Status;
    use Property\StripeType;
    use Property\TransferReversals;
    use Property\BalanceTransactionId;
    use Property\BankAccountObject;
    use Property\Destination;
    use Property\Description;
    use Property\FailureMessage;
    use Property\FailureCode;
    use Property\AmountReversed;
    use Property\Metadata;
    use Property\StatementDescriptor;
    use Property\RecipientId;
    use Property\SourceTransaction;
    use Property\ApplicationFee;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class TransferReversal
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferReversal
{
    use Property\Error;
    use Property\Id;
    use Property\Amount;
    use Property\Currency;
    use Property\Created;
    use Property\Object;
    use Property\BalanceTransactionId;
    use Property\Metadata;
    use Property\TransferId;
}

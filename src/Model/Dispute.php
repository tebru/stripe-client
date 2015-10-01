<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Dispute
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Dispute
{
    use Property\Error;
    use Property\Id;
    use Property\ChargeId;
    use Property\Amount;
    use Property\Created;
    use Property\Status;
    use Property\LiveMode;
    use Property\Currency;
    use Property\Object;
    use Property\Reason;
    use Property\IsChargeRefundable;
    use Property\BalanceTransactions;
    use Property\EvidenceDetails;
    use Property\EvidenceObject;

}

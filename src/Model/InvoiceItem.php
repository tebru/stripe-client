<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class InvoiceItem
 *
 * @author Nate Brunette <n@tebru.net>
 */
class InvoiceItem
{
    use Property\Error;
    use Property\Object;
    use Property\Id;
    use Property\Date;
    use Property\Amount;
    use Property\LiveMode;
    use Property\Proration;
    use Property\Currency;
    use Property\CustomerId;
    use Property\Discountable;
    use Property\Description;
    use Property\Metadata;
    use Property\InvoiceId;
    use Property\Subscription;
    use Property\Quantity;
    use Property\PlanObject;
    use Property\Period;
}

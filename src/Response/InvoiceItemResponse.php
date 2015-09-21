<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Amount;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\Date;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Discountable;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\PeriodProperty;
use Tebru\Stripe\Response\Property\Inner\PlanProperty;
use Tebru\Stripe\Response\Property\Invoice;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Proration;
use Tebru\Stripe\Response\Property\Quantity;
use Tebru\Stripe\Response\Property\Subscription;

/**
 * Class InvoiceItemResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class InvoiceItemResponse
{
    use Object;
    use Id;
    use Date;
    use Amount;
    use LiveMode;
    use Proration;
    use Currency;
    use Customer;
    use Discountable;
    use Description;
    use MetaData;
    use Invoice;
    use Subscription;
    use Quantity;
    use PlanProperty;
    use PeriodProperty;
}

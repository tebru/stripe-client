<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\AccountBalance;
use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Currency;
use Tebru\Stripe\Response\Property\DefaultSource;
use Tebru\Stripe\Response\Property\Delinquent;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Email;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Inner\DiscountProperty;
use Tebru\Stripe\Response\Property\Inner\ShippingProperty;
use Tebru\Stripe\Response\Property\Inner\SourcesProperty;
use Tebru\Stripe\Response\Property\Inner\SubscriptionsProperty;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Object;

/**
 * Class CustomerResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CustomerResponse extends StripeResponse
{
    use Object;
    use Created;
    use Id;
    use LiveMode;
    use Description;
    use Email;
    use ShippingProperty;
    use Delinquent;
    use MetaData;
    use SubscriptionsProperty;
    use DiscountProperty;
    use AccountBalance;
    use Currency;
    use SourcesProperty;
    use DefaultSource;
}

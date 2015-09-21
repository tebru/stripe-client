<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\AddressCity;
use Tebru\Stripe\Response\Property\AddressCountry;
use Tebru\Stripe\Response\Property\AddressLine1;
use Tebru\Stripe\Response\Property\AddressLine1Check;
use Tebru\Stripe\Response\Property\AddressLine2;
use Tebru\Stripe\Response\Property\AddressState;
use Tebru\Stripe\Response\Property\AddressZip;
use Tebru\Stripe\Response\Property\AddressZipCheck;
use Tebru\Stripe\Response\Property\Brand;
use Tebru\Stripe\Response\Property\Country;
use Tebru\Stripe\Response\Property\Customer;
use Tebru\Stripe\Response\Property\CvcCheck;
use Tebru\Stripe\Response\Property\DynamicLast4;
use Tebru\Stripe\Response\Property\ExpMonth;
use Tebru\Stripe\Response\Property\ExpYear;
use Tebru\Stripe\Response\Property\Funding;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\Last4;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Name;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\TokenizationMethod;

/**
 * Class CardResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardResponse extends StripeResponse
{
    use Id;
    use Object;
    use Last4;
    use Brand;
    use Funding;
    use ExpMonth;
    use ExpYear;
    use Country;
    use Name;
    use AddressLine1;
    use AddressLine2;
    use AddressCity;
    use AddressState;
    use AddressZip;
    use AddressCountry;
    use CvcCheck;
    use AddressLine1Check;
    use AddressZipCheck;
    use TokenizationMethod;
    use DynamicLast4;
    use MetaData;
    use Customer;
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response;

use Tebru\Stripe\Response\Property\Created;
use Tebru\Stripe\Response\Property\Description;
use Tebru\Stripe\Response\Property\Id;
use Tebru\Stripe\Response\Property\LiveMode;
use Tebru\Stripe\Response\Property\MetaData;
use Tebru\Stripe\Response\Property\Name;
use Tebru\Stripe\Response\Property\Object;
use Tebru\Stripe\Response\Property\Url;

/**
 * Class ProductResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ProductResponse extends StripeResponse
{
    use Id;
    use Created;
    use Updated;
    use Object;
    use LiveMode;
    use Name;
    use Caption;
    use Description;
    use Active;
    use Attributes;
    use Shippable;
    use MetaData;
    use Url;
    use PackageDimensions;
    use Images;
    use SkusProperty;
}

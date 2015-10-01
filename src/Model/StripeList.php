<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class StripeListResponse
 *
 * @author Nate Brunette <n@tebru.net>
 */
abstract class StripeList
{
    use Property\Object;
    use Property\Url;
    use Property\HasMore;
    use Property\TotalCount;
}

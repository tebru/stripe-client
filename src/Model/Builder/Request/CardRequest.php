<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Request;

use Tebru\Stripe\Model\Property;

/**
 * Class CardRequest
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CardRequest
{
    use Property\Number;
    use Property\Cvc;
    use Property\Source;
}

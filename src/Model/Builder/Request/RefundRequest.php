<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Request;

use Tebru\Stripe\Model\Property;

/**
 * Class RefundRequest
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RefundRequest
{
    use Property\Description;
    use Property\RefundApplicationFee;
    use Property\ReverseTransfer;
}

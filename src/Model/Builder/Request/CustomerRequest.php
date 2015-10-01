<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Request;

use Tebru\Stripe\Model\Property;

/**
 * Class CustomerRequest
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CustomerRequest
{
    use Property\PlanId;
    use Property\Quantity;
    use Property\Source;
    use Property\TaxPercent;
    use Property\TrialEnd;
}

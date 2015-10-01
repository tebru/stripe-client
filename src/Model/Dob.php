<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Dob
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Dob
{
    use Property\Day;
    use Property\Month;
    use Property\Year;
}

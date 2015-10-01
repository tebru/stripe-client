<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru;
use Tebru\Stripe\Model\Dob;
use Tebru\Stripe\Model\Property;

/**
 * Class DobBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class DobBuilder extends RequestBuilder
{
    use Property\Day;
    use Property\Month;
    use Property\Year;

    public function build()
    {
        Tebru\assertNotNull($this->getDay(), 'Day is required');
        Tebru\assertNotNull($this->getMonth(), 'Month is required');
        Tebru\assertNotNull($this->getYear(), 'Year is required');

        $dob = new Dob();
        $dob->setDay($this->getDay());
        $dob->setMonth($this->getMonth());
        $dob->setYear($this->getYear());

        return $dob;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Period;

/**
 * Trait Period
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PeriodProperty
{
    /**
     * @var Period
     *
     * @Type("Tebru\Stripe\Response\Inner\Period")
     */
    private $period;

    /**
     * @return Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param Period $period
     * @return $this
     */
    public function setPeriod(Period $period)
    {
        $this->period = $period;

        return $this;
    }
}

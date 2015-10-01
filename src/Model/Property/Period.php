<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait Period
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Period
{
    /**
     * @var Model\Period
     *
     * @Type("Tebru\Stripe\Model\Period")
     */
    private $period;

    /**
     * @return Model\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param Model\Period $period
     * @return $this
     */
    public function setPeriod(Model\Period $period)
    {
        $this->period = $period;

        return $this;
    }
}

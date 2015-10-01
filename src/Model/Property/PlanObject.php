<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Plan;

/**
 * Trait Plan
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PlanObject
{
    /**
     * @var Plan
     *
     * @Type("Tebru\Stripe\Model\Plan")
     * @Groups({"CustomerCreate"})
     */
    private $plan;

    /**
     * @return Plan
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param Plan $plan
     * @return $this
     */
    public function setPlan(Plan $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }
}

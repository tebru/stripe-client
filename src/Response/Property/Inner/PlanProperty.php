<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\PlanResponse;

/**
 * Trait PlanProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PlanProperty
{
    /**
     * @var PlanResponse
     *
     * @Type("Tebru\Stripe\Response\PlanResponse")
     */
    private $plan;

    /**
     * @return PlanResponse
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * @param PlanResponse $plan
     * @return $this
     */
    public function setPlan(PlanResponse $plan)
    {
        $this->plan = $plan;

        return $this;
    }
}

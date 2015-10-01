<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait PlanId
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PlanId
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"CustomerCreate"})
     */
    private $planId;

    /**
     * @return string
     */
    public function getPlanId()
    {
        return $this->planId;
    }

    /**
     * @param string $planId
     * @return $this
     */
    public function setPlanId($planId)
    {
        $this->planId = $planId;

        return $this;
    }
}

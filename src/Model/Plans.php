<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Property;

/**
 * Class Plans
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Plans extends Stripelist
{
    use Property\Error;

    /**
     * @var Plan[]
     *
     * @Type("array<Tebru\Stripe\Model\Plan>")
     * @SerializedName("data")
     */
    private $plans;

    /**
     * @return Plan[]
     */
    public function getPlans()
    {
        return $this->plans;
    }

    /**
     * @param Plan[] $plans
     * @return $this
     */
    public function setPlans(array $plans)
    {
        $this->plans = $plans;

        return $this;
    }
}

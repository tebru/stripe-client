<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait TrialPeriodDays
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TrialPeriodDays
{
    /**
     * @var integer
     *
     * @Type("integer")
     */
    private $trialPeriodDays;

    /**
     * @return integer
     */
    public function getTrialPeriodDays()
    {
        return $this->trialPeriodDays;
    }

    /**
     * @param integer $trialPeriodDays
     * @return $this
     */
    public function setTrialPeriodDays($trialPeriodDays)
    {
        $this->trialPeriodDays = $trialPeriodDays;

        return $this;
    }
}

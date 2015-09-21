<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait TrialStart
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TrialStart
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $trialStart;

    /**
     * @return DateTime
     */
    public function getTrialStart()
    {
        return $this->trialStart;
    }

    /**
     * @param DateTime $trialStart
     * @return $this
     */
    public function setTrialStart(DateTime $trialStart)
    {
        $this->trialStart = $trialStart;

        return $this;
    }
}

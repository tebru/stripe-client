<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait TrialEnd
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TrialEnd
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     * @Groups({"CustomerCreate"})
     */
    private $trialEnd;

    /**
     * @return DateTime
     */
    public function getTrialEnd()
    {
        return $this->trialEnd;
    }

    /**
     * @param DateTime $trialEnd
     * @return $this
     */
    public function setTrialEnd(DateTime $trialEnd = null)
    {
        $this->trialEnd = $trialEnd;

        return $this;
    }
}

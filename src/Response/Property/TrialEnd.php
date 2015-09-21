<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

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
    public function setTrialEnd(DateTime $trialEnd)
    {
        $this->trialEnd = $trialEnd;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait PeriodStart
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PeriodStart
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $periodStart;

    /**
     * @return DateTime
     */
    public function getPeriodStart()
    {
        return $this->periodStart;
    }

    /**
     * @param DateTime $periodStart
     * @return $this
     */
    public function setPeriodStart(DateTime $periodStart)
    {
        $this->periodStart = $periodStart;

        return $this;
    }
}

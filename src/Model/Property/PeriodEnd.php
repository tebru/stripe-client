<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait PeriodEnd
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PeriodEnd
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $periodEnd;

    /**
     * @return DateTime
     */
    public function getPeriodEnd()
    {
        return $this->periodEnd;
    }

    /**
     * @param DateTime $periodEnd
     * @return $this
     */
    public function setPeriodEnd(DateTime $periodEnd)
    {
        $this->periodEnd = $periodEnd;

        return $this;
    }
}

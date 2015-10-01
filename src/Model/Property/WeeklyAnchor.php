<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait WeeklyAnchor
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait WeeklyAnchor
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"TransferSchedule"})
     */
    private $weeklyAnchor;

    /**
     * @return string
     */
    public function getWeeklyAnchor()
    {
        return $this->weeklyAnchor;
    }

    /**
     * @param string $weeklyAnchor
     * @return $this
     */
    public function setWeeklyAnchor($weeklyAnchor)
    {
        $this->weeklyAnchor = $weeklyAnchor;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Day
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Day
{
    /**
     * @var int
     *
     * @Type("integer")
     * @Groups("Dob")
     */
    private $day;

    /**
     * @return integer
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * @param int $day
     * @return $this
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }
}

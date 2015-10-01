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
 * Trait Date
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Date
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     * @Groups({"TosAcceptance"})
     */
    private $date;

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     * @return $this
     */
    public function setDate(DateTime $date)
    {
        $this->date = $date;

        return $this;
    }
}

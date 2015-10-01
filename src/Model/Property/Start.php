<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait Start
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Start
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $start;

    /**
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param DateTime $start
     * @return $this
     */
    public function setStart(DateTime $start)
    {
        $this->start = $start;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait EndedAt
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EndedAt
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $endedAt;

    /**
     * @return DateTime
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param DateTime $endedAt
     * @return $this
     */
    public function setEndedAt(DateTime $endedAt)
    {
        $this->endedAt = $endedAt;

        return $this;
    }
}

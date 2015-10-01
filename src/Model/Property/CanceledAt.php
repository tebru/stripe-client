<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait CanceledAt
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CanceledAt
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $canceledAt;

    /**
     * @return DateTime
     */
    public function getCanceledAt()
    {
        return $this->canceledAt;
    }

    /**
     * @param DateTime $canceledAt
     * @return $this
     */
    public function setCanceledAt(DateTime $canceledAt)
    {
        $this->canceledAt = $canceledAt;

        return $this;
    }
}

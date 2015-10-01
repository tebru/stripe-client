<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait NextPaymentAttempt
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait NextPaymentAttempt
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $nextPaymentAttempt;

    /**
     * @return DateTime
     */
    public function getNextPaymentAttempt()
    {
        return $this->nextPaymentAttempt;
    }

    /**
     * @param DateTime $nextPaymentAttempt
     * @return $this
     */
    public function setNextPaymentAttempt(DateTime $nextPaymentAttempt)
    {
        $this->nextPaymentAttempt = $nextPaymentAttempt;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait EndingBalance
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EndingBalance
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $endingBalance;

    /**
     * @return integer
     */
    public function getEndingBalance()
    {
        return $this->endingBalance;
    }

    /**
     * @param int $endingBalance
     * @return $this
     */
    public function setEndingBalance($endingBalance)
    {
        $this->endingBalance = $endingBalance;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait StartingBalance
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait StartingBalance
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $startingBalance;

    /**
     * @return integer
     */
    public function getStartingBalance()
    {
        return $this->startingBalance;
    }

    /**
     * @param int $startingBalance
     * @return $this
     */
    public function setStartingBalance($startingBalance)
    {
        $this->startingBalance = $startingBalance;

        return $this;
    }
}

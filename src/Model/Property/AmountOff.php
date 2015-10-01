<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AmountOff
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AmountOff
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $amountOff;

    /**
     * @return integer
     */
    public function getAmountOff()
    {
        return $this->amountOff;
    }

    /**
     * @param int $amountOff
     * @return $this
     */
    public function setAmountOff($amountOff)
    {
        $this->amountOff = $amountOff;

        return $this;
    }
}

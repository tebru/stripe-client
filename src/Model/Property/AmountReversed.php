<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AmountReversed
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AmountReversed
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $amountReversed;

    /**
     * @return integer
     */
    public function getAmountReversed()
    {
        return $this->amountReversed;
    }

    /**
     * @param int $amountReversed
     * @return $this
     */
    public function setAmountReversed($amountReversed)
    {
        $this->amountReversed = $amountReversed;

        return $this;
    }
}

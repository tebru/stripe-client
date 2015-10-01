<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AmountDue
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AmountDue
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $amountDue;

    /**
     * @return integer
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @param int $amountDue
     * @return $this
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait DebitNegativeBalances
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DebitNegativeBalances
{
    /**
     * @var bool
     *
     * @Type("boolean")
     * @Groups("AccountUpdate")
     */
    private $debitNegativeBalances;

    /**
     * @return boolean
     */
    public function isDebitNegativeBalances()
    {
        return $this->debitNegativeBalances;
    }

    /**
     * @param boolean $debitNegativeBalances
     * @return $this
     */
    public function setDebitNegativeBalances($debitNegativeBalances)
    {
        $this->debitNegativeBalances = $debitNegativeBalances;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\BalanceTransaction;

/**
 * Trait BalanceTransactions
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BalanceTransactions
{
    /**
     * @var BalanceTransaction[]
     *
     * @Type("Tebru\Stripe\Model\BalanceTransaction")
     */
    private $balanceTransactions;

    /**
     * @return BalanceTransaction[]
     */
    public function getBalanceTransactions()
    {
        return $this->balanceTransactions;
    }

    /**
     * @param BalanceTransaction[] $balanceTransactions
     * @return $this
     */
    public function setBalanceTransactions(array $balanceTransactions)
    {
        $this->balanceTransactions = $balanceTransactions;

        return $this;
    }

}

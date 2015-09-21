<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\BalanceTransactionResponse;

/**
 * Trait BalanceTransactionsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BalanceTransactionsProperty
{
    /**
     * @var BalanceTransactionResponse[]
     *
     * @Type("Tebru\Stripe\Response\Property\BalanceTransaction")
     */
    private $balanceTransactions;

    /**
     * @return BalanceTransactionResponse[]
     */
    public function getBalanceTransactions()
    {
        return $this->balanceTransactions;
    }

    /**
     * @param BalanceTransactionResponse[] $balanceTransactions
     * @return $this
     */
    public function setBalanceTransactions(array $balanceTransactions)
    {
        $this->balanceTransactions = $balanceTransactions;

        return $this;
    }

}

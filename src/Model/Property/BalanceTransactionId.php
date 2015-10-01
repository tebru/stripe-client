<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BalanceTransaction
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BalanceTransactionId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("balance_transaction")
     */
    private $balanceTransactionId;

    /**
     * @return string
     */
    public function getBalanceTransactionId()
    {
        return $this->balanceTransactionId;
    }

    /**
     * @param string $balanceTransactionId
     * @return $this
     */
    public function setBalanceTransactionId($balanceTransactionId)
    {
        $this->balanceTransactionId = $balanceTransactionId;

        return $this;
    }
}

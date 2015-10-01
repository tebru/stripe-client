<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class BankAccounts
 *
 * @author Nate Brunette <n@tebru.net>
 */
class BankAccounts extends StripeList
{
    use Property\Error;

    /**
     * @var BankAccount[]
     *
     * @Type("array<Tebru\Stripe\Model\BankAccount>")
     * @SerializedName("data")
     */
    private $bankAccounts;

    /**
     * @return BankAccount[]
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * @param BankAccount[] $bankAccounts
     * @return $this
     */
    public function setBankAccounts(array $bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;

        return $this;
    }
}

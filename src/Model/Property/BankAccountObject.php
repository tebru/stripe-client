<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\BankAccount;

/**
 * Trait BankAccountObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BankAccountObject
{
    /**
     * @var BankAccount
     *
     * @Type("Tebru\Stripe\Model\BankAccount")
     * @Groups({"ExternalAccount", "BankAccount"})
     */
    private $bankAccount;

    /**
     * @return BankAccount
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccount $bankAccount
     * @return $this
     */
    public function setBankAccount(BankAccount $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }
}

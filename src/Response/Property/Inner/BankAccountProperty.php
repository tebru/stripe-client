<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\BankAccountResponse;

/**
 * Trait BankAccountProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BankAccountProperty
{
    /**
     * @var BankAccountResponse
     *
     * @Type("Tebru\Stripe\Response\BankAccountResponse")
     */
    private $bankAccount;

    /**
     * @return BankAccountResponse
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * @param BankAccountResponse $bankAccount
     * @return $this
     */
    public function setBankAccount(BankAccountResponse $bankAccount)
    {
        $this->bankAccount = $bankAccount;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\BankAccounts;

/**
 * Trait BankAccountsObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BankAccountsObject
{
    /**
     * @var BankAccounts
     *
     * @Type("Tebru\Stripe\Model\BankAccounts")
     */
    private $bankAccounts;

    /**
     * @return BankAccounts
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * @param BankAccounts $bankAccounts
     * @return $this
     */
    public function setBankAccounts(BankAccounts $bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;

        return $this;
    }
}

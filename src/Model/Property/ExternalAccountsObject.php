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
 * Trait ExternalAccountsObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ExternalAccountsObject
{
    /**
     * @var BankAccounts
     *
     * @Type("Tebru\Stripe\Model\BankAccounts")
     */
    private $externalAccounts;

    /**
     * @return BankAccounts
     */
    public function getExternalAccounts()
    {
        return $this->externalAccounts;
    }

    /**
     * @param BankAccounts $externalAccounts
     * @return $this
     */
    public function setExternalAccounts(BankAccounts $externalAccounts)
    {
        $this->externalAccounts = $externalAccounts;

        return $this;
    }
}

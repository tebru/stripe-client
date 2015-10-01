<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder;

use Tebru;
use Tebru\Stripe\Model\BankAccount;
use Tebru\Stripe\Model\Builder\Request\BankAccountRequest;
use Tebru\Stripe\Model\Property\AccountNumber;
use Tebru\Stripe\Model\Property\Country;
use Tebru\Stripe\Model\Property\Currency;
use Tebru\Stripe\Model\Property\RoutingNumber;

/**
 * Class BankAccountBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class BankAccountBuilder extends RequestBuilder
{
    use Country;
    use Currency;
    use RoutingNumber;
    use AccountNumber;

    public function build()
    {
        Tebru\assertNotNull($this->getRoutingNumber(), 'Routing number is required');
        Tebru\assertNotNull($this->getAccountNumber(), 'Account number is required');

        if (null === $this->getCountry()) {
            $this->setCountry('US');
        }

        if (null === $this->getCurrency()) {
            $this->setCurrency('usd');
        }

        $bankAccount = new BankAccount();
        $bankAccount->setObject('bank_account');
        $bankAccount->setCountry($this->getCountry());
        $bankAccount->setRoutingNumber($this->getRoutingNumber());

        $bankAccountRequest = new BankAccountRequest();
        $bankAccountRequest->setAccountNumber($this->getAccountNumber());

        $bankAccount->setRequest($bankAccountRequest);

        return $bankAccount;
    }
}

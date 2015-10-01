<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Account;

use Tebru\Stripe\Model\Account;
use Tebru\Stripe\Model\Builder\Request\AccountRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Property;

/**
 * Class AccountUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class AccountUpdateRequestBuilder extends RequestBuilder
{
    use Property\BusinessLogo;
    use Property\BusinessName;
    use Property\BusinessPrimaryColor;
    use Property\BusinessUrl;
    use Property\SupportEmail;
    use Property\SupportPhone;
    use Property\SupportUrl;
    use Property\DebitNegativeBalances;
    use Property\DeclineChargeOnObject;
    use Property\DefaultCurrency;
    use Property\Email;
    use Property\BankAccountObject;
    use Property\LegalEntityObject;
    use Property\ProductDescription;
    use Property\StatementDescriptor;
    use Property\TosAcceptanceObject;
    use Property\TransferScheduleObject;
    use Property\Metadata;

    public function build()
    {
        $account = new Account();
        $account->setBusinessLogo($this->getBusinessLogo());
        $account->setBusinessName($this->getBusinessName());
        $account->setBusinessPrimaryColor($this->getBusinessPrimaryColor());
        $account->setBusinessUrl($this->getBusinessUrl());
        $account->setSupportEmail($this->getSupportEmail());
        $account->setSupportPhone($this->getSupportPhone());
        $account->setSupportUrl($this->getSupportUrl());
        $account->setDebitNegativeBalances($this->isDebitNegativeBalances());
        $account->setDeclineChargeOn($this->getDeclineChargeOn());
        $account->setDefaultCurrency($this->getDefaultCurrency());
        $account->setEmail($this->getEmail());
        $account->setLegalEntity($this->getLegalEntity());
        $account->setProductDescription($this->getProductDescription());
        $account->setStatementDescriptor($this->getStatementDescriptor());
        $account->setTosAcceptance($this->getTosAcceptance());
        $account->setTransferSchedule($this->getTransferSchedule());
        $account->setMetadata($this->getMetadata());

        $accountRequest = new AccountRequest();
        $accountRequest->setBankAccount($this->getBankAccount());

        $account->setRequest($accountRequest);

        return $account;
    }
}

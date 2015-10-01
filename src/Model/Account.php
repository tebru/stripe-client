<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\ReadOnly;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Builder\Request\AccountRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class Account
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Account
{
    use Property\Error;
    use Property\Id;
    use Property\Object;
    use Property\ChargesEnabled;
    use Property\CurrenciesSupported;
    use Property\DefaultCurrency;
    use Property\DetailsSubmitted;
    use Property\TransfersEnabled;
    use Property\BusinessName;
    use Property\BusinessPrimaryColor;
    use Property\BusinessUrl;
    use Property\DisplayName;
    use Property\Email;
    use Property\Metadata;
    use Property\StatementDescriptor;
    use Property\SupportEmail;
    use Property\SupportPhone;
    use Property\SupportUrl;
    use Property\Timezone;
    use Property\Managed;
    use Property\DebitNegativeBalances;
    use Property\DeclineChargeOnObject;
    use Property\ExternalAccountsObject;
    use Property\LegalEntityObject;
    use Property\ProductDescription;
    use Property\TosAcceptanceObject;
    use Property\TransferScheduleObject;
    use Property\AccountVerificationObject;
    use Property\BusinessLogo;
    use Property\BankAccountsObject;
    use Property\Deleted;

    /**
     * @var AccountRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"AccountUpdate"})
     */
    private $request;

    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"AccountCreate"})
     */
    private $country;

    /**
     * @return AccountRequest
     */
    public function getRequest()
    {
        if (null === $this->request) {
            $this->request = new AccountRequest();
        }

        return $this->request;
    }

    /**
     * @param AccountRequest $request
     * @return $this
     */
    public function setRequest(AccountRequest $request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}

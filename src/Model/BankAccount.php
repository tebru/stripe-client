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
use Tebru\Stripe\Model\Builder\Request\BankAccountRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class BankAccount
 *
 * @author Nate Brunette <n@tebru.net>
 */
class BankAccount
{
    use Property\Error;
    use Property\Id;
    use Property\Last4;
    use Property\Country;
    use Property\Currency;
    use Property\Status;
    use Property\Fingerprint;
    use Property\RoutingNumber;
    use Property\BankName;
    use Property\AccountId;
    use Property\DefaultForCurrency;
    use Property\Metadata;

    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"ExternalAccount", "BankAccount"})
     */
    private $object;

    /**
     * @var BankAccountRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"ExternalAccount", "BankAccount"})
     */
    private $request;

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     * @return $this
     */
    public function setObject($object)
    {
        $this->object = $object;

        return $this;
    }

    /**
     * @return BankAccountRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param BankAccountRequest $request
     * @return $this
     */
    public function setRequest(BankAccountRequest $request)
    {
        $this->request = $request;

        return $this;
    }
}

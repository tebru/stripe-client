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
use Tebru\Stripe\Model\Builder\Request\CardRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class Card
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Card
{
    use Property\Error;
    use Property\Id;
    use Property\Brand;
    use Property\ExpMonth;
    use Property\ExpYear;
    use Property\Funding;
    use Property\Last4;
    use Property\Metadata;
    use Property\AddressLine1;
    use Property\AddressLine2;
    use Property\AddressCity;
    use Property\AddressState;
    use Property\AddressZip;
    use Property\AddressCountry;
    use Property\AddressLine1Check;
    use Property\AddressZipCheck;
    use Property\Country;
    use Property\CvcCheck;
    use Property\DynamicLast4;
    use Property\Name;
    use Property\TokenizationMethod;
    use Property\Fingerprint;
    use Property\RecipientId;
    use Property\CustomerId;
    use Property\AccountId;
    use Property\Currency;
    use Property\DefaultForCurrency;
    use Property\Deleted;

    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Source", "Card"})
     */
    private $object;

    /**
     * @var CardRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"Source", "Card"})
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
     * @return CardRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param CardRequest $request
     * @return $this
     */
    public function setRequest(CardRequest $request)
    {
        $this->request = $request;

        return $this;
    }
}

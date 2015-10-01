<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\ReadOnly;
use Tebru\Stripe\Model\Builder\Request\CustomerRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class Customer
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Customer
{
    use Property\Error;
    use Property\Id;
    use Property\Object;
    use Property\LiveMode;
    use Property\AccountBalance;
    use Property\Created;
    use Property\Metadata;
    use Property\Sources;
    use Property\Subscriptions;
    use Property\Currency;
    use Property\DefaultSourceId;
    use Property\Delinquent;
    use Property\Description;
    use Property\DiscountObject;
    use Property\Email;
    use Property\ShippingObject;
    use Property\Deleted;

    /**
     * @var CustomerRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"CustomerCreate", "CustomerUpdate"})
     */
    private $request;

    /**
     * @return CustomerRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param CustomerRequest $request
     * @return $this
     */
    public function setRequest(CustomerRequest $request)
    {
        $this->request = $request;

        return $this;
    }
}

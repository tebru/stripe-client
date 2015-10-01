<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Customer;

use Tebru\Stripe\Model\Builder\Request\CustomerRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Customer;
use Tebru\Stripe\Model\Property\AccountBalance;
use Tebru\Stripe\Model\Property\DefaultSourceId;
use Tebru\Stripe\Model\Property\Description;
use Tebru\Stripe\Model\Property\Email;
use Tebru\Stripe\Model\Property\Metadata;
use Tebru\Stripe\Model\Property\ShippingObject;
use Tebru\Stripe\Model\Property\Source;

/**
 * Class CustomerUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CustomerUpdateRequestBuilder extends RequestBuilder
{
    // todo coupon?

    use AccountBalance;
    use DefaultSourceId;
    use Description;
    use Email;
    use Metadata;
    use ShippingObject;
    use Source;

    public function build()
    {
        $customer = new Customer();
        $customer->setAccountBalance($this->getAccountBalance());
        $customer->setDefaultSourceId($this->getDefaultSourceId());
        $customer->setDescription($this->getDescription());
        $customer->setEmail($this->getEmail());
        $customer->setMetadata($this->getMetadata());
        $customer->setShipping($this->getShipping());

        $customerRequest = new CustomerRequest();
        $customerRequest->setSource($this->getSource());

        $customer->setRequest($customerRequest);

        return $customer;
    }
}

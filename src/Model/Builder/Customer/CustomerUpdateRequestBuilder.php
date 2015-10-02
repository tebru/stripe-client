<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Customer;

use LogicException;
use Tebru\Stripe\Model\Builder\Request\CustomerRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Customer;
use Tebru\Stripe\Model\Property;

/**
 * Class CustomerUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class CustomerUpdateRequestBuilder extends RequestBuilder
{
    // todo coupon?

    use Property\AccountBalance;
    use Property\DefaultSourceId;
    use Property\Description;
    use Property\Email;
    use Property\Metadata;
    use Property\ShippingObject;
    use Property\GenericSource;

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

        $source = $this->getSource();
        if (is_string($source)) {
            $customerRequest->setSourceId($source);
        } elseif ($source instanceof Card) {
            $customerRequest->setCardSource($source);
        } elseif (null === $source) {
        } else {
            throw new LogicException('Source must be a string or Card object');
        }

        $customer->setRequest($customerRequest);

        return $customer;
    }
}

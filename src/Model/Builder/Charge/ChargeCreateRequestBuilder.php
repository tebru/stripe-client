<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Charge;

use LogicException;
use Tebru;
use Tebru\Stripe\Model\Builder\Request\ChargeRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Card;
use Tebru\Stripe\Model\Charge;
use Tebru\Stripe\Model\Property;

/**
 * Class ChargeCreateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ChargeCreateRequestBuilder extends RequestBuilder
{
    use Property\Amount;
    use Property\Currency;
    use Property\CustomerId;
    use Property\GenericSource;
    use Property\Description;
    use Property\Metadata;
    use Property\Capture;
    use Property\StatementDescriptor;
    use Property\ReceiptEmail;
    use Property\Destination;
    use Property\ApplicationFee;
    use Property\ShippingObject;

    public function build()
    {
        Tebru\assertNotNull($this->getAmount(), 'Amount must not be null');
        Tebru\assertThat(null !== $this->getSource() || null !== $this->getCustomerId(), 'Source or Customer must not be null');

        if (null === $this->getCurrency()) {
            $this->setCurrency('usd');
        }

        $charge = new Charge();
        $charge->setAmount($this->getAmount());
        $charge->setCurrency($this->getCurrency());
        $charge->setCustomerId($this->getCustomerId());
        $charge->setDescription($this->getDescription());
        $charge->setMetadata($this->getMetadata());
        $charge->setStatementDescriptor($this->getStatementDescriptor());
        $charge->setReceiptEmail($this->getReceiptEmail());
        $charge->setDestination($this->getDestination());
        $charge->setApplicationFee($this->getApplicationFee());
        $charge->setShipping($this->getShipping());

        $chargeRequest = new ChargeRequest();
        $chargeRequest->setCapture($this->isCapture());

        $source = $this->getSource();
        if (is_string($source)) {
            $chargeRequest->setSourceId($source);
        } elseif ($source instanceof Card) {
            $chargeRequest->setCardSource($source);
        } elseif (null === $source) {
        } else {
            throw new LogicException('Source must be a string or Card object');
        }

        $charge->setRequest($chargeRequest);

        return $charge;
    }
}

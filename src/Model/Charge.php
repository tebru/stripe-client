<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Inline;
use JMS\Serializer\Annotation\ReadOnly;
use Tebru\Stripe\Model\Builder\Request\ChargeRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class Charge
 *
 * @author Nate Brunette <n@tebru.net>
 *
 * @AccessType("public_method")
 */
class Charge
{
    use Property\Error;
    use Property\Id;
    use Property\Object;
    use Property\LiveMode;
    use Property\Amount;
    use Property\AmountRefunded;
    use Property\Captured;
    use Property\Created;
    use Property\Currency;
    use Property\Metadata;
    use Property\Paid;
    use Property\Refunded;
    use Property\Refunds;
    use Property\Status;
    use Property\ApplicationFee;
    use Property\BalanceTransactionId;
    use Property\CustomerId;
    use Property\Description;
    use Property\Destination;
    use Property\DisputeObject;
    use Property\FailureCode;
    use Property\FailureMessage;
    use Property\FraudDetails;
    use Property\InvoiceId;
    use Property\ReceiptEmail;
    use Property\ReceiptNumber;
    use Property\ShippingObject;
    use Property\TransferId;

    use Property\Source;
    use Property\StatementDescriptor;

    /**
     * @var ChargeRequest;
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"ChargeCreate"})
     */
    private $request;

    /**
     * @return ChargeRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param ChargeRequest $request
     * @return $this
     */
    public function setRequest(ChargeRequest $request)
    {
        $this->request = $request;

        return $this;
    }
}

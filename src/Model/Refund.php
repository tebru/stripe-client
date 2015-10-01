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
use Tebru\Stripe\Model\Builder\Request\RefundRequest;
use Tebru\Stripe\Model\Property;

/**
 * Class Refund
 *
 * @author Nate Brunette <n@tebru.net>
 *
 * @AccessType("public_method")
 */
class Refund
{
    use Property\Error;
    use Property\Id;
    use Property\Object;
    use Property\Amount;
    use Property\Created;
    use Property\Currency;
    use Property\Metadata;
    use Property\BalanceTransactionId;
    use Property\ChargeId;
    use Property\Description;
    use Property\Reason;
    use Property\ReceiptNumber;

    /**
     * @var RefundRequest
     *
     * @ReadOnly()
     * @Inline()
     * @Groups({"RefundCreate"})
     */
    private $request;

    /**
     * @return RefundRequest
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param RefundRequest $request
     * @return $this
     */
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }
}

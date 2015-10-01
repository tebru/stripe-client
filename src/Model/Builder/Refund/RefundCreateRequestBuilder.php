<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Refund;

use Tebru\Stripe\Model\Builder\Request\RefundRequest;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Property;
use Tebru\Stripe\Model\Refund;

/**
 * Class RefundCreateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RefundCreateRequestBuilder extends RequestBuilder
{
    use Property\Amount;
    use Property\RefundApplicationFee;
    use Property\ReverseTransfer;
    use Property\Reason;
    use Property\Metadata;

    public function build()
    {
        $refund = new Refund();
        $refund->setAmount($this->getAmount());
        $refund->setReason($this->getReason());
        $refund->setMetaData($this->getMetaData());

        $refundRequest = new RefundRequest();
        $refundRequest->setRefundApplicationFee($this->shouldRefundApplicationFee());
        $refundRequest->setReverseTransfer($this->shouldReverseTransfer());

        $refund->setRequest($refundRequest);

        return $refund;
    }
}

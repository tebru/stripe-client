<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Refund;

use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Property;
use Tebru\Stripe\Model\Refund;

/**
 * Class RefundUpdateRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class RefundUpdateRequestBuilder extends RequestBuilder
{
    use Property\Metadata;

    public function build()
    {
        $refund = new Refund();
        $refund->setMetaData($this->getMetaData());

        return $refund;
    }
}

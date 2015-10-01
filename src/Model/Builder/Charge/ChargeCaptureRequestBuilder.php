<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Builder\Charge;

use Tebru;
use Tebru\Stripe\Model\Builder\RequestBuilder;
use Tebru\Stripe\Model\Charge;
use Tebru\Stripe\Model\Property;

/**
 * Class ChargeCaptureRequestBuilder
 *
 * @author Nate Brunette <n@tebru.net>
 */
class ChargeCaptureRequestBuilder extends RequestBuilder
{
    use Property\Amount;
    use Property\ApplicationFee;
    use Property\ReceiptEmail;
    use Property\StatementDescriptor;

    public function build()
    {
        $charge = new Charge();
        $charge->setAmount($this->getAmount());
        $charge->setApplicationFee($this->getApplicationFee());
        $charge->setReceiptEmail($this->getReceiptEmail());
        $charge->setStatementDescriptor($this->getStatementDescriptor());

        return $charge;
    }
}

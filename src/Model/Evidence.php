<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use Tebru\Stripe\Model\Property;

/**
 * Class Evidence
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Evidence
{
    use Property\ProductDescription;
    use Property\CustomerName;
    use Property\CustomerEmailAddress;
    use Property\CustomerPurchaseIp;
    use Property\CustomerSignature;
    use Property\BillingAddress;
    use Property\ReceiptId;
    use Property\ShippingAddress;
    use Property\ShippingDate;
    use Property\ShippingCarrier;
    use Property\ShippingTrackingNumber;
    use Property\ShippingDocumentation;
    use Property\AccessActivityLog;
    use Property\ServiceDate;
    use Property\ServiceDocumentation;
    use Property\DuplicateChargeId;
    use Property\DuplicateChargeExplanation;
    use Property\DuplicateChargeDocumentation;
    use Property\RefundPolicy;
    use Property\RefundPolicyDisclosure;
    use Property\RefundRefusalExplanation;
    use Property\CancellationPolicy;
    use Property\CancellationPolicyDisclosure;
    use Property\CancellationRebuttal;
    use Property\CustomerCommunication;
    use Property\UncategorizedText;
    use Property\UncategorizedFile;
}

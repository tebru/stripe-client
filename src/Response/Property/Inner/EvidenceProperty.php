<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use Tebru\Stripe\Response\Property\AccessActivityLog;
use Tebru\Stripe\Response\Property\BillingAddress;
use Tebru\Stripe\Response\Property\CancellationPolicy;
use Tebru\Stripe\Response\Property\CancellationPolicyDisclosure;
use Tebru\Stripe\Response\Property\CancellationRebuttal;
use Tebru\Stripe\Response\Property\CustomerCommunication;
use Tebru\Stripe\Response\Property\CustomerEmailAddress;
use Tebru\Stripe\Response\Property\CustomerName;
use Tebru\Stripe\Response\Property\CustomerPurchaseIp;
use Tebru\Stripe\Response\Property\CustomerSignature;
use Tebru\Stripe\Response\Property\DuplicateChargeDocumentation;
use Tebru\Stripe\Response\Property\DuplicateChargeExplanation;
use Tebru\Stripe\Response\Property\DuplicateChargeId;
use Tebru\Stripe\Response\Property\ProductDescription;
use Tebru\Stripe\Response\Property\Receipt;
use Tebru\Stripe\Response\Property\RefundPolicy;
use Tebru\Stripe\Response\Property\RefundPolicyDisclosure;
use Tebru\Stripe\Response\Property\RefundRefusalExplanation;
use Tebru\Stripe\Response\Property\ServiceDate;
use Tebru\Stripe\Response\Property\ServiceDocumentation;
use Tebru\Stripe\Response\Property\ShippingAddress;
use Tebru\Stripe\Response\Property\ShippingCarrier;
use Tebru\Stripe\Response\Property\ShippingDate;
use Tebru\Stripe\Response\Property\ShippingDocumentation;
use Tebru\Stripe\Response\Property\ShippingTrackingNumber;
use Tebru\Stripe\Response\Property\UncategorizedFile;
use Tebru\Stripe\Response\Property\UncategorizedText;

/**
 * Trait EvidenceProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EvidenceProperty
{
    use ProductDescription;
    use CustomerName;
    use CustomerEmailAddress;
    use CustomerPurchaseIp;
    use CustomerSignature;
    use BillingAddress;
    use Receipt;
    use ShippingAddress;
    use ShippingDate;
    use ShippingCarrier;
    use ShippingTrackingNumber;
    use ShippingDocumentation;
    use AccessActivityLog;
    use ServiceDate;
    use ServiceDocumentation;
    use DuplicateChargeId;
    use DuplicateChargeExplanation;
    use DuplicateChargeDocumentation;
    use RefundPolicy;
    use RefundPolicyDisclosure;
    use RefundRefusalExplanation;
    use CancellationPolicy;
    use CancellationPolicyDisclosure;
    use CancellationRebuttal;
    use CustomerCommunication;
    use UncategorizedText;
    use UncategorizedFile;
}

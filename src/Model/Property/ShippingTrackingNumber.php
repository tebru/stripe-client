<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ShippingTrackingNumber
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingTrackingNumber
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $shippingTrackingNumber;

    /**
     * @return string
     */
    public function getShippingTrackingNumber()
    {
        return $this->shippingTrackingNumber;
    }

    /**
     * @param string $shippingTrackingNumber
     * @return $this
     */
    public function setShippingTrackingNumber($shippingTrackingNumber)
    {
        $this->shippingTrackingNumber = $shippingTrackingNumber;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ShippingCarrier
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingCarrier
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $shippingCarrier;

    /**
     * @return string
     */
    public function getShippingCarrier()
    {
        return $this->shippingCarrier;
    }

    /**
     * @param string $shippingCarrier
     * @return $this
     */
    public function setShippingCarrier($shippingCarrier)
    {
        $this->shippingCarrier = $shippingCarrier;

        return $this;
    }
}

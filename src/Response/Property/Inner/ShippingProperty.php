<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Shipping;

/**
 * Trait ShippingProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingProperty
{
    /**
     * @var Shipping
     *
     * @Type("Tebru\Stripe\Response\Inner\Shipping")
     */
    private $shipping;

    /**
     * @return Shipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param Shipping $shipping
     * @return $this
     */
    public function setShipping(Shipping $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }
}

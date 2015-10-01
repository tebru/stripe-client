<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Shipping;

/**
 * Trait ShippingObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingObject
{
    /**
     * @var Shipping
     *
     * @Type("Tebru\Stripe\Model\Shipping")
     * @Groups({"Shipping"})
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
    public function setShipping(Shipping $shipping = null)
    {
        $this->shipping = $shipping;

        return $this;
    }
}

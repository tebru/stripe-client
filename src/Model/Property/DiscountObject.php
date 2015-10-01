<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Discount;

/**
 * Trait DiscountProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DiscountObject
{
    /**
     * @var Discount
     *
     * @Type("Tebru\Stripe\Model\Discount")
     */
    private $discount;

    /**
     * @return Discount
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param Discount $discount
     * @return $this
     */
    public function setDiscount(Discount $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

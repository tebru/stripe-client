<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait CouponProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Coupon
{
    /**
     * @var Model\Coupon
     *
     * @Type("Tebru\Stripe\Model\Coupon")
     * @Groups({"CustomerCreate"})
     */
    private $coupon;

    /**
     * @return Model\Coupon
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param Model\Coupon $coupon
     * @return $this
     */
    public function setCoupon(Model\Coupon $coupon = null)
    {
        $this->coupon = $coupon;

        return $this;
    }
}

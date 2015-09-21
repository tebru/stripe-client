<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\CouponResponse;

/**
 * Trait CouponProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CouponProperty
{
    /**
     * @var CouponResponse
     *
     * @Type("Tebru\Stripe\Response\CouponResponse")
     */
    private $coupon;

    /**
     * @return CouponResponse
     */
    public function getCoupon()
    {
        return $this->coupon;
    }

    /**
     * @param CouponResponse $coupon
     * @return $this
     */
    public function setCoupon(CouponResponse $coupon)
    {
        $this->coupon = $coupon;

        return $this;
    }
}

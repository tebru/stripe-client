<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Coupons
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Coupons extends StripeList
{
    use Property\Error;

    /**
     * @var Coupon[]
     *
     * @Type("array<Tebru\Stripe\Model\Coupon>")
     * @SerializedName("data")
     */
    private $coupons;

    /**
     * @return Coupon[]
     */
    public function getCoupons()
    {
        return $this->coupons;
    }

    /**
     * @param Coupon[] $coupons
     * @return $this
     */
    public function setCoupons(array $coupons)
    {
        $this->coupons = $coupons;

        return $this;
    }
}

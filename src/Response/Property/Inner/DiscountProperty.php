<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\DiscountResponse;

/**
 * Trait DiscountProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DiscountProperty
{
    /**
     * @var DiscountResponse
     *
     * @Type("Tebru\Stripe\Response\DiscountResponse")
     */
    private $discount;

    /**
     * @return DiscountResponse
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param DiscountResponse $discount
     * @return $this
     */
    public function setDiscount(DiscountResponse $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

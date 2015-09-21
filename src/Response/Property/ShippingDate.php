<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ShippingDate
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ShippingDate
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $shippingDate;

    /**
     * @return string
     */
    public function getShippingDate()
    {
        return $this->shippingDate;
    }

    /**
     * @param string $shippingDate
     * @return $this
     */
    public function setShippingDate($shippingDate)
    {
        $this->shippingDate = $shippingDate;

        return $this;
    }
}

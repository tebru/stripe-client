<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait IsChargeRefundable
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait IsChargeRefundable
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $isChargeRefundable;

    /**
     * @return boolean
     */
    public function isChargeRefundable()
    {
        return $this->isChargeRefundable;
    }

    /**
     * @param boolean $isChargeRefundable
     * @return $this
     */
    public function setChargeRefundable($isChargeRefundable)
    {
        $this->isChargeRefundable = $isChargeRefundable;

        return $this;
    }
}

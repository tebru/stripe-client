<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Charge
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ChargeId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("charge")
     */
    private $chargeId;

    /**
     * @return string
     */
    public function getChargeId()
    {
        return $this->chargeId;
    }

    /**
     * @param string $chargeId
     * @return $this
     */
    public function setChargeId($chargeId)
    {
        $this->chargeId = $chargeId;

        return $this;
    }
}

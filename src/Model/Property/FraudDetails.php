<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait FraudDetails
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait FraudDetails
{
    /**
     * @var array
     *
     * @Type("array")
     * @Groups({"ChargeUpdate"})
     */
    private $fraudDetails = [];

    /**
     * @return array
     */
    public function getFraudDetails()
    {
        return $this->fraudDetails;
    }

    /**
     * @param array $fraudDetails
     * @return $this
     */
    public function setFraudDetails(array $fraudDetails)
    {
        $this->fraudDetails = $fraudDetails;

        return $this;
    }
}

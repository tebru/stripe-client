<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class Charges
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Charges extends StripeList
{
    use Property\Error;

    /**
     * @var Charge[]
     *
     * @Type("array<Tebru\Stripe\Model\Charge>")
     * @SerializedName("data")
     */
    private $charges;

    /**
     * @return Charge[]
     */
    public function getCharges()
    {
        return $this->charges;
    }

    /**
     * @param Charge[] $charges
     * @return $this
     */
    public function setCharges(array $charges)
    {
        $this->charges = $charges;

        return $this;
    }
}

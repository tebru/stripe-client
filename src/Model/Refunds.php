<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model\Property;

/**
 * Class Refunds
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Refunds extends StripeList
{
    use Property\Error;

    /**
     * @var Refund[]
     *
     * @Type("array<Tebru\Stripe\Model\Refund>")
     * @SerializedName("data")
     */
    private $refunds;

    /**
     * @return Refund[]
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param Refund[] $refunds
     * @return $this
     */
    public function setRefunds(array $refunds)
    {
        $this->refunds = $refunds;

        return $this;
    }
}

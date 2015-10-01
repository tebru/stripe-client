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
 * Class Disputes
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Disputes extends StripeList
{
    use Property\Error;

    /**
     * @var Dispute[]
     *
     *
     * @Type("array<Tebru\Stripe\Model\Dispute>")
     * @SerializedName("data")
     */
    private $disputes;

    /**
     * @return Dispute[]
     */
    public function getDisputes()
    {
        return $this->disputes;
    }

    /**
     * @param Dispute[] $disputes
     * @return $this
     */
    public function setDisputes(array $disputes)
    {
        $this->disputes = $disputes;

        return $this;
    }
}

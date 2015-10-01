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
 * Class Transfers
 *
 * @author Nate Brunette <n@tebru.net>
 */
class Transfers extends StripeList
{
    use Property\Error;

    /**
     * @var Transfer[]
     *
     * @Type("array<Tebru\Stripe\Model\TransferResponse>")
     * @SerializedName("data")
     */
    private $transfers;

    /**
     * @return Transfer[]
     */
    public function getTransfers()
    {
        return $this->transfers;
    }

    /**
     * @param Transfer[] $transfers
     * @return $this
     */
    public function setTransfers(array $transfers)
    {
        $this->transfers = $transfers;

        return $this;
    }
}

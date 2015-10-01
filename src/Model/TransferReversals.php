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
 * Class TransferReversals
 *
 * @author Nate Brunette <n@tebru.net>
 */
class TransferReversals extends StripeList
{
    use Property\Error;

    /**
     * @var TransferReversal[]
     *
     * @Type("array<Tebru\Stripe\Model\TransferReversal>")
     * @SerializedName("data")
     */
    private $transferReversals;

    /**
     * @return TransferReversal[]
     */
    public function getTransferReversals()
    {
        return $this->transferReversals;
    }

    /**
     * @param TransferReversal[] $transferReversals
     * @return $this
     */
    public function setTransferReversals(array $transferReversals)
    {
        $this->transferReversals = $transferReversals;

        return $this;
    }
}

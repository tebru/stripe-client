<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait ReversalsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TransferReversals
{
    /**
     * @var Model\TransferReversals
     *
     * @Type("Tebru\Stripe\Model\TransferReversals")
     * @SerializedName("reversals")
     */
    private $transferReversals;

    /**
     * @return Model\TransferReversals
     */
    public function getTransferReversals()
    {
        return $this->transferReversals;
    }

    /**
     * @param Model\TransferReversals $transferReversals
     * @return $this
     */
    public function setTransferReversals(Model\TransferReversals $transferReversals)
    {
        $this->transferReversals = $transferReversals;

        return $this;
    }
}

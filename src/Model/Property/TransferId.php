<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Transfer
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TransferId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("transfer")
     */
    private $transferId;

    /**
     * @return string
     */
    public function getTransferId()
    {
        return $this->transferId;
    }

    /**
     * @param string $transferId
     * @return $this
     */
    public function setTransferId($transferId)
    {
        $this->transferId = $transferId;

        return $this;
    }
}

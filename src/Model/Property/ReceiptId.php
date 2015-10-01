<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Receipt
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ReceiptId
{
    /**
     * @var string
     *
     * @Type("string")
     * @SerializedName("receipt")
     */
    private $receiptId;

    /**
     * @return string
     */
    public function getReceiptId()
    {
        return $this->receiptId;
    }

    /**
     * @param string $receiptId
     * @return $this
     */
    public function setReceiptId($receiptId)
    {
        $this->receiptId = $receiptId;

        return $this;
    }
}

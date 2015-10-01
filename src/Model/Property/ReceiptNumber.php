<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ReceiptNumber
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ReceiptNumber
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $receiptNumber;

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->receiptNumber;
    }

    /**
     * @param string $receiptNumber
     * @return $this
     */
    public function setReceiptNumber($receiptNumber)
    {
        $this->receiptNumber = $receiptNumber;

        return $this;
    }
}

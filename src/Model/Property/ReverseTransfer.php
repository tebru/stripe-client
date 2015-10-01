<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait ReverseTransfer
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ReverseTransfer
{
    /**
     * @var boolean
     *
     * @Type("string")
     * @Groups({"RefundCreate"})
     */
    private $reverseTransfer = false;

    /**
     * @return boolean
     */
    public function isReverseTransfer()
    {
        return $this->reverseTransfer;
    }

    /**
     * @param boolean $reverseTransfer
     * @return $this
     */
    public function setReverseTransfer($reverseTransfer)
    {
        $this->reverseTransfer = $reverseTransfer;

        return $this;
    }
}

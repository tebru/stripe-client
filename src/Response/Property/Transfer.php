<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Transfer
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Transfer
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $transfer;

    /**
     * @return string
     */
    public function getTransfer()
    {
        return $this->transfer;
    }

    /**
     * @param string $transfer
     * @return $this
     */
    public function setTransfer($transfer)
    {
        $this->transfer = $transfer;

        return $this;
    }
}

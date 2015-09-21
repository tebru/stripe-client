<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait AmountRefunded
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AmountRefunded
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $amountRefunded;

    /**
     * @return integer
     */
    public function getAmountRefunded()
    {
        return $this->amountRefunded;
    }

    /**
     * @param int $amountRefunded
     * @return $this
     */
    public function setAmountRefunded($amountRefunded)
    {
        $this->amountRefunded = $amountRefunded;

        return $this;
    }
}

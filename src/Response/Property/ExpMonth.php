<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ExpMonth
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ExpMonth
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $expMonth;

    /**
     * @return integer
     */
    public function getExpMonth()
    {
        return $this->expMonth;
    }

    /**
     * @param int $expMonth
     * @return $this
     */
    public function setExpMonth($expMonth)
    {
        $this->expMonth = $expMonth;

        return $this;
    }
}

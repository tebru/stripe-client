<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Refunded
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Refunded
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $refunded;

    /**
     * @return boolean
     */
    public function isRefunded()
    {
        return $this->refunded;
    }

    /**
     * @param boolean $refunded
     * @return $this
     */
    public function setRefunded($refunded)
    {
        $this->refunded = $refunded;

        return $this;
    }
}

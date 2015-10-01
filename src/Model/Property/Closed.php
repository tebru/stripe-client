<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Closed
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Closed
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $closed;

    /**
     * @return boolean
     */
    public function isClosed()
    {
        return $this->closed;
    }

    /**
     * @param boolean $closed
     * @return $this
     */
    public function setClosed($closed)
    {
        $this->closed = $closed;

        return $this;
    }
}

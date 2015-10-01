<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Attempted
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Attempted
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $attempted;

    /**
     * @return boolean
     */
    public function isAttempted()
    {
        return $this->attempted;
    }

    /**
     * @param boolean $attempted
     * @return $this
     */
    public function setAttempted($attempted)
    {
        $this->attempted = $attempted;

        return $this;
    }
}

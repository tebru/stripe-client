<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Reversed
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Reversed
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $reversed;

    /**
     * @return boolean
     */
    public function isReversed()
    {
        return $this->reversed;
    }

    /**
     * @param boolean $reversed
     * @return $this
     */
    public function setReversed($reversed)
    {
        $this->reversed = $reversed;

        return $this;
    }
}

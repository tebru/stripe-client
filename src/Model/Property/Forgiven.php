<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Forgiven
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Forgiven
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $forgiven;

    /**
     * @return boolean
     */
    public function isForgiven()
    {
        return $this->forgiven;
    }

    /**
     * @param boolean $forgiven
     * @return $this
     */
    public function setForgiven($forgiven)
    {
        $this->forgiven = $forgiven;

        return $this;
    }
}

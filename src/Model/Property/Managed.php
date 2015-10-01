<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Managed
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Managed
{
    /**
     * @var bool
     *
     * @Type("boolean")
     * @Groups({"AccountCreate"})
     */
    private $managed;

    /**
     * @return boolean
     */
    public function isManaged()
    {
        return $this->managed;
    }

    /**
     * @param boolean $managed
     * @return $this
     */
    public function setManaged($managed)
    {
        $this->managed = $managed;

        return $this;
    }
}

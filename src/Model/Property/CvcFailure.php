<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait CvcFailure
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CvcFailure
{
    /**
     * @var bool
     *
     * @Type("boolean")
     * @Groups({"DeclineOnCharge"})
     */
    private $cvcFailure;

    /**
     * @return boolean
     */
    public function isCvcFailure()
    {
        return $this->cvcFailure;
    }

    /**
     * @param boolean $cvcFailure
     * @return $this
     */
    public function setCvcFailure($cvcFailure)
    {
        $this->cvcFailure = $cvcFailure;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait AvsFailure
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AvsFailure
{
    /**
     * @var bool
     *
     * @Type("boolean")
     * @Groups({"DeclineOnCharge"})
     */
    private $avsFailure;

    /**
     * @return boolean
     */
    public function isAvsFailure()
    {
        return $this->avsFailure;
    }

    /**
     * @param boolean $avsFailure
     * @return $this
     */
    public function setAvsFailure($avsFailure)
    {
        $this->avsFailure = $avsFailure;

        return $this;
    }
}

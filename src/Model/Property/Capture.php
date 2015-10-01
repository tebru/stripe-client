<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Capture
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Capture
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     * @Groups({"ChargeCreate"})
     */
    private $capture = true;

    /**
     * @return boolean
     */
    public function isCapture()
    {
        return $this->capture;
    }

    /**
     * @param boolean $capture
     * @return $this
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait LiveMode
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait LiveMode
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $livemode;

    /**
     * @return boolean
     */
    public function isLivemode()
    {
        return $this->livemode;
    }

    /**
     * @param boolean $livemode
     * @return $this
     */
    public function setLivemode($livemode)
    {
        $this->livemode = $livemode;

        return $this;
    }
}

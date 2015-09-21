<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Captured
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Captured
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $captured;

    /**
     * @return boolean
     */
    public function isCaptured()
    {
        return $this->captured;
    }

    /**
     * @param boolean $captured
     * @return $this
     */
    public function setCaptured($captured)
    {
        $this->captured = $captured;

        return $this;
    }
}

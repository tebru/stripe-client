<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait PercentOff
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PercentOff
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $percentOff;

    /**
     * @return integer
     */
    public function getPercentOff()
    {
        return $this->percentOff;
    }

    /**
     * @param int $percentOff
     * @return $this
     */
    public function setPercentOff($percentOff)
    {
        $this->percentOff = $percentOff;

        return $this;
    }
}

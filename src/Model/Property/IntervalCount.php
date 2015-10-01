<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait IntervalCount
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait IntervalCount
{
    /**
     * @var integer
     *
     * @Type("integer")
     */
    private $intervalCount;

    /**
     * @return integer
     */
    public function getIntervalCount()
    {
        return $this->intervalCount;
    }

    /**
     * @param integer $intervalCount
     * @return $this
     */
    public function setIntervalCount($intervalCount)
    {
        $this->intervalCount = $intervalCount;

        return $this;
    }
}

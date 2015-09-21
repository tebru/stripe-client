<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Interval
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Interval
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $interval;

    /**
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param string $interval
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;

        return $this;
    }
}

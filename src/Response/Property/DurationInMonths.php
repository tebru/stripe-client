<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DurationInMonths
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DurationInMonths
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $durationInMonths;

    /**
     * @return integer
     */
    public function getDurationInMonths()
    {
        return $this->durationInMonths;
    }

    /**
     * @param int $durationInMonths
     * @return $this
     */
    public function setDurationInMonths($durationInMonths)
    {
        $this->durationInMonths = $durationInMonths;

        return $this;
    }
}

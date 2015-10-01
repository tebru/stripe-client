<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait TimesRedeemed
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TimesRedeemed
{
    /**
     * @var int
     *
     * @Type("integer")
     */
    private $timesRedeemed;

    /**
     * @return integer
     */
    public function getTimesRedeemed()
    {
        return $this->timesRedeemed;
    }

    /**
     * @param int $timesRedeemed
     * @return $this
     */
    public function setTimesRedeemed($timesRedeemed)
    {
        $this->timesRedeemed = $timesRedeemed;

        return $this;
    }
}

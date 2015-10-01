<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\DeclineChargeOn;

/**
 * Trait DeclineChargeOnProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DeclineChargeOnObject
{
    /**
     * @var DeclineChargeOn
     *
     * @Type("Tebru\Stripe\Model\DeclineChargeOn")
     * @Groups({"DeclineOnCharge"})
     */
    private $declineChargeOn;

    /**
     * @return DeclineChargeOn
     */
    public function getDeclineChargeOn()
    {
        return $this->declineChargeOn;
    }

    /**
     * @param DeclineChargeOn $declineChargeOn
     * @return $this
     */
    public function setDeclineChargeOn(DeclineChargeOn $declineChargeOn = null)
    {
        $this->declineChargeOn = $declineChargeOn;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\TosAcceptance;

/**
 * Trait TosAcceptanceObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TosAcceptanceObject
{
    /**
     * @var TosAcceptance
     *
     * @Type("Tebru\Stripe\Model\TosAcceptance")
     * @Groups({"TosAcceptance"})
     */
    private $tosAcceptance;

    /**
     * @return TosAcceptance
     */
    public function getTosAcceptance()
    {
        return $this->tosAcceptance;
    }

    /**
     * @param TosAcceptance $tosAcceptance
     * @return $this
     */
    public function setTosAcceptance(TosAcceptance $tosAcceptance = null)
    {
        $this->tosAcceptance = $tosAcceptance;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\TransferSchedule;

/**
 * Trait TransferScheduleObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TransferScheduleObject
{
    /**
     * @var TransferSchedule
     *
     * @Type("Tebru\Stripe\Model\TransferSchedule")
     * @Groups({"TransferSchedule"})
     */
    private $transferSchedule;

    /**
     * @return TransferSchedule
     */
    public function getTransferSchedule()
    {
        return $this->transferSchedule;
    }

    /**
     * @param TransferSchedule $transferSchedule
     * @return $this
     */
    public function setTransferSchedule(TransferSchedule $transferSchedule = null)
    {
        $this->transferSchedule = $transferSchedule;

        return $this;
    }
}

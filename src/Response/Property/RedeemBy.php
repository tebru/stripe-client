<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

use DateTime;

/**
 * Trait RedeemBy
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RedeemBy
{
    /**
     * @var DateTime
     *
     * @Type("DateTime<'U'>")
     */
    private $redeemBy;

    /**
     * @return DateTime
     */
    public function getRedeemBy()
    {
        return $this->redeemBy;
    }

    /**
     * @param DateTime $redeemBy
     * @return $this
     */
    public function setRedeemBy(DateTime $redeemBy)
    {
        $this->redeemBy = $redeemBy;

        return $this;
    }
}

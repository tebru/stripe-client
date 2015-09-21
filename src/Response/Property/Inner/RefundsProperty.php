<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\Refunds;

/**
 * Trait RefundsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RefundsProperty
{
    /**
     * @var Refunds
     *
     * @Type("Tebru\Stripe\Response\Inner\Refunds")
     */
    private $refunds;

    /**
     * @return Refunds
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param Refunds $refunds
     * @return $this
     */
    public function setRefunds(Refunds $refunds)
    {
        $this->refunds = $refunds;

        return $this;
    }
}

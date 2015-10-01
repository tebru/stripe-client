<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait Refunds
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Refunds
{
    /**
     * @var Model\Refunds
     *
     * @Type("Tebru\Stripe\Model\Refunds")
     */
    private $refunds;

    /**
     * @return Model\Refunds
     */
    public function getRefunds()
    {
        return $this->refunds;
    }

    /**
     * @param Model\Refunds $refunds
     * @return $this
     */
    public function setRefunds(Model\Refunds $refunds)
    {
        $this->refunds = $refunds;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait CancelAtPeriodEnd
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait CancelAtPeriodEnd
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $cancelAtPeriodEnd;

    /**
     * @return boolean
     */
    public function cancelAtPeriodEnd()
    {
        return $this->cancelAtPeriodEnd;
    }

    /**
     * @param boolean $cancelAtPeriodEnd
     * @return $this
     */
    public function setCancelAtPeriodEnd($cancelAtPeriodEnd)
    {
        $this->cancelAtPeriodEnd = $cancelAtPeriodEnd;

        return $this;
    }
}

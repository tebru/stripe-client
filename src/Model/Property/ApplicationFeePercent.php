<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ApplicationFeePercent
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ApplicationFeePercent
{
    /**
     * @var double
     *
     * @Type("double")
     */
    private $applicationFeePercent;

    /**
     * @return double
     */
    public function getApplicationFeePercent()
    {
        return $this->applicationFeePercent;
    }

    /**
     * @param double $applicationFeePercent
     * @return $this
     */
    public function setApplicationFeePercent($applicationFeePercent)
    {
        $this->applicationFeePercent = $applicationFeePercent;

        return $this;
    }
}

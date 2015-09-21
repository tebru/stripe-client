<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ApplicationFee
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ApplicationFee
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $applicationFee;

    /**
     * @return string
     */
    public function getApplicationFee()
    {
        return $this->applicationFee;
    }

    /**
     * @param string $applicationFee
     * @return $this
     */
    public function setApplicationFee($applicationFee)
    {
        $this->applicationFee = $applicationFee;

        return $this;
    }
}

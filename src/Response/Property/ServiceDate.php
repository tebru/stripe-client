<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ServiceDate
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ServiceDate
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $serviceDate;

    /**
     * @return string
     */
    public function getServiceDate()
    {
        return $this->serviceDate;
    }

    /**
     * @param string $serviceDate
     * @return $this
     */
    public function setServiceDate($serviceDate)
    {
        $this->serviceDate = $serviceDate;

        return $this;
    }
}

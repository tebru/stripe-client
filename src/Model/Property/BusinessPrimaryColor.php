<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessPrimaryColor
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessPrimaryColor
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $businessPrimaryColor;

    /**
     * @return string
     */
    public function getBusinessPrimaryColor()
    {
        return $this->businessPrimaryColor;
    }

    /**
     * @param string $businessPrimaryColor
     * @return $this
     */
    public function setBusinessPrimaryColor($businessPrimaryColor)
    {
        $this->businessPrimaryColor = $businessPrimaryColor;

        return $this;
    }
}

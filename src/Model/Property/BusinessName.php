<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessName
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessName
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"AccountUpdate", "LegalEntity"})
     */
    private $businessName;

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;

        return $this;
    }
}

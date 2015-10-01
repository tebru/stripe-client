<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessLogo
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessLogo
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $businessLogo;

    /**
     * @return string
     */
    public function getBusinessLogo()
    {
        return $this->businessLogo;
    }

    /**
     * @param string $businessLogo
     * @return $this
     */
    public function setBusinessLogo($businessLogo)
    {
        $this->businessLogo = $businessLogo;

        return $this;
    }
}

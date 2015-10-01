<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessUrl
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessUrl
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $businessUrl;

    /**
     * @return string
     */
    public function getBusinessUrl()
    {
        return $this->businessUrl;
    }

    /**
     * @param string $businessUrl
     * @return $this
     */
    public function setBusinessUrl($businessUrl)
    {
        $this->businessUrl = $businessUrl;

        return $this;
    }
}

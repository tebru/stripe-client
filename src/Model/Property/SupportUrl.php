<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait SupportUrl
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SupportUrl
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $supportUrl;

    /**
     * @return string
     */
    public function getSupportUrl()
    {
        return $this->supportUrl;
    }

    /**
     * @param string $supportUrl
     * @return $this
     */
    public function setSupportUrl($supportUrl)
    {
        $this->supportUrl = $supportUrl;

        return $this;
    }
}

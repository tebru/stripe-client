<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait SupportEmail
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SupportEmail
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $supportEmail;

    /**
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * @param string $supportEmail
     * @return $this
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;

        return $this;
    }
}

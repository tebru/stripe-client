<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait SupportPhone
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait SupportPhone
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("AccountUpdate")
     */
    private $supportPhone;

    /**
     * @return string
     */
    public function getSupportPhone()
    {
        return $this->supportPhone;
    }

    /**
     * @param string $supportPhone
     * @return $this
     */
    public function setSupportPhone($supportPhone)
    {
        $this->supportPhone = $supportPhone;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Line1
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Line1
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"Address", "Shipping"})
     */
    private $line1;

    /**
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     * @return $this
     */
    public function setLine1($line1)
    {
        $this->line1 = $line1;

        return $this;
    }
}

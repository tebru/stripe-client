<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait Cvc
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Cvc
{
    /**
     * @var int
     *
     * @Type("integer")
     * @Groups({"Source", "Card"})
     */
    private $cvc;

    /**
     * @return integer
     */
    public function getCvc()
    {
        return $this->cvc;
    }

    /**
     * @param int $cvc
     * @return $this
     */
    public function setCvc($cvc)
    {
        $this->cvc = $cvc;

        return $this;
    }
}

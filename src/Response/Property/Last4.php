<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Last4
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Last4
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $last4;

    /**
     * @return string
     */
    public function getLast4()
    {
        return $this->last4;
    }

    /**
     * @param string $last4
     * @return $this
     */
    public function setLast4($last4)
    {
        $this->last4 = $last4;

        return $this;
    }
}

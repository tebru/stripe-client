<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DynamicLast4
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DynamicLast4
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $dynamicLast4;

    /**
     * @return string
     */
    public function getDynamicLast4()
    {
        return $this->dynamicLast4;
    }

    /**
     * @param string $dynamicLast4
     * @return $this
     */
    public function setDynamicLast4($dynamicLast4)
    {
        $this->dynamicLast4 = $dynamicLast4;

        return $this;
    }
}

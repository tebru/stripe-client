<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Discountable
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Discountable
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $discountable;

    /**
     * @return boolean
     */
    public function isDiscountable()
    {
        return $this->discountable;
    }

    /**
     * @param boolean $discountable
     * @return $this
     */
    public function setDiscountable($discountable)
    {
        $this->discountable = $discountable;

        return $this;
    }
}

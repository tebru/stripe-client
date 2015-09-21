<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Funding
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Funding
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $funding;

    /**
     * @return string
     */
    public function getFunding()
    {
        return $this->funding;
    }

    /**
     * @param string $funding
     * @return $this
     */
    public function setFunding($funding)
    {
        $this->funding = $funding;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait Delinquent
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Delinquent
{
    /**
     * @var bool
     *
     * @Type("boolean")
     */
    private $delinquent;

    /**
     * @return boolean
     */
    public function isDelinquent()
    {
        return $this->delinquent;
    }

    /**
     * @param boolean $delinquent
     * @return $this
     */
    public function setDelinquent($delinquent)
    {
        $this->delinquent = $delinquent;

        return $this;
    }
}

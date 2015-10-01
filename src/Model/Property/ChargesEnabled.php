<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait ChargesEnabled
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait ChargesEnabled
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $chargesEnabled;

    /**
     * @return boolean
     */
    public function isChargesEnabled()
    {
        return $this->chargesEnabled;
    }

    /**
     * @param boolean $chargesEnabled
     * @return $this
     */
    public function setChargesEnabled($chargesEnabled)
    {
        $this->chargesEnabled = $chargesEnabled;

        return $this;
    }
}

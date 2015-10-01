<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessVatId
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessVatId
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("LegalEntity")
     */
    private $businessVatId;

    /**
     * @return string
     */
    public function getBusinessVatId()
    {
        return $this->businessVatId;
    }

    /**
     * @param string $businessVatId
     * @return $this
     */
    public function setBusinessVatId($businessVatId)
    {
        $this->businessVatId = $businessVatId;

        return $this;
    }
}

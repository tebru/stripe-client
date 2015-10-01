<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait BusinessTaxId
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait BusinessTaxId
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups("LegalEntity")
     */
    private $businessTaxId;

    /**
     * @return string
     */
    public function getBusinessTaxId()
    {
        return $this->businessTaxId;
    }

    /**
     * @param string $businessTaxId
     * @return $this
     */
    public function setBusinessTaxId($businessTaxId)
    {
        $this->businessTaxId = $businessTaxId;

        return $this;
    }
}

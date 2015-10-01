<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\VirtualProperty;

/**
 * Trait DefaultForCurrency
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultForCurrency
{
    /**
     * @var boolean
     * @Type("boolean")
     * @Groups({"CardCreate"})
     */
    private $defaultForCurrency = null;

    /**
     * @return boolean
     */
    public function isDefaultForCurrency()
    {
        return $this->defaultForCurrency;
    }

    /**
     * @param boolean $defaultForCurrency
     * @return $this
     */
    public function setDefaultForCurrency($defaultForCurrency)
    {
        $this->defaultForCurrency = $defaultForCurrency;

        return $this;
    }

    /**
     * @VirtualProperty()
     * @SerializedName("default_for_currency")
     */
    public function getDefaultForCurrency()
    {
        if (null === $this->defaultForCurrency) {
            return null;
        }

        return ($this->isDefaultForCurrency()) ? 'true' : 'false';
    }
}

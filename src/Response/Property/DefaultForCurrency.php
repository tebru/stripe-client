<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DefaultForCurrency
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DefaultForCurrency
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $defaultForCurrency;

    /**
     * @return boolean
     */
    public function defaultForCurrency()
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
}

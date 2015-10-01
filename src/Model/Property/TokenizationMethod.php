<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait TokenizationMethod
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait TokenizationMethod
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $tokenizationMethod;

    /**
     * @return string
     */
    public function getTokenizationMethod()
    {
        return $this->tokenizationMethod;
    }

    /**
     * @param string $tokenizationMethod
     * @return $this
     */
    public function setTokenizationMethod($tokenizationMethod)
    {
        $this->tokenizationMethod = $tokenizationMethod;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait FailureCode
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait FailureCode
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $failureCode;

    /**
     * @return string
     */
    public function getFailureCode()
    {
        return $this->failureCode;
    }

    /**
     * @param string $failureCode
     * @return $this
     */
    public function setFailureCode($failureCode)
    {
        $this->failureCode = $failureCode;

        return $this;
    }
}

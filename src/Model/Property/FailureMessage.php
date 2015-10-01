<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait FailureMessage
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait FailureMessage
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $failureMessage;

    /**
     * @return string
     */
    public function getFailureMessage()
    {
        return $this->failureMessage;
    }

    /**
     * @param string $failureMessage
     * @return $this
     */
    public function setFailureMessage($failureMessage)
    {
        $this->failureMessage = $failureMessage;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait RoutingNumber
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait RoutingNumber
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"ExternalAccount", "BankAccount"})
     */
    private $routingNumber;

    /**
     * @return string
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * @param string $routingNumber
     * @return $this
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;

        return $this;
    }
}

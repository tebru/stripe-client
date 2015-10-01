<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait LastName
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait LastName
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"LegalEntity", "AdditionalOwners"})
     */
    private $lastName;

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }
}

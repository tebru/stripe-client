<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait FirstName
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait FirstName
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"LegalEntity", "AdditionalOwners"})
     */
    private $firstName;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }
}

<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;

/**
 * Trait PersonalIdNumber
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait PersonalIdNumber
{
    /**
     * @var string
     *
     * @Type("string")
     * @Groups({"LegalEntity"})
     */
    private $personalIdNumber;

    /**
     * @return string
     */
    public function getPersonalIdNumber()
    {
        return $this->personalIdNumber;
    }

    /**
     * @param string $personalIdNumber
     * @return $this
     */
    public function setPersonalIdNumber($personalIdNumber)
    {
        $this->personalIdNumber = $personalIdNumber;

        return $this;
    }
}

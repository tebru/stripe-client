<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Dob;

/**
 * Trait DobObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DobObject
{
    /**
     * @var Dob
     *
     * @Type("Tebru\Stripe\Model\Dob")
     * @Groups({"Dob", "AdditionalOwners"})
     */
    private $dob;

    /**
     * @return Dob
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param Dob $dob
     * @return $this
     */
    public function setDob(Dob $dob)
    {
        $this->dob = $dob;

        return $this;
    }
}

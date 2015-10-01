<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Verification;

/**
 * Trait VerificationObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait VerificationObject
{
    /**
     * @var Verification
     *
     * @Type("Tebru\Stripe\Model\Verification")
     * @Groups({"Verification", "AdditionalOwners"})
     */
    private $verification;

    /**
     * @return Verification
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * @param Verification $verification
     * @return $this
     */
    public function setVerification(Verification $verification = null)
    {
        $this->verification = $verification;

        return $this;
    }
}

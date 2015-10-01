<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\AccountVerification;

/**
 * Trait AccountVerificationObject
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait AccountVerificationObject
{
    /**
     * @var AccountVerification
     *
     * @Type("Tebru\Stripe\Model\AccountVerification")
     */
    private $verification;

    /**
     * @return AccountVerification
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * @param AccountVerification $verification
     * @return $this
     */
    public function setVerification(AccountVerification $verification)
    {
        $this->verification = $verification;

        return $this;
    }
}

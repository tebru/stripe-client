<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property\Inner;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Response\Inner\EvidenceDetails;

/**
 * Trait EvidenceDetailsProperty
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EvidenceDetailsProperty
{
    /**
     * @var EvidenceDetails
     *
     * @Type("Tebru\Stripe\Response\Inner\EvidenceDetails")
     */
    private $evidenceDetails;

    /**
     * @return EvidenceDetails
     */
    public function getEvidenceDetails()
    {
        return $this->evidenceDetails;
    }

    /**
     * @param EvidenceDetails $evidenceDetails
     * @return $this
     */
    public function setEvidenceDetails(EvidenceDetails $evidenceDetails)
    {
        $this->evidenceDetails = $evidenceDetails;

        return $this;
    }
}

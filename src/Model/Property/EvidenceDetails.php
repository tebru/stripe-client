<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;

/**
 * Trait EvidenceDetails
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EvidenceDetails
{
    /**
     * @var Model\EvidenceDetails
     *
     * @Type("Tebru\Stripe\Model\EvidenceDetails")
     */
    private $evidenceDetails;

    /**
     * @return Model\EvidenceDetails
     */
    public function getEvidenceDetails()
    {
        return $this->evidenceDetails;
    }

    /**
     * @param Model\EvidenceDetails $evidenceDetails
     * @return $this
     */
    public function setEvidenceDetails(Model\EvidenceDetails $evidenceDetails)
    {
        $this->evidenceDetails = $evidenceDetails;

        return $this;
    }
}

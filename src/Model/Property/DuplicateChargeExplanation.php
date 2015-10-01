<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DuplicateChargeExplanation
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DuplicateChargeExplanation
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $duplicateChargeExplanation;

    /**
     * @return string
     */
    public function getDuplicateChargeExplanation()
    {
        return $this->duplicateChargeExplanation;
    }

    /**
     * @param string $duplicateChargeExplanation
     * @return $this
     */
    public function setDuplicateChargeExplanation($duplicateChargeExplanation)
    {
        $this->duplicateChargeExplanation = $duplicateChargeExplanation;

        return $this;
    }
}

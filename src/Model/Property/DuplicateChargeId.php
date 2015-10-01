<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DuplicateChargeId
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DuplicateChargeId
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $duplicateChargeId;

    /**
     * @return string
     */
    public function getDuplicateChargeId()
    {
        return $this->duplicateChargeId;
    }

    /**
     * @param string $duplicateChargeId
     * @return $this
     */
    public function setDuplicateChargeId($duplicateChargeId)
    {
        $this->duplicateChargeId = $duplicateChargeId;

        return $this;
    }
}

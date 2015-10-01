<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait DuplicateChargeDocumentation
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DuplicateChargeDocumentation
{
    /**
     * @var string
     *
     * @Type("string")
     */
    private $duplicateChargeDocumentation;

    /**
     * @return string
     */
    public function getDuplicateChargeDocumentation()
    {
        return $this->duplicateChargeDocumentation;
    }

    /**
     * @param string $duplicateChargeDocumentation
     * @return $this
     */
    public function setDuplicateChargeDocumentation($duplicateChargeDocumentation)
    {
        $this->duplicateChargeDocumentation = $duplicateChargeDocumentation;

        return $this;
    }
}

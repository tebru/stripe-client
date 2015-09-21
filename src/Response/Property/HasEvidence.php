<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Response\Property;

use JMS\Serializer\Annotation\Type;

/**
 * Trait HasEvidence
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait HasEvidence
{
    /**
     * @var boolean
     *
     * @Type("boolean")
     */
    private $hasEvidence;

    /**
     * @return boolean
     */
    public function hasEvidence()
    {
        return $this->hasEvidence;
    }

    /**
     * @param boolean $hasEvidence
     * @return $this
     */
    public function setHasEvidence($hasEvidence)
    {
        $this->hasEvidence = $hasEvidence;

        return $this;
    }
}

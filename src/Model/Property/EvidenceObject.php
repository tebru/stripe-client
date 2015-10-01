<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Evidence;

/**
 * Trait Evidence
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait EvidenceObject
{
    /**
     * @var Evidence
     */
    private $evidence;

    /**
     * @return Evidence
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param Evidence $evidence
     * @return $this
     */
    public function setEvidence(Evidence $evidence)
    {
        $this->evidence = $evidence;

        return $this;
    }
}

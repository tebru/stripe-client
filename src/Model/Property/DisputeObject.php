<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Stripe\Model\Property;

use JMS\Serializer\Annotation\Type;
use Tebru\Stripe\Model;
use Tebru\Stripe\Model\Dispute;

/**
 * Trait Dispute
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait DisputeObject
{
    /**
     * @var Dispute
     *
     * @Type("Tebru\Stripe\Model\Dispute")
     */
    private $dispute;

    /**
     * @return Dispute
     */
    public function getDispute()
    {
        return $this->dispute;
    }

    /**
     * @param Dispute $dispute
     * @return $this
     */
    public function setDispute(Dispute $dispute = null)
    {
        $this->dispute = $dispute;

        return $this;
    }
}
